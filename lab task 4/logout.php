<?php 
	
	session_start();

if (isset($_SESSION['User_name'])) {
	session_destroy();
	header("location:login.php");
	
}else{
	header("location:login.php");

}

 ?>