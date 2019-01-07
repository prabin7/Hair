<script type="text/javascript">
function setFocusToTextBox(){
    document.getElementById("logintext").focus();
}
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login here</title>
<link type = "text/css" rel="stylesheet" href = "design.css"/>
</head>

<body onload='setFocusToTextBox()'>
<div class="mainlog">
<div class="log_pic"> <img src='images/hairstyle logo1.png' logo1.png' logo1.png' width = '100%' height = '100%' alt=''/></div>
<div class="log_text"><h1>Welcome to</h1><br/>
<h2>GLOBAL STYLING</h2>
<p>Sign up for our emails for booking ,latest trends plus recieve complementary shipping on all orders over $100</p></div>
<div class="log_form">

<form name="frm_login" action="classes/process.php" method="post">
 

<input class="form" type = "text" id="logintext" name="username" placeholder = "Username or email"  required/>
<input class="form1" type ="password" name="password" placeholder = "Password" required /> <br/>
 <p class="remember_me">
          <label>
           <label>
            <input type="checkbox" name="rememberme" id="remember_me">
            Remember me on this computer
          </label>
          </label>
        </p>
<br/><input class="form2" type="submit" name="btnlogin" value="LOG IN NOW"/>
</form>
<br />
<a href="register_me.php"> Not registered yet??</a>
</div>
</div>
</body>
</html>