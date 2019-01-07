<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choose location</title>
<link type = "text/css" rel="stylesheet" href = "../design.css"/>
</head>

<body>
<div class="background_location">
<img src="../images/choose_location_background.jpg" width="1340px" height="650px">
<div class="message_of_thanks">
 <h2>WELCOME <?php echo $_SESSION['uname']?></h2>
<p>Thank you for choosing </p>
<h1>GLOBAL STYLLING</h1>
</div>
<div class="selection">

<form id="frmlocate"  action="../classes/process.php" method="post">

<select id="s1" name="location" class="select_one">
<Option value="select">Select Section</option>
<option value="london">LONDON</option>
<option value="paris">PARIS</option>
<option value="newyork">NEW YORK</option>


</select>
		
		
			


				
				<input class="locate" type="submit"   name="btnlocate" value="locate" required/>
               
			
</form>
</div>
</div>

</body>
</html>
