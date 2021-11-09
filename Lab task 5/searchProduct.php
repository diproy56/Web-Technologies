<!DOCTYPE html>
<html>
<head>
<title>Search Product</title>
<style type="text/css">
  
  .wraper{
    float: center;
    width: 20%;
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
  <fieldset class="wraper">
  <legend class="text">SEARCH</legend>
  <form method="post">
    <input type="text" name="name" placeholder="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required>
    <input type="submit" name="search" value="Search By Name">
  </form>
  </fieldset>
<?php
require 'Controller/search.php'
?>
</body>
</html>