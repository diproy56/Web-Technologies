
<?php 

        session_start();

        if (isset($_SESSION['user_name']))
          {require 'head/top1.php';
            require 'head/top2.php';}
        else
        {
          header("location:login.php");
        } 

	$current_password = $new_password = $retype_new_password = $password= "";
$current_passwordErr = $new_passwordErr = $retype_new_passwordErr = "";
$message = ''; 

if (isset($_POST['current_password'])) 
{
  require 'Controller/checkCurrentPassword.php';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["current_password"])) 
  {
    $current_passwordErr = "Enter Current Password";
  } 
  else 
  {
    $current_password = ($_POST["current_password"]);
    if (strlen($current_password) < 8)
    {
      $current_passwordErr = "Must be atlest 8 characters";
      $current_password="";
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$current_password)) 
    {
      $current_passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $current_password="";
    }
    if(!password_verify($current_password, $password))
    {
      $current_passwordErr = "Password dosen't match";
      $current_password="";
    }
  }

  if (empty($_POST["new_password"])) 
  {
    $new_passwordErr = "Enter New Password";
  } 
  else 
  {
    $new_password = ($_POST["new_password"]);
    if (strlen($new_password) < 8 )
    {
      $new_passwordErr = "Must be atlest 8 characters";
      $new_password="";
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$new_password)) 
    {
      $new_passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $new_password ="";
    }
    else if($new_password==$current_password)
    {
      $new_passwordErr = "Can't set the same Password";
      $new_password="";
    }
  }

  if (empty($_POST["retype_new_password"])) 
  {
    $retype_new_passwordErr = "Retype New Password";
  } 
  else 
  {
    $retype_new_password = ($_POST["retype_new_password"]);
    if($retype_new_password!=$new_password)
    {
      $retype_new_passwordErr = "Password dosen't match";
      $retype_new_password="";
    }
    else if($retype_new_password==$new_password && password_verify($current_password, $password))
    {
  
          if (updatePassword($_SESSION['user_name'], $data)) 
          {
            echo 'Successfully updated!!';
            header('Location: public.php');
            
            
          }
        } 
    }
  }



 ?>


	