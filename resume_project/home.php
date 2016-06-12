<?php
session_start();
if(isset($_SESSION['username'])){
	header('Location:welcome.php');
}

?>
<html>
<head>
<title>Login Page</title>
<h1 align ="center"> Student Profile Site</h1>
</head>
<body background ="12.jpg">
<script type="text/javascript">
function valid(){
	if(document.getElementById("username").value==""){
		alert("Please enter UserName");
		document.getElementById("username").focus();
		return false;	
	}
	if(document.getElementById("password").value==""){
		alert("Please enter UserName");
		document.getElementById("password").focus();
		return false;	
	}
	return true;
}
</script>


<table align = "right" border = "0">
<form name="sign1" action="registration.html">
<tr><td><strong>NEW USER</strong></td><td><input type="submit" name="SIGN UP" value="CREATE ACCOUNT"/></td></tr>
</form>
</table>	
</br></br></br></br>
<table border="0" align = "right">
<form method="POST" action="login.php" onSubmit="return valid()">
<tr><td colspan="2"><b>USER LOGIN</b></td></tr>
<tr><td>Username</td><td>:</td><td><input type="text" id="username" name="username" size="20"></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" id="password" name="password" size="20"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Login"></td></tr>
</form>
<tr><td colspan="2"><a href="forgotpassword.html">Forgot Password?</a></td>
</table>


</bodys>
</html>