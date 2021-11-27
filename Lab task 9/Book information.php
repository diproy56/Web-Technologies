<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    td{
            border: 1px solid black;
            
        }
        .wraper
        {
            width: 50%;
    margin: auto;
    padding: auto;
    margin-top: 150px;
    transform: scale(1.2);
        }

  </style>
</head>
<body>
<?php  
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 

if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $useres = showAllBooks();
}
?>

<form class="wraper" >
<table style="border: 1px solid black ;margin: auto;">
      
  <tr style="background-color:gray; color: white; ">
    <th>ID</th>
    <th>Book Name</th>
    <th>Author Nmae</th>
    <th>Book Price</th>
    <th colspan="2">Action</th>

   
  </tr>
 <?php 
        foreach ($useres as $i => $usere): 

        
        ?>
<tr>
    <td><?php echo $usere['ID'] ?></td>
    <td><?php echo $usere['book_name'] ?></td>
    <td><?php echo $usere['author_name'] ?></td>
    <td><?php echo $usere['book_price'] ?></td>
    <td><a href="editProduct.php? id=<?php echo $usere['ID'] ?>">Edit</a></td>
    <td><a href="deleteProduct.php? id=<?php echo $usere['ID'] ?>">Delete</a></td>

    
  </tr>
 <?php  endforeach; ?>
    
</table>
<div style="text-decoration: none; margin: auto;width: 12%;height: 24px;
background: #1376D5;;border-radius: 5px; margin-top:10px ">
  <a style=" text-decoration: none;color: white; margin-top: 5px;" href="addbook.php">Add Book</a>
</div>
<div style="text-decoration: none; margin: auto;width: 12%;height: 24px;
background: #1376D5;;border-radius: 5px; margin-top:10px ">
    <a style=" text-decoration: none;color: black; margin-top: 25px;" href="searchindividual.php">Search Book</a>
</div>

</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>