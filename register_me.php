<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type = "text/css" rel="stylesheet" href = "design.css"/>

<title>Register here</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript"><!--
function setFocusToTextBox(){
    document.getElementById("mytext").focus();
}
function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}
function validateForm(){
var email = $("#email").val();
if(email!=""){
	 		pattern =/^[a-zA-Z0-9._-]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
				if(email.search(pattern)==-1){
					alert("Invalid Email");
			
			return false;
			
							}
		}}
//--></script>

</head>

<body onload='setFocusToTextBox()'>
<div class='background'><img src='images/rgstrbackground.jpg' width = '100%' height = '700px' alt=''/>

<div class="container"> <h1>Thanks for choosing Global Styling</h1> </div>
<div class="note"><h1>Beaut<span>you</span></h1><h2>YOU'RE IN <span>GOOD HANDS</span></h2>
<p><span>Great style comes from experts</span></p></div>
<div class='rgstr'>

<p>SIGN UP TO FIND OUT MORE!</p>

<form id="frmregister" name = "frm_registration"   action="classes/process.php"  method="post" >

<input class="rgstr1" type="text" id="mytext" name="fname" placeholder="First Name" required/>
		<input class="rgstr2" type="text" name="lname" placeholder="Last Name"required  />
		
		
				<input class="rgstr3" type="radio" name="gender" id="male" value="male" required/><label for="male">Male</label>

                    <input class="rgstr4"  type="radio" name="gender" id="female" value="female"/><label for="female">Female</label>



			<input class="rgstr6" id="email" type="email" name="email" placeholder="Email address"required  /><span id="emailcheck" ></span>
				<input class="rgstr7" type="text" name="contact" placeholder="Contact Number" required />
				<input class="rgstr8" type="text" name="uname" placeholder="User Name"required  /><span id="usercheck"></span>
			<input class="rgstr9" type="password" id="txtNewPassword" name="password" placeholder="Password" required  />
				<input class="rgstr10" type="password" id="txtConfirmPassword" name="repassword" placeholder="Retype Password" onkeyup="checkPasswordMatch();" required /><span id="passwordcheck"></span>
                 <div class="registrationFormAlert" id="divCheckPasswordMatch">
</div>
				
				<input class="rgstr11" type="submit"  name="btnregister"   value="Register" onclick="validateForm()"/>
                
				<input class="rgstr12" type="reset" name="btnReset" value="Reset"/>
</form>
</div>

</div>


</body>
</html>
