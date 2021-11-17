<?php
if (isset($_POST['updateProduct'])) 
{
	$data['ID'] = $_POST['ID'];
	$data['book_name'] = $_POST['book_name'];
	$data['author_name'] = $_POST['author_name'];
	$data['book_price'] = $_POST['book_price'];
	
  if (updateProduct($_GET['id'], $data)) 
  {
  	echo 'Successfully updated!!';
  	header('Location: Book information.php');
  }
}
?>