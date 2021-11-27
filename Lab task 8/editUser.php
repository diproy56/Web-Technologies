<?php 

require_once 'model/model.php';
require_once 'controller/updateProduct.php';
if(isset($_GET['id']))
{
  $product = showUser($_GET['id']);  
}
else
{
  header('Location: User information.php');
}
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>
<style type="text/css">
  
  .wraper{
    float: center;
    width: 15%;
    margin: auto;
    padding: auto;
     margin-top: 150px;
     transform: scale(1.3);
  }
  .text
  {
    text-align: center;
  }

</style>
</head>
<body>
<form method="POST">
 <fieldset class="wraper">
  <legend class="text">EDIT BOOK</legend>

  <label for="name">Nmae</label><br>
  <input type="text" id="name" name="name" value="<?php echo $product['name'] ?>"><br>

  <label for="name">User name</label><br>
  <input type="text" id="user_name" name="user_name" value="<?php echo $product['user_name'] ?>"><br>

  <label for="buyingPrice">Email</label><br>
  <input type="text" id="email" name="email" value="<?php echo $product['email'] ?>"><br>

  <label for="sellingPrice">Password</label><br>
  <input type="text" id="password" name="password" value="<?php echo $product['password'] ?>"><br>

   <label for="gender">Gender</label><br>
  <input type="text" id="gender" name="gender" value="<?php echo $product['gender'] ?>"><br>

   <label for="dob">DOB</label><br>
  <input type="text" id="dob" name="dob" value="<?php echo $product['dob'] ?>"><br>

  <hr>


  <input type="submit" name = "updateProduct" value="Save">

 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>