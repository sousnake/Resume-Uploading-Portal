<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location: home.php');
}
if(isset($_POST['upload_file2']))
{
 if($_FILES["file"]["type"]=="image/jpeg")
   {
   if ($_FILES["file"]["error"] > 0)
    {
     echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
   else
    {
     $user=$_SESSION['username'];
	 if(!is_dir('upload/'.$user))
		{
			mkdir('upload/'.$user);
			
		}
     move_uploaded_file($_FILES["file"]["tmp_name"],
	 "upload/" . $_SESSION['username'].'/'.$_SESSION['username'].".jpg");	
	 echo "<script>location.href='welcome.php'</script>";
	}
   }
   else
   {
	echo"invalid file";
   }
}
?>