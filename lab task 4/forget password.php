<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login/css/style.css">
</head>
<body>

	<?php 

			session_start();

		if (isset($_SESSION['User_name']))
		{
			 header("location:public.php");
			

		}
		else
		{
			require 'head/Top.php';
		}

		$email="diproy5632@gmail.com";
		$emailerr=$massage="";

		if (isset($_POST['email'])) {
		  if ($_POST['email']==$email) 
		  {
		    $massage ="<h4>We are sending you an Email</h4>";
		  }
			}

		if (empty($_POST["email"])) 
	  {
	    $emailerr = "Email is required";
	    $flag=0;
	  } 
	  else 
	  {
	    $email = ($_POST["email"]);
	   
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	     {
	      $emailerr = "Invalid email format";
	         $flag=0;
	     }
	  }

	 ?>


<div class="password_wraper">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

				<div class="header">
      <label>Forget password</label>
      <hr class="hr_tag">
    </div>
		<div>
			<div class="Content">
			<input type="text" placeholder="Enter Email" name="email" class="input_holder" >
				<span class="error">
	 		<?php echo $emailerr;?>
	 	</span><br>
			</div>
			<div class="submit_content">
			<input type="submit" name="submit" value="Verify" class="submit_button">
			
		</div>
		<?php echo $massage;?>
	</form>
	<?php require 'fotter/Footer.php';?>
</div>

</body>
</html>