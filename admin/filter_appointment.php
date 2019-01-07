<?php
 include_once("../classes/user.php");
$booking=new User();
include_once("../classes/db_connection.php");

$conn=new db_connection();
	

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<div class="filter_body">
<div class="filter_day"> 

    <?php

			if(isset($_POST['filterDay']))
			{
	$date1=$_POST['start'];
	echo "<h3>LIST OF ".$date1." Appointments</h3>";
	

$sql="SELECT * FROM `appointment` a
join register_me r
on r.userid = a.userid
join addproduct p 
on p.addproduct_id = p.addproduct_id where date='$date1'";

$result=mysql_query($sql);
	?>
    </div>
    <div class="filer_table">
    <table border="2px">
<tr><th>username</th>
    <th>email</th>
    <th>ph_number</th>
    <th>time</th>
        <th>date</th>
        <th>Additional information</th>
        
        <th>product title</th>
           
    </tr>

    <?php
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

}
?>


<?php

			if(isset($_POST['filterWeek'])){
	$date=$_POST['start'];
	$end=date('Y-m-d', strtotime($date. ' + 7 day'));
	
	echo "<h3>List Of Weekly Appointments</h3>";
	

$sql="SELECT * FROM `appointment` a
join register_me r
on r.userid = a.userid
join addproduct p 
on p.addproduct_id = p.addproduct_id where date between '$date' and '$end'";

$result=mysql_query($sql);
	?>
    <table border="2px">
<tr><th>username</th>
    <th>email</th>
    <th>ph_number</th>
    <th>time</th>
        <th>date</th>
        <th>Additional information</th>
        
        <th>product title</th>
           
    </tr>

    <?php
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

}
?>





</div>

</body>
</html>
