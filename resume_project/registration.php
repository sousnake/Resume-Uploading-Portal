<?php
	
	include("config.php");
	session_start();
	if($_POST["Submit"]=="Register")
	{
		$name= $_POST["text_name"];
		$email=$_POST["text_email"];
		$user=$_POST["text_user"];
		$password=$_POST["text_pass"];
		$security_ques=$_POST["text_sques"];
		$security_ans=$_POST["text_sans"];
		$_SESSION["username"]=$_POST["text_name"];
		$query="INSERT INTO user(Name,username,Password,email_id,security_ques,security_ans) VALUES ('".$name."','".$user."','".$password."','".$email."','".$security_ques."','".$security_ans."')";
		mysql_query($query);
		
		$_SESSION['username']=$user;
		echo "<script>location.href='welcome.php'</script>";	
		
	}
?>