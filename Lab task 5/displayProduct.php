<?php  
if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $products = showAllproducts();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Product</title>
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
  <style>
    table,td,th{
      border:1px solid black;
    }
  </style>
 <fieldset class="wraper">
  <legend class="text">Display</legend>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Profit</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($products as $i => $product): 
          if ($product['Display'] == "YES" || isset($_POST['name'])):
        ?>
          <tr>

            <td><?php echo $product['Name'] ?></td>
            <td><?php echo $product['Selling Price'] - $product['Buying Price'] ?></td>
            <td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a></td>
            <td><a href="deleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
          </tr>
        <?php endif; endforeach; ?>
      </tbody>
    </table>
 </fieldset>
</body>
</html>