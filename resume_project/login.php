<?php
session_start();
include("config.php");
$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']); 
//$query = mysql_query("SELECT * FROM user WHERE (username ='".mysql_real_escape_string($_POST['username'])."') and (Password ='".mysql_real_escape_string($_POST['password']).'")";
$sql="SELECT * FROM user WHERE username='$myusername' and Password='$mypassword'";
//echo $sql;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);
if($count==1){
	session_register("myusername");
	$_SESSION['username']=$myusername;
	header('Location: welcome.php');
}
else{
	header('Location: home.php');
}
?>