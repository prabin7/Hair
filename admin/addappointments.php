
<?php 
session_start();


?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type = "text/css" rel="stylesheet" href = "design.css"/>
<title>Appointments</title>
</head>

<body>
<?php

 
	  $uidd = $_SESSION['uiddd'];
  //$email = $_SESSION['email'];


 ?>


 <div class="apppointment_main">

 
   <div class="sub_main1">
    <h2>MAKE YOUR APPOINTMENT</h2>
  </div>
  <div class="appointment_form">
  
  
  <form class="app_form" action="classes/process.php" method="post">
  <br/>
  <br/>
  
 <!--<p>Location :</p> &nbsp;<input class="apform" type="radio" name="aplocation" id="london" value="london" required/><label for="london">London</label>

  <input class="apform" type="radio" name="aplocation" id="paris" value="paris" /><label for="paris">Paris</label>
  <input class="apform" type="radio" name="aplocation" id="newyork" value="newyork"/><label for="male">Newyork</label>
-->
<br/>
<br/>
<br/>		

<br/><br/><label>Time</label><input class="apform4" type ="time" name="aptime" required/> 
<br/><br/><label>Date</label><input class="apform6" type ="date" name="apdate" required /> 

<br/><br/><br/><label>Additional information</label> <textarea class="apform5" type= "text" name="message"></textarea>
<br/><input class="apform6" type ="hidden" name="uid" value="<?php echo $uidd ?>" /> 
<br/><input class="apform6" type ="hidden" name="addproduct_id" value="<?php  echo $_SESSION['addproduct_id'];?> "/> 

<br/><input class="apform6" type ="hidden" name="email" value="<?php echo $email ?>" /> 



	<input class="apform7" type="submit"   name="makeappointment" value="Submit" />
             
</form>
  
   <a href="showproducttouser.php"> <- back</a>
   </div>

</div>
 
</body>
</html>
