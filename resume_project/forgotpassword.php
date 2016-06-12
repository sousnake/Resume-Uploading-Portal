<?php
session_start();
include("config.php");
global $secque,$user;
$user = addslashes($_POST['uname']);
$query = "SELECT * FROM user WHERE username ='".$user."'";
$result =mysql_query($query);

while($row = mysql_fetch_assoc($result)){
	$secque = $row['security_ques'];
}
?>
<html>
<body>
<form action ="password.php" method="POST">
USERNAME IS <input id ="p1" name ="p1" value=" <?php echo $user ; ?> "/> </br> 
SECURITY QUESTION IS <input id="p2" name ="p2" value= "<?php echo $secque ;?> "/> </br>
Plaese Give Your Answer<input type="text" name="secans" id="secans" />
<input type="submit" value="Go">
</form>
</body>
</html>