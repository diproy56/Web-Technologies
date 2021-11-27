<?php  
require_once '../model/model.php';


if (isset($_POST['saveBook'])) 
{
	$data['book_name'] = $_POST['book_name'];
	$data['author_name'] = $_POST['author_name'];
	$data['book_price'] = $_POST['book_price'];
	
  if (addBook($data)) 
  {
  	  header('Location: ../Book information.php');
  
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}
?>