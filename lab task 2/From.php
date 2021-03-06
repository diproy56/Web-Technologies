<!DOCTYPE html>
<html>
<head>
	<title>From</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php

	$nameerr = $emailerr = $gendererr = $doberr = $degreeerr = $blood_grouperr ="";
	$name = $email = $gender = $dob = $degree = $blood_group = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	  if (empty($_POST["name"])) 
	  {
	    $nameerr = "Name is required";
	  } 
	  else 
	  {
	    $name = ($_POST["name"]);
	  
	    if (!preg_match("/^[a-zA-Z-' ]*$/",$name) ) 
	    {
	      $nameerr = "Period & Dash Allowed";
	    }
	    elseif(str_word_count($name)<2)
	    {
	    	 $nameerr = "Contains At Least Two Words";
	    }
	  }

	  if (empty($_POST["email"])) 
	  {
	    $emailerr = "Email is required";
	  } 
	  else 
	  {
	    $email = ($_POST["email"]);
	   
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	     {
	      $emailerr = "Invalid email format";
	     }
	  }

	  if (empty($_POST["dob"])) 
		  {
		    $doberr = "Date Of Birth Is Required";
		  } 
		  else 
		  {
		    $dob = ($_POST["dob"]);
		  }

	  if (empty($_POST["gender"])) 
	  {
	    $gendererr = "Gender is required";
	  } 
	  else 
	  {
	    $gender = test_input($_POST["gender"]);
	  }
	

	    if (empty($_POST["degree"]) ) 
		  {
		    $degreeerr = "Degree Is Required";
		  } 
		  else 
		  {
		    if (count($_POST["degree"])<2)
		    {
		      $degreeerr = "Atleast Two Degrees Must Be Selected";
		    }
		    
		  }

	 if (empty($_POST["blood_group"]))
	  {
	    $blood_grouperr = "Blood Groupe is required";
	  }
	   else
	    {
	    $blood_group = ($_POST["blood_group"]);
	    }

	}
	


?>

	<div class="header">
		<h1>Registration</h1>
	</div>

	
	<div class="reg_box">
		<form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="wraper">
		
		<div class="content" >
			<label class="label">Name</label><br>
			<input type="text" name="name" class="input" value="<?php echo $name;?>"><span class="error">* <?php echo $nameerr;?></span><br>
			
		</div>


		<div class="content">
			<label class="label">Email</label><br>
			<input type="text" name="email" class="input" value="<?php echo $email;?>">
		<span class="error">*
	 		<?php echo $emailerr;?>
	 	</span><br>
		</div>


		<div class="content">
			<label class="label">Date Of Birth</label><br>
			 <input type="date" name="dob" class="input" value="<?php echo $dob;?>">
      <span class="error">*<?php echo $doberr;?></span><br>
		</div>


		<div class="content">
			<label class="label">Gender</label><br>
			 <input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<span class="error">*
	 		<?php echo $gendererr;?>
	 	</span>
		<br>
		</div>


		<div class="content">
			<label class="label">Degree</label><br>
			 <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
     		 <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
      		<input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSc
      <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSc
      <span class="error">* <?php echo $degreeerr;?></span><br>
		</div>


		<div class="content">
			<label class="label">Blood group</label><br>
			<select name="blood_group" class="input" value="<?php echo $blood_group;?>">
        <option></option>
        <optionname="blood_group" <?php if (isset($dblood_group) && $blood_group=="a+") echo "checked";?> value="a+">A+</option>
        <option  name="blood_group" <?php if (isset($dblood_group) && $blood_group=="a-") echo "checked";?> value="a-">A-</option>
        <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="b+") echo "checked";?> value="b+">B+</option>
        <option  name="blood_group" <?php if (isset($dblood_group) && $blood_group=="b-") echo "checked";?> value="b-">B-</option>
        <option  name="blood_group" <?php if (isset($dblood_group) && $blood_group=="o+") echo "checked";?> value="o+">O+</option>
        <option s name="blood_group" <?php if (isset($dblood_group) && $blood_group=="o-") echo "checked";?> value="o-">O-</option>
        <option  name="blood_group" <?php if (isset($dblood_group) && $blood_group=="ab+") echo "checked";?> value="ab+">AB+</option>
        <option name="blood_group" <?php if (isset($dblood_group) && $blood_group=="ab-") echo "checked";?> value="ab-">AB-</option>
      </select>
      <span class="error">* <?php echo $blood_grouperr;?></span><br>
	 	</span>
		<br>
		</div>

		<div class="submit_content">
			<input type="submit" name="submit" value="Submit" class="submit_button">
		</div>

		</div>
	</form>

	</div>




</body>
</html>