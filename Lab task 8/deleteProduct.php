<?php 

require_once 'model/model.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
    header('Location: Book information.php');
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
  <legend class="center">DELETE BOOK</legend>

  Name : <?php echo $product['ID'] ?><br>

  Buying Price : <?php echo $product['book_name'] ?><br>

  Selling Price : <?php echo $product['author_name'] ?><br>

  Displayable :<?php echo $product['book_price'] ?><br>

  <hr>
  <a href="Controller/removeProduct.php?id=<?php echo $product['ID'] ?>">Delete</a>

 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>