<?php
session_start();
unset($_SESSION['uname']);
session_destroy();
setcookie("username", '', time() - 1*24*60*60);
setcookie("password", '', time() - 1*24*60*60);
header('Location:adminlog.php');
?>