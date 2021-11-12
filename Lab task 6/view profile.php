<?php 

require 'controller/check view profile.php';

?>

<!DOCTYPE html>
<html>
<head>
		<!-- <link rel="stylesheet" type="text/css" href="Change profile picture/css/style.css"> -->
</head>
<body>

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
  <img style="width: 180px;height: 180px;margin-top: 20px;" class="img_design" src="uploads/<?php 
  if (isset($_SESSION['pic'])){echo $_SESSION['pic'];} 
  else{echo "main.png";}
  ?>" alt="Profile Picture" >
  <a style="margin-left: 0px;" href="Change picture.php" >Change</a>
</div>


</fieldset> 
</div>

<?php require 'fotter/Footer.php';?>
</body>
</html>