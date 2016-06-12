<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location: home.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ENhttp://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<body background = "a3.jpg">
	<div class="hovermenu">
<ul>
<li><a href="welcome.php">HOME</a></li>
<li><a href="viewcv.php">VIEW RESUME</a></li>
<li><a href="cvuploadform.php">UPDATE CV</a></li>
<li><?php	echo "<a href='upload/".$_SESSION['username']."/".$_SESSION['username'].".xlsx'>DOWNLOAD RESUME</a>"; ?></li>
<li><a href="logout.php">LOGOUT</a></li>

</ul>
</div>
	
	</br>
	<p align="center">
	<img src="<?php echo"upload/".$_SESSION['username'].'/'.$_SESSION['username'].".jpg" ?>" alt="" width="100"/> 
	</p>
	<form name="uploadfile" action="upload_file3.php" method="POST" enctype="multipart/form-data">
	<table align ="center">
	<tr>
	<td width ="140">Resume Upload</td>
	<td><input name="file" type="file" id="file"> </td>
	</tr>
	<tr>
	<td colspan="2">
	<input type="submit" name="upload_file" value="Upload"/>
	</td>
	</table>
	</form>
	</br>
	<form name="uploadfile1" action="upload_file2.php" method="POST" enctype="multipart/form-data">
	<table align="center">
	<tr>
	<td width ="140">Image Upload</td>
	<td><input name="file" type="file" id="file"> </td>
	</tr>
	<tr>
	<td colspan="2">
	<input type="submit" name="upload_file2" value="Upload Image"/>
	</td>
	</table>
	</form>
	</p>
	</br></br></br></br></br>
	<hr>
	<p align="center">
	<strong>SAMPLE EXCEL FILE FORMAT</strong></br></br>
	<img src="demo.png">
	</p>
</body>	
</html>
