

function validateForm() {
	
x=document.frm_registration.fname.value;
y=document.frm_registration.lname.value;
	
		if(x==""){
			alert("hey");
			document.frm_registration.fname.focus();
			return false;
		}
			if(x!=""){
				pattern=/[a-zA-Z]/;
				if(fname.search(pattern)==-1)
			{
				alert("invalid first name");
				//f_name="";
				document.frm_registration.fname.focus();
				document.frm_registration.fname.value="";
				return false;	
			}
			}
		
}
if(y==""){
			alert("Enter Last  Name");
			document.frm_registration.lname.focus();
			return false;
		}
				if(l_name!=""){
				pattern=/[a-zA-Z]/;
				if(l_name.search(pattern)==-1)
			{
				alert("invalid last name");
				
				document.frm_registration.lname.focus();
				document.frm_registration.lname.value="";
				return false;	
			}
			}
		