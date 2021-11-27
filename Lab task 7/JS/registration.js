// <script src="JS/style.js"></script>
function checkName() 
{//document.getElementById("name").style.backgroundColor = "red";
	if (document.getElementById("name").value == "") 
	{
		document.getElementById("nameerr").innerHTML = "Name Required";
		document.getElementById("nameerr").style.color = "red";
		document.getElementById("name").style.borderColor = "red";
	}
	else if (wordCount(document.getElementById("name").value)<2)
	{
		document.getElementById("nameerr").innerHTML = "Minimum Two Words";
		document.getElementById("nameerr").style.color = "red";
		document.getElementById("name").style.borderColor = "red";
	}
	else if
	{
		document.getElementById("nameerr").innerHTML = "";
		document.getElementById("name").style.borderColor = "black";
	}
			
}
function checkUserName() 
{//document.getElementById("name").style.backgroundColor = "red";
	if (document.getElementById("user_name").value == "") 
	{
		document.getElementById("Usernameerr").innerHTML = "Name Required";
		document.getElementById("Usernameerr").style.color = "red";
		document.getElementById("user_name").style.borderColor = "red";
	}
	else if (wordCount(document.getElementById("user_name").value)<2)
	{
		document.getElementById("Usernameerr").innerHTML = "Minimum Two Words";
		document.getElementById("Usernameerr").style.color = "red";
		document.getElementById("user_name").style.borderColor = "red";
	}
	else if
	{
		document.getElementById("user_nameErr").innerHTML = "";
		document.getElementById("user_name").style.borderColor = "black";
	}
			
}
function checkEmail()
{//document.getElementById("email").style.backgroundColor = "red";
    if (document.getElementById("email").value == "") 
    {
	  	document.getElementById("emailerr").innerHTML = "Email Required";
		document.getElementById("emailerr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else if(document.form.email.value.indexOf("@")<1||document.form.email.value.indexOf("@")+2>document.form.email.value.lastIndexOf(".")||document.form.email.value.lastIndexOf(".")+2>=document.form.email.value.length)
	{
		document.getElementById("emailerr").innerHTML = "Invalid Email Format";
		document.getElementById("emailerr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else
	{
		document.getElementById("emailerr").innerHTML = "";
		document.getElementById("email").style.borderColor = "black";
	}
}
function checkConfirmPassword()
{//document.getElementById("confirm_password").style.backgroundColor = "red";
    if (document.getElementById("confirm_password").value == "") 
    {
		document.getElementById("confirm_passwordErr").innerHTML = "Password Required";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value.length<8)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value != document.getElementById("password").value)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("confirm_passwordErr").innerHTML = "";
		document.getElementById("confirm_password").style.borderColor = "black";
	}
}



function checkCurrentPassword()
{//document.getElementById("current_password").style.backgroundColor = "red";
    if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "Password Required";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else if(document.getElementById("current_password").value.length<8)
	{
		document.getElementById("current_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("current_passwordErr").innerHTML = "";
		document.getElementById("current_password").style.borderColor = "black";
	}
}

function checkNewPassword()
{//document.getElementById("new_password").style.backgroundColor = "red";
    if (document.getElementById("new_password").value == "") 
    {
		document.getElementById("new_passwordErr").innerHTML = "Password Required";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else if(document.getElementById("new_password").value.length<8)
	{
		document.getElementById("new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("new_passwordErr").innerHTML = "";
		document.getElementById("new_password").style.borderColor = "black";
	}
}
function checkRetypeNewPassword()
{//document.getElementById("retype_new_password").style.backgroundColor = "red";
    if (document.getElementById("rpassword").value == "") 
    {
		document.getElementById("rpassworderr").innerHTML = "Password Required";
		document.getElementById("rpassworderr").style.color = "red";
		document.getElementById("rpassword").style.borderColor = "red";
	}
	else if(document.getElementById("rpassword").value.length<8)
	{
		document.getElementById("rpassworderr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("rpassworderr").style.color = "red";
		document.getElementById("rpassword").style.borderColor = "red";
	}
	else if(document.getElementById("rpassword").value != document.getElementById("new_password").value)
	{
		document.getElementById("rpassworderr").innerHTML = "Password Dosen't Match";
		document.getElementById("rpassworderr").style.color = "red";
		document.getElementById("rpassword").style.borderColor = "red";
	}
	else
	{
		document.getElementById("rpassworderr").innerHTML = "";
		document.getElementById("rpassword").style.borderColor = "black";
	}
}
function checkdob()
{//document.getElementById("dob").style.backgroundColor = "red";
    if (document.getElementById("dob").value == "") 
    {
		document.getElementById("doberr").innerHTML = "Date Of Birth Required";
		document.getElementById("doberr").style.color = "red";
		document.getElementById("dob").style.borderColor = "red";
	}
	else
	{
		document.getElementById("doberr").innerHTML = "";
		document.getElementById("dob").style.borderColor = "black";
	}
}  

function checkPassword()
{
    if (document.getElementById("password").value == "") 
    {
		document.getElementById("passworderr").innerHTML = "Password Required";
		document.getElementById("passworderr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else if(document.getElementById("password").value.length<8)
	{
		document.getElementById("passworderr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("passworderr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("passworderr").innerHTML = "";
		document.getElementById("password").style.borderColor = "black";
	}
}