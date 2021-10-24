<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

	</style>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['User_name']))
  {require 'head/Top1.php';
	require 'head/Top2.php';}
else
{
  header("location:login.php");
} 


$data = file_get_contents("registratio/Data.json");
$data = json_decode($data, true);
foreach($data as $row)  
{  
  $name = $row["name"];
  $email = $row["email"];
  $gender = $row["gender"];
  $dob = $row["dob"];
}
?> 

<div style="margin-left: 35%; margin-top: 10%;">
<fieldset class="grid-container," style="width: 450px">
<legend>PROFILE</legend>

<div style="float: left;">
	
	<p>Name:<?php echo $name  ?></p>
		<hr>
	<p>Email:<?php echo $email  ?></p>
		<hr>
	<p>Gender:<?php echo $gender  ?></p>
		<hr>
	<p>DOB:<?php echo $dob  ?></p>
	<hr>
	<a  href="Edit Profile.php">Edit Profile</a>
</div> 


<div style="float: right;width:40%">
  <img style="height: 170px; width: 160px;margin-top: 20px;" src="uploads/main.png" alt="Profile Picture"><br>
  <a style="margin-left: 0px;" href="Change picture.php" >Change</a>
</div>


</fieldset> 
</div>

<?php require 'fotter/Footer.php';?>
</body>
</html>