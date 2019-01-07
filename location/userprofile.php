 <?php
 include_once("../classes/user.php");
include_once("../classes/db_connection.php");

 if(isset($_GET['id'])){
	$id=$_GET['id'];
	
	$obj=new User();
	$data=$obj->register_me($id);
		
		$rows=mysql_fetch_array($data);
	
}


 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type = "text/css" rel="stylesheet" href = "../design.css"/>
<title>user profile</title>
</head>

<body>
<div class="userp_background">
<div class="userp_header">
<h2> YOUR PROFILE
</h2>
</div>
<div class="userp_main">
 


<label>Username</label> : <?php echo $_SESSION["uname"];?><br/><br/>
<label>Location</label> : <?php echo $_SESSION["location"];?>








</div>






</div>








</body>
</html>
