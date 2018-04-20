

// JavaScript Document
function valid()
{
	var p_id=document.getElementById("p_id").value;
	if(p_id.length==0)
	{
		alert("Please Enter ID");
		document.getElementById("p_id").focus();
		return false;
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


