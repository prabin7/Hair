
<?php

include_once("../classes/user.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type = "text/css" rel="stylesheet" href = "../design.css"/>
<title>ADD  UPDATE AND DELETE PRODUCT</title>
</head>

<body>
<?php

?>
</body>
<div class="ap_background">

<div class="manipulate">
 <a class="manipulate2" href="../include/viewproduct.php" > EDIT OR DELETE PRODUCT</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a class="manipulate1" href="addproduct.php" > ADD PRODUCT</a>


</div>
<div class="ad_form_background">

<h2> Add products here </h2>
<form class="ap_form" action="../classes/process.php" method="post" enctype="multipart/form-data">

<label>Location :</label> &nbsp;<input class="rgstr3" type="radio" name="location" id="london" value="london"/><label for="london">London</label>

  <input class="rgstr3" type="radio" name="location" id="paris" value="paris"/><label for="paris">Paris</label>
  <input class="rgstr3" type="radio" name="location" id="newyork" value="newyork"/><label for="male">Newyork</label>
  
<br/><input type="hidden" name="image_id" value="<?php echo $image_id ;?>" />
<br/>
<br/><label>Product title</label>&nbsp &nbsp;
<input class="rgstr1" class="title" type  = "text" name="title" placeholder = "product title"/>

<br/><br/>
<label>Product type</label>&nbsp &nbsp;<select class="rgstr1"  name="type">
<option>
HairStyle
</option>

<option>
Treatment
</option>
</select>
<br/>
<br/>

<label>price</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;<input class="rgstr1" type="text" name="price" placeholder = "price" required/> (in pounds) <br/>
<br/>
<br/>
<label>Product</label>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;<input  type="file" name="image" width="100" />

<br/>
<br/>  <p> 

<input class="rgstr11" type="submit" name="submit" value="Add product"/>




</form></div>
 <a href="adminprofile.php"> <- back</a>
</div>
</body>
</html>
