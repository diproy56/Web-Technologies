// <script src="JS/style.js"></script>
function checkEmail()
{//document.getElementById("email").style.backgroundColor = "red";
    if (document.getElementById("email").value == "") 
    {
	  	document.getElementById("emailErr").innerHTML = "Email Required";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else if(document.form.email.value.indexOf("@")<1||document.form.email.value.indexOf("@")+2>document.form.email.value.lastIndexOf(".")||document.form.email.value.lastIndexOf(".")+2>=document.form.email.value.length)
	{
		document.getElementById("emailErr").innerHTML = "Invalid Email Format";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
	}
	else
	{
		document.getElementById("emailErr").innerHTML = "";
		document.getElementById("email").style.borderColor = "black";
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

