<?php
	session_start();
	include("config.php");
	require_once 'Classes/PHPExcel.php';
	require_once 'Classes/PHPExcel/IOFactory.php';
	if($_POST["Submit"]=="Register")
	{
		




		$excel2 = PHPExcel_IOFactory::createReader('Excel2007');
		$excel2 = $excel2->load("upload/" . $_SESSION['username'].'/'.$_SESSION['username'].".xlsx");
		//$excel2->setLoadAllSheets();
		$excel2->setActiveSheetIndex(0);
		
		
		

		$name= $_POST["roll"];
		$name1=$_POST["name1"];
		$email=$_POST["cpi_"];
		$user1=$_POST["x_marks"];
		$password=$_POST["xii_marks"];	
		$skills = $_POST['skills'];
		//$security_ques=$_POST["area1"];
		//$security_ans=$_POST["area2"];
		$user=$_SESSION['username'];
		$no_pro = $_POST['no_pro'];
		
		//$query="SELECT * FROM cv WHERE username='".$user"'";
		//$_SESSION["username"]=$_POST["text_name"];
		$query = "DELETE FROM cv WHERE username='".$user."'";
		$result=mysql_query($query);
		$query="INSERT INTO cv(username,Name,roll_no,cpi,10_marks,12_marks,Skills) VALUES ('".$user."','".$name1."','".$name."','".$email."','".$user1."','".$password."','".$skills."')";
		mysql_query($query);
		//$objPHPExcel->setActiveSheetIndex(1)->setCellValue('A2','Sou');
		$query = "DELETE  FROM project WHERE username='".$user."'";
		mysql_query($query);
		$query="UPDATE user SET Name ='".$name1."'WHERE username ='".$user."'";
		
		mysql_query($query);
		$excel2->getActiveSheet()->setCellValue('B1', $name1)
								 ->setCellValue('B3',$name)
								 ->setCellValue('B4',$email)
								 ->setCellValue('B5',$user1)
								 ->setCellValue('B6',$password);	
		
						 
		for($i=0;$i<$no_pro;$i++){
			$y=$i+1;
			$z=$i+7;
			$r = $y."title";
			$title = $_POST[$r];
			$e = $y.'des';
			$des = $_POST[$e];
			$query = "INSERT INTO project(username,p_title,p_des) VALUES ('".$user."','".$title."','".$des."')";
			mysql_query($query);
			$excel2->getActiveSheet()->setCellValue('B'.$z,$title)
									 ->setCellValue('C'.$z,$des);	
		}
		$objWriter = PHPExcel_IOFactory::createWriter($excel2, 'Excel2007');
		$objWriter->save("upload/" . $_SESSION['username'].'/'.$_SESSION['username'].".xlsx");
		echo "<script>location.href='welcome.php'</script>";
	}
?>