
function checkName() 
{//document.getElementById("name").style.borderColor = "red";
	if (document.getElementById("name").value == "") 
	{
		document.getElementById("namEerr").innerHTML = "Name Required";
		document.getElementById("namEerr").style.color = "red";
		document.getElementById("name").style.borderColor = "red";
	}
	else if (wordCount(document.getElementById("name").value)<2)
	{
		document.getElementById("nameErr").innerHTML = "Minimum Two Words";
		document.getElementById("nameErr").style.color = "red";
		document.getElementById("name").style.borderColor = "red";
	}
	else
	{
		document.getElementById("namEerr").innerHTML = "";
		document.getElementById("name").style.borderColor = "black";
	}
			
}

function checkPassword()
{//document.getElementById("password").style.borderColor = "red";
    if (document.getElementById("password").value == "") 
    {
		document.getElementById("passwordErr").innerHTML = "Password Required";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else if(document.getElementById("password").value.length<8)
	{
		document.getElementById("passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("passwordErr").innerHTML = "";
		document.getElementById("password").style.borderColor = "black";
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
	else if(document.getElementById("rpassword").value != document.getElementById("password").value)
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


function check() 
{//document.getElementById("name").style.borderColor = "red";
	if (document.getElementById("uname").value == "") 
	{
		document.getElementById("unamEerr").innerHTML = "User Name Required";
		document.getElementById("unamEerr").style.color = "red";
		document.getElementById("uname").style.borderColor = "red";
	}
	else if (wordCount(document.getElementById("user_name").value)<2)
	{
		document.getElementById("unamEerr").innerHTML = "Minimum Two Words";
		document.getElementById("unamEerr").style.color = "red";
		document.getElementById("uname").style.borderColor = "red";
	}
	else
	{
		document.getElementById("unamEerr").innerHTML = "";
		document.getElementById("uname").style.borderColor = "black";
	}
			
}
