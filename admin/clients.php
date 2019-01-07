<?php
 include_once("../classes/user.php");

	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type = "text/css" rel="stylesheet" href = "../design.css"/>
<title> list of clients</title>
</head>

<body>
<h3>LIST OF CLIENTS</h3>


<br />
<br />
<div class="list_of_clients">
<table border="1">
    <tr>
    <th>first name</th>
    <th>last name</th>
    <th>Gender</th>
    
    <th>username</th>
    <th>email</th>
    <th>ph_number</th>
   
    
    </tr>
   <?php
    $conn= mysql_connect("localhost","root","");
	mysql_select_db("heatherhairsalloon",$conn);
	
	$sql="SELECT * FROM `register_me` ";
	$result=mysql_query($sql);
	
	while($data=mysql_fetch_array($result))	 
	{
	?>
    <tr>
    
    <td><?php echo $data['fname'];?></td>
    <td><?php echo $data['lname'];?></td>
    <td><?php echo $data['gender'];?></td>
    
    	<td><?php echo $data['username'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['ph_number'];?></td>
       
     
    </tr>
    <?php
	 }
	?>
   </table>
   </div>
   <a href="adminprofile.php"> <- back</a>
</body>
</html>
