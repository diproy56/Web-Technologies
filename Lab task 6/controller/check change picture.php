
<?php

session_start();

if (isset($_SESSION['User_name']))
  {require 'head/top1.php';
	require 'head/top2.php';}
else
{
  header("location:public.php");
} 

  ?>
