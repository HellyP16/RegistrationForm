

// JavaScript Document
function valid()
{
	var uname=document.getElementById("uname").value;
	if(uname.length==0)
	{
		alert("Please Enter name");
		document.getElementById("uname").focus();
		return false;
	}

	var email=document.getElementById("email").value;
	if(email.length==0)
	{
		alert("Enter Email Id");
		document.getElementById("email").focus();
		return false;
	}
	
	if(email.length>0)
	{
		var r=/^[a-z0-9._]+@[a-z]+\.[a-z]{2,3}$|\.[a-z]{2}$/;
		if(email.match(r)==null)
		{
			alert("Enter Valid Email ID");
			document.getElementById("email").focus();
			return false;
		}
	}
	
	var pwd=document.getElementById("pwd").value;
	
	if(pwd.length==0)
	{
		alert("Please Enter password");
		document.getElementById("pwd").focus();
		return false;
	}
	
	if(pwd.length>0)
	{
		var f=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%&*+]).{6,15}$/;
		if(pwd.match(f)==null)
		{
			alert("Please Enter atleast one lowercase char"+"\n"+"atlease one UPPERCASE char"+"\n"+"Atleast one special char(!@#$%^&*+)"+"\n"+"password length 6 to 15 char");
			document.getElementById("pwd").focus();
			return false;
		}
		
	}
	
	
	
	

	/*var file=document.getElementById("upload").value;
	if(file==0)
	{
		alert("Select Image File");
		document.getElementById("upload").focus();
		return false;
	}
*/
	
	return true;
}


