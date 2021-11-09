<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
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
<form action="controller/saveProduct.php" method="POST" enctype="multipart/form-data">
 <fieldset style="" class="wraper">
  <legend class="text">ADD BOOK</legend>

  <label for="name">Book Name</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buyingPrice">Buying Price</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice"><br>

  <label for="sellingPrice">Selling Price</label><br>
  <input type="text" id="sellingPrice" name="sellingPrice"><br>

  <hr>

  <input type="checkbox" id="display" name="display">
  <label for="display">Display</label><br>

  <hr>

  <input type="submit" name = "saveProduct" value="Save">

 </fieldset>
</form>
</body>
</html>