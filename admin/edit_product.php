 
 <?php
 include_once("../classes/user.php");
include_once("../classes/db_connection.php");

 if(isset($_GET['id'])){
	$id=$_GET['id'];
	
	$obj=new User();
	$data=$obj->listproductsbyid($id);
		
		$rows=mysql_fetch_array($data);
	
}


 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit product</title>
<link type="text/css" rel="stylesheet" href="../../css/style.css" />
<link type = "text/css" rel="stylesheet" href = "../design.css"/>
</head>

<body>

	<div class="ap_background">
     
     <div class="edit_main">
     EDIT PRODUCT
     </div>
     <div class="ad_form_background">
    		
            
            <form  action="../classes/process.php" method="post" enctype="multipart/form-data">
            		<label>Location :</label> &nbsp;<input type="radio" name="location" id="london" value="london" /><label for="london">London</label>
                     <input type="radio" name="location" id="paris" value="paris" /><label for="paris">Paris</label>
  <input type="radio" name="location" id="newyork" value="newyork"/><label for="male">Newyork</label>
  
                     <input type="hidden" name="id" value="<?php echo $rows["image_id"]; ?>" readonly="readonly"/>
                    

 

<br/>
<br/><label>Product title</label>&nbsp &nbsp;<input class="title" type  = "text" name="title" placeholder = "product title" value="<?php echo $rows['title']?>"/>

<br/><br/>
<label>Product type</label>&nbsp &nbsp;<select class="type"  name="type">
<option>
HairStyle
</option>

<option>
Treatment
</option>
</select>
<br/>
<br/>

<label>price</label>&nbsp &nbsp;<input type="text" name="price" placeholder = "price" required value="<?php echo $rows['price']; ?>"/> (in pounds) <br/>
<br/>
<br/>
<input  type="file" name="image" width="100" />
<br/>
<br/>
<input type="submit" name="btneditproduct" value="Edit product"/>





			</form>

            
     </div>
</div>
</body>
</html>