<?php 

require_once 'model/model.php';
require_once 'controller/updateProduct.php';
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

  <label for="name">Book Id</label><br>
  <input type="text" id="ID" name="ID" value="<?php echo $product['ID'] ?>"><br>

  <label for="name">Book Name</label><br>
  <input type="text" id="book_name" name="book_name" value="<?php echo $product['book_name'] ?>"><br>

  <label for="buyingPrice">Author Name</label><br>
  <input type="text" id="author_name" name="author_name" value="<?php echo $product['author_name'] ?>"><br>

  <label for="sellingPrice">Book Price</label><br>
  <input type="text" id="book_price" name="book_price" value="<?php echo $product['book_price'] ?>"><br>

  <hr>


  <input type="submit" name = "updateProduct" value="Save">

 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>