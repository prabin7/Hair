<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GLOBAL STYLLING</title>
<link type = "text/css" rel="stylesheet" href = "../design.css"/>


</head>

<body>
<div class='notificationbar'>
<div class="logo_header">
<img src='../images/logo1.jpg' width = '100%' height = '100%' alt=''/>
</div>

  <h1>GLOBAL STYLING</h1>
 <h2>WELCOME to GLOBAL STYLLING_ <?php echo $_SESSION['location'] ?> </h2>
<a href="../login.php"> LOG OUT</a>
 </div>
  <div class='head1'>
    <div class ='nav'>
      <ul class='menu'>
       <li> <a href = '../help.php'>HELP</a> </li>
     <li> <a href = 'userprofile.php?sub_page=0'>PROFILE</a> </li>
     <li> <a href = '../showproducttouser.php?sub_page=1'>PRODUCTS</a> </li>
  
      <li> <a href = 'profile.php?sub_page=3'>HOME</a> </li>
     
      </ul>
    </div>
	</div>
</body>
</html>