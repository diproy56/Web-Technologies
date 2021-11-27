<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<style type="text/css">
  *
  {
    margin: 0;
    padding: 0;
  }
  .wraper{
    
    width: 20%;
    height: 300px;
    margin: auto;
    padding: auto;
    margin-top: 150px;
    transform: scale(1.2);
  }
  .text
  {
    text-align: center;
  }
  .content
  {

    margin: auto;
    padding: auto;
    width: 100%;
    text-align: center;

  }

</style>
</head>
<body>
  <?php  
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 

?>
<form action="controller/saveProduct.php" method="POST" enctype="multipart/form-data" >
  
 <fieldset style="" class="wraper">
  <div class="content">
  <legend class="text">ADD User</legend>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="user_name">User Name</label><br>
  <input type="text" id="user_name" name="user_name"><br>

  <label for="email">Email</label><br>
  <input type="text" id="email" name="email"><br>

  <label for="password">Password</label><br>
  <input type="text" id="password" name="password"><br>

  <label for="gender">gender</label><br>
  <input type="radio" id="gender" name="gender" value="female">Female
  <input type="radio" id="gender" name="gender" value="male">Male
  <input type="radio" id="gender" name="gender" value="other">Other<br>

  <label for="dob">DOB</label><br>
  <input type="date" id="dob" name="dob"><br><br>
  <input type="submit" name = "saveUser" value="Save" style="margin: auto; width: 100px; margin-left: 30px;">

    </div>
    <br>

  
 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>