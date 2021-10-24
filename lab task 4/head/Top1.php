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
	<span style="margin: auto;">XCompany</span>
</div>	
<div class="right">
	<?php echo "Welcome Mr. ". $_SESSION['User_name'] . " |"; ?>
	<a href="Public.php">Home</a>
	<a href="Logout.php">Logout</a>
</div>
</header> 
<br>
<br>
<hr>

</body>
</html>