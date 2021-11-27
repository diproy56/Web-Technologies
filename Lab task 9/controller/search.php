<?php
$searchByID = "";
$searchByusername="";
require '../model/model.php';

$data=showProduct($_GET['id']);
If($data!=null)
{
$book_name = $data["book_name"];
$id = $data["ID"];
$author_name = $data["author_name"];
$book_price = $data["book_price"];


 echo "<table class='table'>";
 echo "<tr class'table_allrow'>";
 echo "<th class='table_data_blue'>ID</th>";
echo "<td  class='table_data'>" . $id . "</td>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>Book Name</th>";
 echo "<td  class='table_data'>" . $book_name . "</td>";
echo "<tr>";
echo "<th class='table_data_blue'>Author name</th>";
 echo "<td  class='table_data'>" . $author_name . "</td>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>Price</th>";
 echo "<td  class='table_data'>" . $book_price . "</td>";
 echo "<tr>";
 echo "</table>";
}
 else if($data==null)
{
 	$searchByID="ID not Found";
	echo $searchByID;
 }


/*
$data=showuser($_GET['user_name']);
 //echo $_GET['id'];
 If($data!=null)
 {
 $name = $data["name"];
$user_name = $data["user_name"];
 $eamil = $data["email"];
 $password = $data["password"]; 
 $gender = $data["gender"];
$dob = $data["dob"];

 echo "<table class='table'>";
 echo "<tr class'table_allrow'>";
 echo "<th class='table_data_blue'>user_name</th>";
 echo "<td  class='table_data'>" . $user_name . "</td>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>name Name</th>";
 echo "<td  class='table_data'>" . $name . "</td>";
 echo "<tr>";
 echo "<th class='table_data_blue'>eamil</th>";
 echo "<td  class='table_data'>" . $eamil . "</td>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>password</th>";
 echo "<td  class='table_data'>" . $password . "</td>";
echo "<tr>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>gender</th>";
 echo "<td  class='table_data'>" . $gender . "</td>";
 echo "<tr>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>dob</th>";
 echo "<td  class='table_data'>" . $dob . "</td>";
 echo "<tr>";
 echo "</table>";
 }
 else if($data==null)
 {
	$searchByusername="ID not Found";
 	echo $searchByusername;
}
*/
?>