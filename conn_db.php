<?php

$dbhost = 'host';
$dbuser = 'username';
$dbpass = 'yourpass';
$dbname = 'database_name';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or trigger_error('Error connecting to mysql: ' . mysql_error(), E_USER_ERROR);
mysql_select_db($dbname) or trigger_error(mysql_error(), E_USER_ERROR);

?>