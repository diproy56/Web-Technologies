<?php 

require_once 'model/model.php';
if(isset($_GET['user_name']))
{
  $usere = showuser($_GET['user_name']);  
}
// else
// {
//     header('Location: User information.php');
// }
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
<title>Delete BOOK</title>
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
 <fieldset  class="wraper">
  <legend class="center">DELETE USER</legend>

  Name : <?php echo $usere['name'] ?><br>

  Selling Price : <?php echo $usere['email'] ?><br>

  Buying Price : <?php echo $usere['user_name'] ?><br>

  Selling Price : <?php echo $usere['password'] ?><br>

  Displayable :<?php echo $usere['gender'] ?><br>

  Displayable :<?php echo $usere['dob'] ?><br>

  <hr>
  <a href="Controller/removeProduct.php?id=<?php echo $usere['user_name'] ?>">Delete</a>

 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>