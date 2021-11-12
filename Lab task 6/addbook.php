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

  <label for="book_name">Book Name</label><br>
  <input type="text" id="book_name" name="book_name"><br>

  <label for="author_name">Author Name</label><br>
  <input type="text" id="author_name" name="author_name"><br>

  <label for="book_price">Price</label><br>
  <input type="text" id="book_price" name="book_price"><br>

  <hr>


  <hr>

  <input type="submit" name = "saveBook" value="Save">

 </fieldset>
</form>
</body>
</html>