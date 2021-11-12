<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
}
.right{
	float: right;

}
.left{
	float: left;
	margin-left: 50px;
	font-size: 30px;
	font-weight: bold;
}

</style>
</head>
<body>
<header class="grid-container," style="margin-top: 50px;">
<div class="left">
	<span style="margin: auto;">XShop</span>
</div>	
<div class="right">
	<?php echo "Welcome ". $_SESSION['user_name'] . " |"; ?>
	<a style="text-decoration: none;margin-left: 10px;" href="Public.php">Home</a>
	<a style="text-decoration: none; margin-left: 10px;" class="right3" href="contact us.php">Contact US</a>
	<a style="text-decoration: none;margin-left: 10px;" href="Logout.php">Logout</a>

</div>
</header> 
<br>
<br>
<hr>

</body>
</html>