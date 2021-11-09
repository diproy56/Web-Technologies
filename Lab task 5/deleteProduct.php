<?php 

require_once 'model/model.php';
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

  Name : <?php echo $product['Name'] ?><br>

  Buying Price : <?php echo $product['Buying Price'] ?><br>

  Selling Price : <?php echo $product['Selling Price'] ?><br>

  Displayable :<?php echo $product['Display'] ?><br>

  <hr>
  <a href="Controller/removeProduct.php?id=<?php echo $product['ID'] ?>">Delete</a>

 </fieldset>
</form>
</body>
</html>