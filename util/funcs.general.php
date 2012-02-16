<?php
	function redirectToPage($url_name='default', $args=array()){
		global $router;
		header("Location: ".$router->getUrl($url_name, $args));
		die();
	}
	
	function userBelongsToGroups($user, $groupName){
		userPassesTest($user, $user->belongsToGroups($groupName));
	}
	
	function userIsAdmin($user){
		userPassesTest($user, $user->belongsToGroups(array('admin')));
	}
	
	function userPassesTest($user, $boolean_result, $login=false){
		if(!$boolean_result) {
			if ($login) {
				$user->userLogOut();
				redirectToPage('auth-login');
			}else{
				PageError::show('300', '', 'Access Denied', 'Access Denied while trying to access the page.');
				die();
			}
		}
	}
	
	function checkNotLoggedIn($user){
		if(!$user->isUserLoggedIn()) {
			redirectToPage('auth-login');
		}
	}
	
	function checkLoggedIn($user){
		if(!$user->isUserLoggedIn()) {
			redirectToPage('auth-login');
		}
	}
	
	//Function used for replacing hooks in our templates
	function newTemplateMsg($contents,$additionalHooks)
	{
		global $mail_templates_dir,$debug_mode;

		//Check to see we can access the file / it has some contents
		if(!$contents || empty($contents))
		{
			if($debug_mode)
			{
				if(!$contents)
				{
					echo lang("MAIL_TEMPLATE_DIRECTORY_ERROR",array(getenv("DOCUMENT_ROOT")));
					die(); 
				}
				else if(empty($contents))
				{
					echo lang("MAIL_TEMPLATE_FILE_EMPTY"); 
					die();
				}
			}
			return false;
		}
		else
		{
			//Replace default hooks
			$contents = replaceDefaultHook($contents);
		
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
				if($footer && !empty($footer)) $contents .= replaceDefaultHook($footer); 
				$contents = str_replace("#INC-FOOTER#","",$contents);
			}
			return true;
		}
	}
	
	function sendMail($email,$subject,$msg = NULL)
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
	
	function sanitize($str)
	{
		return strtolower(strip_tags(trim(($str))));
	}
	
	function isValidEmail($email)
	{
		return preg_match('/^[_A-Za-z0-9-]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$/',trim($email));
	}
	
	function minMaxRange($min, $max, $what)
	{
		if(strlen(trim($what)) < $min)
		   return true;
		else if(strlen(trim($what)) > $max)
		   return true;
		else
		   return false;
	}
	
	//@ Thanks to - http://phpsec.org
	function generateHash($plainText, $salt = null)
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
	
	function replaceDefaultHook($str)
	{
		global $default_hooks,$default_replace;
	
		return (str_replace($default_hooks,$default_replace,$str));
	}
	
	function getUniqueCode($length = "")
	{	
		$code = md5(uniqid(rand(), true));
		if ($length != "") return substr($code, 0, $length);
		else return $code;
	}
	
	function errorBlock($errors)
	{
		$code = "";
		if(!count($errors) > 0) {
			return false;
		} else {
			$code = "<ul>";
			foreach($errors as $error) {
				$code .= "<li>".$error."</li>";
			}
			$code .= "</ul>";
		}
		return $code;
	}
	
	function lang($key,$markers = NULL)
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
	
	function destorySession($name)
	{
		if(isset($_SESSION[$name]))
		{
			$_SESSION[$name] = NULL;
			unset($_SESSION[$name]);
		}
	}
?>
