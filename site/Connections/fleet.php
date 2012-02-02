<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_fleet = "localhost";
$database_fleet = "busfleet";
$username_fleet = "root";
$password_fleet = "";
$fleet = mysql_pconnect($hostname_fleet, $username_fleet, $password_fleet) or trigger_error(mysql_error(),E_USER_ERROR); 
?>