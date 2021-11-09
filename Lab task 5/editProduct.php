<?php 

require_once 'model/model.php';
require_once 'controller/updateProduct.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
  header('Location: displayProduct.php');
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

  <label for="name">Book Name</label><br>
  <input type="text" id="name" name="name" value="<?php echo $product['Name'] ?>"><br>

  <label for="buyingPrice">Buying Price</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice" value="<?php echo $product['Buying Price'] ?>"><br>

  <label for="sellingPrice">Selling Price</label><br>
  <input type="text" id="sellingPrice" name="sellingPrice" value="<?php echo $product['Selling Price'] ?>"><br>

  <hr>
  
  <input type="checkbox" id="display" name="display"<?php if($product['Display']== "YES"){echo "checked";} ?>>
  <label for="display">Display</label><br>

  <hr>

  <input type="submit" name = "updateProduct" value="Save">

 </fieldset>
</form>
</body>
</html>