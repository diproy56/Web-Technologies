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

if (isset($_POST['updateProduct'])) 
{
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['user_name'] = $_POST['user_name'];
	$data['password'] = $_POST['password'];
	$data['gender'] = $_POST['gender'];
	$data['dob'] = $_POST['dob'];
	
  if (updateUser($_GET['id'], $data)) 
  {
  	echo 'Successfully updated!!';
  	header('Location: User information.php');
  }
}
?>