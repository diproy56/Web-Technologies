<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		td{
            border: 1px solid black;
			
		}
	</style>
</head>
<body>
	<?php 

session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
	require 'head/Top2.php';
require_once ('model/model.php');
  $products = showAllBooks();}
else
{
  header("location:login.php");
} 
  

?>

<form method="post">
<legend class="text">Display</legend>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Profit</th>
         
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($products as $i => $product): 
        ?>
          <tr>

            <td><?php echo $product['Name'] ?></td>
            <td><?php echo $product['Selling Price'] ?></td>
           
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</form>

</body>
</html>