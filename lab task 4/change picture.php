
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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>image to upload</title>
	<link rel="stylesheet" type="text/css" href="Change profile picture/css/style.css">
</head>
<body>
	<form action="Change profile picture/upload.php" method="post" enctype="multipart/form-data">
		<div class="wraper">
			
				<div class="header">
			      <label>CHANGE PICTURE </label>
			      <hr class="header_hr_tag">
			    </div>
			<div class="Content">
				<img class="img_design" src="Change profile picture/photos/pp.png" >
			</div>
		<div class="Content_file">
			<input type="file" name="fileToUpload" id="fileToUpload">
			<hr class="hr_tag">
		</div>

		<div class="Content_file">
			<input type="submit" value="Upload Image" name="submit">
		</div>
		
		</div>
	</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>