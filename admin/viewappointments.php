<?php
 include_once("../classes/user.php");
//$obj=new User();
	//$res=$obj->selectappointment('appointment');
	

?>
<?php



	
		$data = array();
		$sql = mysql_query(" SELECT * FROM `appointment` a
join register_me r
on r.userid = a.userid");
		
		if(mysql_num_rows($sql) > 0)
		{
			while($row = mysql_fetch_assoc($sql))
			{
				$data[] = $row;
			}
		
	}
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type = "text/css" rel="stylesheet" href = "../design.css"/>
<title> View appointments</title>
</head>

<body>
<div class="form_view_appointment">
<h3>LIST OF APPOINTMENTS</h3>

<form action="filter_appointment.php" method="post">
 
<p>Search by </p>

 <input class="srch" type="date" name="start">
<input class="srch1" type="submit" name="filterDay" value="Daily">
<input class="srch2" type="submit" name="filterWeek" value="Weekly"><br>
</form>
</div>

<div class="view_appointments">

<br />
<br />
<table border="1">
    <tr><th>username</th>
    <th>email</th>
    <th>ph_number</th>
    <th>time</th>
        <th>date</th>
        <th>Additional information</th>
        
        <th>product title</th>
           
    </tr>
   <?php
    $conn= mysql_connect("localhost","root","");
	mysql_select_db("heatherhairsalloon",$conn);
	
	$sql="SELECT * FROM `appointment` a
join register_me r
on r.userid = a.userid
join addproduct p 
on p.addproduct_id = p.addproduct_id";
	$result=mysql_query($sql);
	
	while($data=mysql_fetch_array($result))	 
	{
	?>
    <tr>
    	<td><?php echo $data['username'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['ph_number'];?></td>
        <td><?php echo $data['time'];?></td>
        <td><?php echo $data['date'];?></td>
        
       <td><?php echo $data['additional_info'];?></td>
       <td><?php echo $data['title'];?></td>
       <td><a href="email.php?email=<?php echo $data['email']; ?>"> confirm</a></td>
     
    </tr>
    <?php
	 }
	?>
   </table>
   </div>
   <div class="back">
   
       <a href="adminprofile.php"> <- back</a>
       </div>
</body>
</html>
