<?php
 include_once("classes/user.php");
$obj=new User();
	$res=$obj->selectAll('addproduct');
	
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link type = "text/css" rel="stylesheet" href = "design.css"/>
</head>

<body>
<h1>Available products</h1>
<div class="product_background">
<br />
<br />
<table width="100%">
    <tr><th>profilepic</th> 
    <th>type</th>
        <th>title</th>
        <th>price</th>
        <th>location</th> 
        
           
    </tr>
   
   <?php
    $conn= mysql_connect("localhost","root","");
	mysql_select_db("heather_hair_saloon_database",$conn);
	$loc=$_SESSION['location_selected'];
	$sql="SELECT * FROM images i 
	join addproduct a
	on i.image_id = a.image_id where location = '$loc' ";
	
	$result=mysql_query($sql,$conn)
	or die (mysql_error());
	while($data=mysql_fetch_array($result))	 
	{
	?>
	 <?php $picname=$data["name"]; ?>
	
    <tr>
    <td><img src="uploads/<?php  echo $picname; ?>" height="200" width="200" /></td></td>
        
    	<td><?php echo $data['type'];?></td>
        <td><?php echo $data['title'];?></td>
        
       <td><?php echo $data['price'];?></td>
        <td><?php echo $data['location'];?></td>
          <td><a href="addappointments.php?page=edit&userid=<?php echo $r['userid']; ?>"> BOOK</a></td>
       
    </tr>
    <?php
	 }
	
	?>
    </table>
     <a href="location/profile.php"> <- back</a>
</div>
</body>
</html>
