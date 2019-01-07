<?php
 include_once("../classes/user.php");
$obj=new User();
	$res=$obj->selectAll('addproduct');
	
if(isset($_GET['msg'])){
	echo $_GET['msg'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type = "text/css" rel="stylesheet" href = "../design.css"/>
<title>Appointments</title>
</head>

<body>

<div class="vp_background">
<div class="vp_title">
<h2> EDIT OR DELETE THE PRODUCT</h2>
</div>
<div class="vp_tbl">
<table border="1">
    <tr> <th>profilepic</th> 
    <th>type</th>
        <th>title</th>
        <th>price</th>
        <th>location</th> 
       
           
    </tr>
   <?php
    $conn= mysql_connect("localhost","root","");
	mysql_select_db("heather_hair_saloon_database",$conn);
	
	$sql="SELECT * FROM images i 
	join addproduct a
	on i.image_id = a.image_id";
	$result=mysql_query($sql);
	
	while($data=mysql_fetch_array($result))	 
	{
	?>
     <?php $picname=$data["name"]; ?>
    <tr>
    <!-- <td> <
    /td> -->    <td><img src="../uploads/<?php  echo $picname; ?>" height="200" width="200" /></td>
    	<td><?php echo $data['type'];?></td>
        <td><?php echo $data['title'];?></td>
        
       <td><?php echo $data['price'];?></td>
        <td><?php echo $data['location'];?></td>
        
        <td><a href="../admin/edit_product.php?id=<?php echo $data['addproduct_id']; ?>"> Edit</a></td>
        <td><a href="../admin/deleteproduct.php?id=<?php echo $data['addproduct_id']; ?>" onClick="return confirm('Are you sure?');"> delete</a></td>
    </tr>
    <?php
	 }
	?>
   </table>
    <a href="../admin/adminprofile.php"> <- back</a>
   </div>
   </div>
   
</body>
</html>
