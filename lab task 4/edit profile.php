<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

session_start();

if (isset($_SESSION['User_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 

$name = $email = $gender = $dob = '';
$nameErr = $emailErr = $genderErr = $dobErr = '';
$massage = '';  
$error = '';
$flag=1;  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
    $flag=0;
  } 
  else 
  {
    $name = ($_POST["name"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$name) || str_word_count($name)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $name="";
      $flag=0;
    }
  }

      
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
    $flag=0;
  } 
  else 
  {
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";    
      $flag=0;
    }
  }
  if(empty($_POST["gender"]))  
  {  
    $genderErr = "Select Gender"; 
    $flag=0; 
  }
  else 
  {
    $gender = ($_POST["gender"]);
  } 

  if(empty($_POST["dob"]))  
  {  
    $dobErr = "Enter Date of Birth";
    $flag=0;  
  }
  else 
  {
    $dob = ($_POST["dob"]);
  }

  if ($flag==1) 
  {
    if(isset($_POST["submit"]))  
    {
      if(file_exists('registratio/data.json'))  
      {  
        $current_data = file_get_contents('registratio/Data.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
        'name'            =>     $_POST['name'],
        'email'           =>     $_POST['email'],
        'gender'          =>     $_POST["gender"],  
        'dob'             =>     $_POST["dob"]);  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('registratio/Data.json', $final_data))  
        {  
          $message = "Updated Successfully";  
        } 
      } 
      else  
      {  
        $error = 'JSON File not exits';  
      }
    }  
  }    
} 
 
$data = file_get_contents("registratio/Data.json");
$data = json_decode($data, true);
foreach($data as $row)  
{  
  $name = $row["name"];
  $email = $row["email"];
  $gender = $row["gender"];
  $dob = $row["dob"];
}
?> 


<div style="margin-left: 35%; margin-top: 10%;">
<fieldset  style="width: 450px;height: 230px;" >

  <form method="post">
    <legend style="text-align: center; width: 100%;height: 30px;">PROFILE</legend>

  <label for="name">Name</label>
  <label >: <input type="text" name="name" size="30" value="<?php echo $name ?>"></input></label>
  <span class="error"> </span><hr>

  <label for="email">Email</label>
  <label >: <input type="email" name="email" size="30" value="<?php echo $email ?>"></input><b> i </b></label>
  <span class="error"> </span><hr>


<label for="gender">Gender</label>
<label >: 
  <input type="radio" id="male" name="gender" value="<?php echo $gender ?>">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="<?php echo $gender ?>">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="<?php echo $gender ?>">
  <label for="other">Other </label>
</label>
  <span class="error"> </span>
  <hr>

<label for="dob">Date of Birthday</label>
<label >: 
  <input type="date" name="dob" value="<?php echo $dob ?>"> 
  </label>
  <span class="error"> </span><hr>

<input type="submit" name="submit" value="Submit">
</form> 
	
</div> 
</fieldset>
</div>
<?php require 'fotter/Footer.php';?>

</body>
</html>