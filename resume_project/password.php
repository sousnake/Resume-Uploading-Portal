<?php
$user = $_POST['p1'];
$que = $_POST['p2'];
$ans = $_POST['secans'];
include("config.php");

$query = "SELECT * FROM user WHERE security_ques ='".$que."'" ;

$result = mysql_query($query);


while($row = mysql_fetch_assoc($result)){
	
	if($ans==$row['security_ans']){
		echo "YOUR PASSWORD IS ".$row['Password'];
		break;
	}
}
?>
<html>
</br></br>
<a href = "home.php">Go TO Home Page</a>
</html>