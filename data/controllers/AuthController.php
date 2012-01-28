<?php
	class AuthController{
		public static function createUser($user,$pass,$email)
		{
			global $emailActivation, $websiteUrl;
			$dao = new AuthDao();
			
			//Used for display only
			$unclean_username = $user;
			$status = false;
			
			//Sanitize
			$clean_email = AuthController::sanitize($email);
			$clean_password = trim($pass);
			$clean_username = AuthController::sanitize($user);
			
			$errors = array();
			
			if($dao->usernameExists($clean_username))
			{
				$errors["username_taken"] = true;
			} else if($dao->emailExists($clean_email)) {
				$errors["email_taken"] = true;
			} else {
				//No problems have been found.
				$status = true;
			}
	
			//Prevent this function being called if there were construction errors
			if($status)
			{
				//Construct a secure hash for the plain text password
				$secure_pass = AuthController::generateHash($clean_password);
				//Construct a unique activation token
				$activation_token = $dao->generateActivationToken();
				//Do we need to send out an activation email?
				if($emailActivation)
				{
					//User must activate their account first
					$user_active = 0;
	
					//Build the activation message
					$activation_message = AuthController::lang("ACTIVATION_MESSAGE",array($websiteUrl,$activation_token));
					//Define more if you want to build larger structures
					$hooks = array(
						"searchStrs" => array("#ACTIVATION-MESSAGE","#ACTIVATION-KEY","#USERNAME#"),
						"subjectStrs" => array($activation_message,$activation_token,$unclean_username)
					);
					
					$message = "
					Hello #USERNAME#
	
					Thank you for joining our website #WEBSITENAME#
					
					#ACTIVATION-MESSAGE
					
					#INC-FOOTER#
					";
					
					/* Build the template - Optional, you can just use the sendMail function 
					Instead to pass a message. */
					if(!AuthController::newTemplateMsg($message,$hooks))
					{
						$errors["mail_failure"] = true;
					}
					else
					{
						//Send the mail. Specify users email here and subject. 
						//SendMail can have a third parementer for message if you do not wish to build a template.
						
						if(!AuthController::sendMail($clean_email,"New User"))
						{
							$errors["mail_failure"] = true;
						}
					}
				}
				else
				{
					//Instant account activation
					$user_active = 1;
				}	
	
				if(!isset($errors["mail_failure"]))
				{
					//Insert the user into the database providing no errors have been found.
					$dao->createUser(
						$unclean_username, 
						$clean_username, 
						$secure_pass, 
						$clean_email, 
						$activation_token, 
						time(), 
						'0', 
						$user_active,
						1
					);
				}
			}
			return $errors;
		}
		
		//Function used for replacing hooks in our templates
		public function newTemplateMsg($contents,$additionalHooks)
		{
			global $mail_templates_dir,$debug_mode;

			//Check to see we can access the file / it has some contents
			if(!$contents || empty($contents))
			{
				if($debug_mode)
				{
					if(!$contents)
					{
						echo AuthController::lang("MAIL_TEMPLATE_DIRECTORY_ERROR",array(getenv("DOCUMENT_ROOT")));
						die(); 
					}
					else if(empty($contents))
					{
						echo AuthController::lang("MAIL_TEMPLATE_FILE_EMPTY"); 
						die();
					}
				}
				return false;
			}
			else
			{
				//Replace default hooks
				$contents = AuthController::replaceDefaultHook($contents);
			
				//Replace defined / custom hooks
				$contents = str_replace($additionalHooks["searchStrs"],$additionalHooks["subjectStrs"],$contents);
	
				//Do we need to include an email footer?
				//Try and find the #INC-FOOTER hook
				if(strpos($contents,"#INC-FOOTER#") !== FALSE)
				{
					$footer = 
					"
					- Regards
					UserCake.com
					";
					if($footer && !empty($footer)) $contents .= AuthController::replaceDefaultHook($footer); 
					$contents = str_replace("#INC-FOOTER#","",$contents);
				}
				return true;
			}
		}
		
		public static function sendMail($email,$subject,$msg = NULL)
		{
			global $websiteName,$emailAddress;
			
			$header = "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$header .= "From: ". $websiteName . " <" . $emailAddress . ">\r\n";
			
			$message = $msg;
			$message = wordwrap($message, 70);
	
			//if (mail($email,$subject,$message,$header)){
				return true;
			//}
			//return false;
		}
		
		
		public static function sanitize($str)
		{
			return strtolower(strip_tags(trim(($str))));
		}
		
		public static function isValidEmail($email)
		{
			return preg_match('/^[_A-Za-z0-9-]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$/',trim($email));
		}
		
		public static function minMaxRange($min, $max, $what)
		{
			if(strlen(trim($what)) < $min)
			   return true;
			else if(strlen(trim($what)) > $max)
			   return true;
			else
			   return false;
		}
		
		//@ Thanks to - http://phpsec.org
		public static function generateHash($plainText, $salt = null)
		{
			if ($salt === null)
			{
				$salt = substr(md5(uniqid(rand(), true)), 0, 25);
			}
			else
			{
				$salt = substr($salt, 0, 25);
			}
		
			return $salt . sha1($salt . $plainText);
		}
		
		public static function replaceDefaultHook($str)
		{
			global $default_hooks,$default_replace;
		
			return (str_replace($default_hooks,$default_replace,$str));
		}
		
		public static function getUniqueCode($length = "")
		{	
			$code = md5(uniqid(rand(), true));
			if ($length != "") return substr($code, 0, $length);
			else return $code;
		}
		
		public static function errorBlock($errors)
		{
			if(!count($errors) > 0)
			{
				return false;
			}
			else
			{
				echo "<ul>";
				foreach($errors as $error)
				{
					echo "<li>".$error."</li>";
				}
				echo "</ul>";
			}
		}
		
		public function lang($key,$markers = NULL)
		{
			global $lang;
			
			if($markers == NULL)
			{
				$str = $lang[$key];
			}
			else
			{
				//Replace any dyamic markers
				$str = $lang[$key];
	
				$iteration = 1;
				
				foreach($markers as $marker)
				{
					$str = str_replace("%m".$iteration."%",$marker,$str);
					
					$iteration++;
				}
			}
			
			//Ensure we have something to return
			if($str == "")
			{
				return ("No language key found");
			}
			else
			{
				return $str;
			}
		}
		
		public static function destorySession($name)
		{
			if(isset($_SESSION[$name]))
			{
				$_SESSION[$name] = NULL;
				unset($_SESSION[$name]);
			}
		}
		
		//Logout
		public static function userLogout($request){
			if ($request->method == "GET"){
				$dao = new AuthDAO();
				//Log the user out
				$dao->userLogOut($request->user);
				if(!empty($websiteUrl)) 
				{
					$add_http = "";
					if(strpos($websiteUrl,"http://") === false){
						$add_http = "http://";
					}
					header("Location: ".$add_http.$websiteUrl);
					die();
				}
				else
				{
					header("Location: index.php");
					die();
				}
			}
		}
	}
?> 