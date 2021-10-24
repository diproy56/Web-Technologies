
 <!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>


<?php 

session_start();

if (isset($_SESSION['User_name']))
{
	require 'head/Top1.php';
	require 'head/Top2.php';

}
else
{
	require 'head/Top.php';
}
?>

<h1 style="text-align: center;
  margin: 15% 0;">Welcome To Our Company</h1>  	
<?php require 'fotter/Footer.php';?>

</body>
</html>
