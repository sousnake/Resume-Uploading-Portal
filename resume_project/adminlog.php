<?php
session_start();
if(isset($_SESSION['uname'])){
	header('Location:adminpage.php');
}
?>
<html>
<body>
<form method="POST" action="admin.php" >
<fieldset>
<legend>ENTER CREDENTIAL</legend>
<table border="0">
<tr><td><p><label for="username">Username:</label></p></td><td><p><input type="text" id="username" name="username" size="20"></p></td></tr>
<tr><td><p><label for="password">Password:</label></p></td><td><p><input type="password" id="password" name="password" size="20"></p></td></tr>
<tr><td><p><input type="submit" value="Admin Login"></p></td><td><p><input type="reset" value="Reset" /></p></td></tr>
<tr><p><label for="remember"><input type="checkbox" name="remember" id="remember" value="1" /> Remember me</label></p></tr>
</br>
</table>
</form>
</body>
</html>