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
					$activation_message = lang("ACTIVATION_MESSAGE",array($websiteUrl,$activation_token));
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
		
		//Logout
		public static function userLogout($request){
			if ($request->method == "GET"){
				$dao = new AuthDAO();
				//Log the user out
				$request->user->userLogOut();
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