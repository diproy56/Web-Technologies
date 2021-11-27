
function checkuName() 
{document.getElementById("user_name").style.backgroundColor = "red";
	if (document.getElementById("user_name").value == "") 
	{
		document.getElementById("usernamEerr").innerHTML = "Name Required";
		document.getElementById("usernamEerr").style.color = "red";
		document.getElementById("user_name").style.borderColor = "red";
	}
	else if (wordCount(document.getElementById("user_name").value)<2)
	{
		document.getElementById("usernamEerr").innerHTML = "Minimum Two Words";
		document.getElementById("usernamEerr").style.color = "red";
		document.getElementById("user_name").style.borderColor = "red";
	}
	else if
	{
		document.getElementById("usernamEerr").innerHTML = "";
		document.getElementById("user_name").style.borderColor = "black";
	}
			
}

