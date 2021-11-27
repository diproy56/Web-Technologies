<!DOCTYPE html>
<html>
<head>
<title>Search</title>

<script src="JS/style.js"></script>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	.table
	{
		border: 1px solid black;
		margin-top: 20px;
		width: 300px;

	}
	    .wraper
        {
   width: 33%;
    margin: auto;
    padding: auto;
    margin-top: 150px;
    transform: scale(1.2);
        }
        .table_data_blue
        {
        	background-color:  #1376D5;
        	color :white;

        }
        .table_data_lightblue
        {
        	background-color:  #025AC3;
        	color :white;
        }
        .table_data
        {
        	text-align: center;
        }
        .table_allrow
        {
        	width: 100%
        	border: 1px solid black;
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

?>
<div class="wraper">

		<h1>Search Book With ID</h1>
		<h4>Enter Book ID: 
			<input type="number" name="searchByID" id="searchByID" onkeyup="search(this.value)">
			<span id="searchByIDErr"></span>
		</h4>
		<div id="txtHint">Book Information will be shown here...</div>
</div>
<?php require 'fotter/Footer.php';?>
</body>
</html>