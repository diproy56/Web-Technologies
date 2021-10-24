<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login/css/style.css">
</head>
<body>

	<?php 

		$Usernameerr = $passworderr = "" ;
    	$password = $Username =  "";

    	if ($_SERVER["REQUEST_METHOD"] == "POST")
	    {
	    	if(empty($_POST["User_name"]))
    		{
    		$Usernameerr = "*Insert Username";
    		} 
    		else
    			{
    		$Username = ($_POST["User_name"]);
    		if (preg_match('/^[a-zA-Z0-9]$/', $Username)) 
    		{
    			$Usernameerr = "*Invalid Input";
    		}
    		elseif (str_word_count($Username)<2) 
    		{
    			$Usernameerr = "*Minimum Two Characters";
    		}
		    	
			}

			if(empty($_POST["password"]))
    		{
    		$passworderr = "*Insert password";
    		} 
    		else
    		{
    			$password = ($_POST["password"]);
    			if(strlen($password)<8) 
    			{
           		 $passworderr = "Your Password Must Contain At Least 8 Characters!";
       			}
       			elseif (!preg_match("/[@,#,$,%]/",$password)) 
       			{
       				$passworderr = "*Minimum One Special Character";
       				
       			}
    		}

        session_start();

      //$Username = "admin roy";
     // $password = "admin12@";

      if (isset($_POST['User_name'])) 
      {
        if ($_POST['User_name']==$Username && $_POST['password']==$password) 
        {
          $_SESSION['User_name'] = $Username;
          if(isset($_POST['remember']))
    {
    $time = time();
    setcookie('User_name', $Username, $time+50);
    setcookie('password', $_POST['password'], $time+50);
    
    }
          header("location:Public.php");
        }
        else
        {
          echo "Username or password is invalid";
        }
      }
        



		}


	 ?>
 
		
<?php require 'head/top.php';?>

	
    <form class="wraper" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);"public.php" ?>" method="post">
      <!-- <form action="public.php" method="post"> -->

		<div class="header">
      <label>LOGIN</label>
      <hr class="hr_tag">
    </div>
		<div>
			<div class="Content">
			<input type="text" placeholder="Enter User Name" name="User_name" class="input_holder" value="<?php if(isset($_COOKIE['User_name'])) {echo $_COOKIE['User_name'];} ?>" >
				<span class="error"><?php echo $Usernameerr;?></span>
			</div>

			<div class="Content">
			<input type="password" placeholder="Enter Password" name="password" class="input_holder" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>">
				<span class="error"><?php echo $passworderr;?></span>
			</div>

      <div class="checker_content">
        <input type="checkbox" name="remember" <?php if(isset($_COOKIE['User_name'])) {echo "checked";} ?>><span>Rember Me</span>
      </div>
			<div class="submit_content">
			<input type="submit" name="submit" value="Login" class="submit_button">
		</div>
    <div class="link_text">
     <span>Dont have account?</span><a href="registration.php" class="forget_password">Sign Up</a>
    </div>
    <div class="link_text">
     <a href="forget password.php" class="forget_password">Forget password?</a>
		</div>
</form>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>