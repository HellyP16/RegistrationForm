// JavaScript Document
function valid()
{
	var pid=document.getElementById("pid").value;
	if(pid.length==0)
	{
		alert("Please Enter ID");
		document.getElementById("pid").focus();
		return false;
	}
	
	var name=document.getElementById("name").value;
	if(name.length==0)
	{
		alert("Please Enter name");
		document.getElementById("name").focus();
		return false;
	}
	
	if(name.length>0)
	{
		var r=/[^A-Za-z]/;
		if(name.match(r)!=null)
		{
			alert("Enter Only Characters");
			document.getElementById("name").focus();
			return false;
		}
	}

	var address=document.getElementById("address").value;
	if(address.length==0)
	{
		alert("Please Enter address");
		document.getElementById("address").focus();
		return false;
	}
	
	var male=document.getElementById("male").checked;
	var female=document.getElementById("female").checked;
	if((male==false) && (female==false))
	{
		alert("Please Select Atleast One Gender");
		document.getElementById("male").focus();
		return false;
	}
	
	var d1=document.getElementById("d1").value;
	if(d1.length==0)
	{
		alert("Please Enter Join date");
		document.getElementById("d1").focus();
		return false;
	}

	var d2=document.getElementById("d2").value;
	if(d2.length==0)
	{
		alert("Please Enter Release date");
		document.getElementById("d2").focus();
		return false;
	}
	
	var rname=document.getElementById("rname").value;
	if(rname.length==0)
	{
		alert("Please Enter relative's name");
		document.getElementById("rname").focus();
		return false;
	}
	
	if(rname.length>0)
	{
		var r=/[^A-Za-z]/;
		if(rname.match(r)!=null)
		{
			alert("Enter Only Characters");
			document.getElementById("rname").focus();
			return false;
		}
	}

	var rnum=document.getElementById("rnum").value;
	if(rnum.length==0)
	{
		alert("Please Insert relative's Num");
		document.getElementById("rnum").focus();
		return false;
	}
	
	
	if(rnum.length>0)
	{
		var r=/^\d{10}$/;
		if(rnum.match(r)==null)
		{
			alert("This Field Accepts only 10 digits");
			document.getElementById("rnum").focus();
			return false;
		}
	}
	
	var crime=document.getElementById("crime").value;
	if(crime.length==0)
	{
		alert("Please add crime attempted");
		document.getElementById("crime").focus();
		return false;
	}

	var feedback=document.getElementById("feedback").value;
	if(feedback.length==0)
	{
		alert("Please Insert feedback");
		document.getElementById("feedback").focus();
		return false;
	}

	

	
	
	
	/*var read=document.getElementById("read").checked;
	var dance=document.getElementById("dance").checked;
	var swim=document.getElementById("swim").checked;
	var draw=document.getElementById("draw").checked;
	if((read==false) && (dance==false) && (swim==false) && (draw==false))
	{
		alert("Select Atleast One Hobby");
		document.getElementById("read").focus();
		return false;
	}
	*/
	var tp =document.getElementById("tp").selectedIndex;
	if(tp==0)
	{
		alert("Select program");
		document.getElementById("tp").focus();
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