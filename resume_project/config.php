<?php
$dbHost = 'localhost';
$dbName = 'resume_pro';
$dbUser = 'root';
$dbPass = '';
$dbConn = mysql_connect($dbHost,$dbUser,$dbPass) or die ('MySql connect failsd.'.mysql_error());
mysql_select_db($dbName,$dbConn) or die('MySql cannot select database.'.mysql_error());
?>