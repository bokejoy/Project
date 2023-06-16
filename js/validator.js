function checkcontact(theForm) {
    var why = "";
	why += isEmptyName(theForm.name.value);
	why += checkemail(theForm.email.value);
	why += isEmptyMessage(theForm.message.value);
	
    if (why != "") {
       alert(why);
       return false;
    }
return true;
}


function isEmptyName(strng) {
	var error = "";
	  if (strng.length == 0) {
		 error = "Please Enter your name! \n"
	  }
	return error;	  
}

function isEmptyMessage(strng) {
	var error = "";
	  if (strng.length == 0) {
		 error = "Please Enter your message! \n"
	  }
	return error;	  
}

//IMportant Validators---------------------------------------------------------

function checkemail (strng) {
	var error="";
	if (strng == "") {
	   error = "Enter your email address?.\n";
	}
	
		var emailFilter=/^.+@.+\..{2,3}$/;
		if (!(emailFilter.test(strng))) { 
		   error = "Please enter a valid email address.\n";
		}
		else {
	//test email for illegal characters
		   var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/
			 if (strng.match(illegalChars)) {
			  error = "The email address contains illegal characters.\n";
		   }
		}
	return error;    
}
