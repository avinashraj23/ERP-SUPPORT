function validateForm()
{
	var x = document.forms["form"]["user"].value;
	   if(x=="")
	   {
	   	alert("Username Must be filled");
	   	return false;
	   }
}