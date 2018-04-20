// JavaScript Document
function valid()
{
	var agid=document.getElementById("agid").value;
	if(agid.length==0)
	{
		alert("Please Enter ID");
		document.getElementById("agid").focus();
		return false;
	}
	
	
	var ta =document.getElementById("ta").selectedIndex;
	if(ta==0)
	{
		alert("Select program");
		document.getElementById("ta").focus();
		return false;
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