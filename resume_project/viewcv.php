<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location:home.php');
}
include("config.php");
global $name,$roll,$cpi,$x2,$x,$p1,$p2,$re,$pronum,$skills;
$user = $_SESSION['username'];
$query = "SELECT * FROM cv WHERE username ='".$user."'";
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result)){
	$name = $row['Name'];
	$roll = $row['roll_no'];
	$cpi = $row['cpi'];	
	$x = $row['10_marks'];
	$x2 = $row['12_marks'];
	$skills = $row['Skills'];
}
$query = "SELECT * FROM project WHERE username='".$user."'";
$result=mysql_query($query);
$re = array();
$pronum=0;
while($row = mysql_fetch_assoc($result)){
        $re[] = $row;
		$pronum = $pronum+1;
    }
	//echo$pronum;
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
<li><a href="welcome.php">HOME</a></li>
<li><a href="viewcv.php">VIEW RESUME</a></li>
<li><a href="cvuploadform.php">UPDATE CV</a></li>
<li><?php	echo "<a href='upload/".$_SESSION['username']."/".$_SESSION['username'].".xlsx'>DOWNLOAD RESUME</a>"; ?></li>
<li><a href="logout.php">LOGOUT</a></li>

</ul>
</div>
</br></br></br>
<h1 align = "center">
Curriculum Vitae
</h1>
<hr></hr>
<div id = "page">
<table border='0' cellspacing ='20' align="center" >
	<tr>
		<td><strong>Name: </strong></td>
		<td><?php echo $name ?></td>
	</tr>
	<tr>
	<td><strong>Roll Number</strong></td>
	<td><?php echo $roll ?></td>
	</tr>
	<tr>
	<td><strong>CPI</strong></td>
	<td><?php echo $cpi ?></td>
	</tr>
	<tr>
	<td><strong>XII Marks</strong></td>
	<td><?php echo $x2 ?></td>
	</tr>
	<tr>
	<td><strong>X Marks</strong></td>
	<td><?php echo $x ?></td>
	</tr>
	<tr>
	<td><strong>Skills</strong></td>
	<td><?php echo $skills ?></td>
	</tr>
	
	
<?php
for($i=0;$i<$pronum;$i++){
	$y = $i+1;
	echo "<tr><td><strong>Project".$y."</td></strong><td><strong>TITLE</strong></td><td>".$re[$i]['p_title']."</td></tr>";
	echo "<tr><td></td><td><strong>DESCRIPTION</strong></td><td>".$re[$i]['p_des']."</td></tr>";
}
?>

</table>

<!--<div id="footer">
	<div id="foot_text" >&copy; 2011 Student Placement Cell, IIT Rajasthan</div>
</div>-->	
</body>
<html>
