<?php
session_start();
$uname = addslashes($_POST['username']);
$pass = addslashes($_POST['password']);

//echo $uname,$pass;
include("config.php");
$query="SELECT password FROM admin WHERE username ='".$uname."' AND password ='".$pass."'";
$result = mysql_query($query);
$count = mysql_num_rows($result);

if($count==1){
	$_SESSION['uname'] = $uname;
	 	
	if(isset($_POST['remember'])){
		setcookie('username', $uname, time() + 1*24*60*60);
        setcookie('password', $pass, time() + 1*24*60*60);
	}else
	{
		setcookie('username', $username, time() - 1*24*60*60);
        setcookie('password', $password, time() - 1*24*60*60);
	}
	header('Location:adminpage.php');
}else{
	//echo "in else";
	header('Location:adminlog.php');
}
?>