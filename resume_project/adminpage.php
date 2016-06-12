<?php
session_start();
if(!isset($_SESSION['uname'])){
	header('Location:adminlog.php');
}
include("config.php");

?>
<html>
<head>
<style type="text/css">
.hovermenu ul{
font: bold 18px calibri;
height: 25px;
width: 1200px;
}

.hovermenu ul li{
list-style: none;
display: inline;

}

.hovermenu ul li a{
padding: 10px 25px 10px 25px;
text-decoration: none;
float: left;
color: white;
background-color: rgb(15,41,77);
border: 1px solid rgb(15,41,77);
}

.hovermenu ul li a:hover{
background-color: #e5e5e5;
color:rgb(15,41,77);
}
</style>
</head>

<body background ="a3.jpg">
	<div class="hovermenu">
<ul>
<li><a href="adminpage.php">HOME</a></li>

<li><a href="adminlogout.php">LOGOUT</a></li>
</ul>
</div>
<br><br>
</body>
</html>
<?php
$query = "SELECT * FROM user";
$result=mysql_query($query);
$re =array();
$pro =0;
while($row = mysql_fetch_assoc($result)){
	$pro++;
	$re []=$row['username'];
	
}
//".$re[$i]."
echo "<table border ='1'>";
echo "<tr><td width ='150'>Student Name</td><td>Link To CV</td></tr>";
for($i=0;$i<$pro;$i++){
	
	//echo $_SESSION['uname'];
	echo "<html></br></html>";
	echo "<tr><td width ='179'>".$re[$i]."</td><td width='250'><a href='viewcvadmin.php?case=".$re[$i]."'>View CV</a></td></tr>";
	echo "<html></br></html>";
	echo "<tr></tr><tr></tr>";
}
echo "</table>"
?>