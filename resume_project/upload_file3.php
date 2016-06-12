<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location: home.php');
}
include("config.php");
require_once "Classes/PHPExcel/IOFactory.php";
if(isset($_POST['upload_file']))
 if (($_FILES["file"]["type"]=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")&&($_FILES["file"]["size"] < 20000))
   {
   if ($_FILES["file"]["error"] > 0)
     {
     echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
     }
   else
     {
     echo "Upload: " . $_FILES["file"]["name"] . "<br />";
     echo "Type: " . $_FILES["file"]["type"] . "<br />";
     echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
     echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
	 if(!(is_dir('C:\wamp\www\resume_project\upload/'.$_SESSION['username']))){
	 mkdir('C:\wamp\www\resume_project\upload/'.$_SESSION['username']);
	 }
    
     
       move_uploaded_file($_FILES["file"]["tmp_name"],
       "upload/" . $_SESSION['username'].'/'.$_SESSION['username'].".xlsx");
       echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	   $user = $_SESSION['username'];
	   $objReader = PHPExcel_IOFactory::createReaderForFile("upload/" . $_SESSION['username'].'/'.$_SESSION['username'].".xlsx");
	   $objReader->setReadDataOnly(true);
	   $objTpl = $objReader->load("upload/" . $_SESSION['username'].'/'.$_SESSION['username'].".xlsx");
	    $hRow=$objTpl->getActiveSheet()->getHighestRow();
	   $roll=null;$cpi=0;$xii=0;$x=0;$p1=null;$p2=null;$fname=null;$lname=null;$skills=null;
	   for($i=0;$i<=$hRow;$i++){
			$var=$objTpl->getActiveSheet()->getCell('A'.$i)->getValue();
			if($var=='First Name')	$fname=$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
			if($var=='Last Name')	$lname=$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();	
			if($var=='Roll No.')	$roll =$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
			if($var=='CPI')			$cpi=$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
			if($var=='XII Marks')	$xii=$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
			if($var=='X Marks')		$x=$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
			if($var=='Skills')		$skills=$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
			//if($var=='Project 1')	$p1=$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
			//if($var=='Project 2')	$p2=$objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
	   }
	   $xii=$xii*100;$x=$x*100;
	   $name=$fname." ".$lname;
	   $query = "DELETE FROM cv WHERE username='".$user."'";
	   
	   $result = mysql_query($query);
	   $query="INSERT INTO cv (username,Name,roll_no,cpi,10_marks,12_marks,Skills) VALUES ('".$user."','".$name."','".$roll."','".$cpi."','".$xii."','".$x."','".$skills."')";	
	   mysql_query($query);
	   $query = "DELETE FROM project WHERE username ='".$user."'";
	   mysql_query($query);
	   for($i=0;$i<=$hRow;$i++){
			$var=$objTpl->getActiveSheet()->getCell('A'.$i)->getValue();
			
			if($var=='Project' or $var=='Project '){
				//echo $var;
				$title = $objTpl->getActiveSheet()->getCell('B'.$i)->getValue();
				$des = $objTpl->getActiveSheet()->getCell('C'.$i)->getValue();
				$query = "INSERT INTO project(username,p_title,p_des) VALUES ('".$user."','".$title."','".$des."')";
				mysql_query($query);
					
			}
			
	   }
	   echo "<script>location.href='welcome.php'</script>";
     }
   }
 else
   {
   echo "Invalid file";
   }
 ?> 