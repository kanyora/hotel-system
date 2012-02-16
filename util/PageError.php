<?php
	class PageError{
		public static function show($type, $url, $message='', $long_message=''){
			if ($type == '404'){
				if (!$message){
					$message = "Page not Found";
					$long_message = "The requested URL $url was not found on this server.";
				}
			}else if ($type == '500'){
				if (!$message){
					$message = "Server Error.";
					$long_message = "An error occured while trying to load page [$url].";
				}
			}else{
				if (!$message){
					$message = "Server Error";
					$long_message = "An error occured while trying to load page.";
				}
			}
			?>
			<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
				<html>
					<head>
						<title><?php echo $type." ".$message ?></title>
					</head>
					<body>
						<h1><?php echo $message ?></h1>
						<p><?php echo $long_message ?></p>
					</body>
				</html>
			<?php
			global $DEBUG;
			if ($DEBUG){
				die();
			}
		}
	}
?>