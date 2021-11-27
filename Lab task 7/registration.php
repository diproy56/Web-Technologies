<?php 

	session_start();

		if (isset($_SESSION['User_name']))
		  {
		    header("location:Login.php");
		  }
		else
		{
		  require 'head/Top.php';
		}
require 'controller/store_data.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>From</title>
	<link rel="stylesheet" type="text/css" href="css/registration_style.css">
	<script src="JS/registration.js"></script>
</head>
<body>

	
	<div class="reg_box">
			<div class="header">
		<p class="header_text">Registration</>
	</div>
		<form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="wraper">
				<div class="first_inputs">
		<div class="content1" >
			<input type="text" id="name" name="name" class="input" placeholder="Enter Your Name" value="<?php echo $name;?>" onkeyup="checkName()" onblur="checkName()" onclick="checkName()"><span id="nameerr" class="error"> <?php echo $nameerr;?></span><br>
			
		</div>

		
		<div class="content1">
			<input type="text" id="email" name="email" placeholder="Enter Your Email" class="input" value="<?php echo $email;?>" onkeyup="checkEmail()" onblur="checkEmail()" onclick="checkEmail()">
		<span class="error" id="emailerr">
	 		<?php echo $emailerr;?>
	 	</span><br>
		</div>

		<div class="content1">
			<input type="text" placeholder="Enter User Name" id="user_name" name="user_name" class="input" onkeyup="checkUserName()" onblur="checkUserName()" onclick="checkUsername()">
				<span class="error" id="Usernameerr"><?php echo $Usernameerr;?></span>
			</div>
			<hr class="hr_tag">
			</div>

			<div class="second_inputs">
			<div class="content">
			<input type="password" placeholder="Enter Password" id="password" name="password" class="input" onkeyup="checkPassword()" onblur="checkPassword()" onclick="checkPassword()">
				<span class="error" id="passworderr"><?php echo $passworderr;?></span>
			</div>
			
			<div class="content">
				<input type="password" class="input" placeholder="Confirm Password" id="rpassword" name="rpassword" onkeyup="checkRetypeNewPassword()" onblur="checkRetypeNewPassword()" onclick="checkRetypeNewPassword()">
				<span class="error" id="rpassworderr"><?php echo $rpassworderr;?></span>
			</div>
			<hr class="hr_tag">
		</div>
		<div class="content_gender">
			<label class="label">Gender</label><br>
			<div class="gender_input">
			 <input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<span class="error">
	 		<?php echo $gendererr;?>
	 	</span>
	 	</div><br>
		</div>

		<div class="content">
			<label class="label">Date Of Birth</label><br>
			 <input type="date" id="dob" name="dob" class="input_dob" value="<?php echo $dob;?>" onkeyup="checkdob()" onblur="checkdob()" onclick="checkdob()">
      <span class="error" id="doberr" ><?php echo $doberr;?></span><br>
		</div>


		<div class="submit_content">
		
			<input type="submit" name="saveUser" value="Submit" class="submit_button" n>
			
		</div>

		</div>
	</form>
	

	</div>

<?php require 'fotter/Footer.php';?>


</body>
</html>