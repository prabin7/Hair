
<?php
ini_set('mysql.connect_timeout',300);
ini_set('default_socket_timeout',300);

?>

<?php
 include_once("user.php");
include_once("db_connection.php");
include_once("uploadimage.php");



$con=new db_connection();
$result = mysql_query("SELECT MAX(image_id +1) AS max_id FROM images");
$result_product = mysql_query("SELECT MAX(addproduct_id +1) AS max_id FROM addproduct");

$row = mysql_fetch_array($result);
$row1 = mysql_fetch_array($result_product);
$_SESSION['image_id'] = $row["max_id"];
$_SESSION['addproduct_id'] = $row["max_id"];

//$result = mysql_query($query) or die ("fdf");

/*if(mysql_num_rows($result))
{
	while($row = mysql_fetch_array($result))
	{
		$img=$row['image_id'];
		$_SESSION['image_id'] = $img;
		
	}
}*/
if(isset($_POST['btnregister'])) {
    foreach($_POST as $val) {
        if(trim($val) == '' || empty($val)) {
            //empty field, do somethin
            header("Location: /add.php?error=empty_fields");
            die();
        }
    }
   
}
 
if(isset($_POST['btnregister']))
{
	$fname=$_POST['fname'];
	$_SESSION['fname']=$fname;
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
		
	$email=$_POST['email'];	
	$ph_number=$_POST['contact'];	
	$username=$_POST['uname'];	
	$password=$_POST['password'];	
	
	$usr=new User();
	
		$usr->setFname($fname);
	$usr->setLname($lname);	
	$usr->setGender($gender);
	
	//$usr->setDob($dob);
	//$usr->setCountry($country);
	$usr->setEmail($email);
	$usr->setPh_number($ph_number);
	
	$usr->setUsername($username);
	$usr->setPassword($password);
	
	$usr->register_me();
//



$usr->selectAll();
	
}

if(isset($_POST['btnlogin']))
{
	
	$username=$_POST['username'];	
	$password=$_POST['password'];	
	
	
	$usr=new User();
	
	$usr->setUsername($username);
	$usr->setPassword($password);
	
	$usr->login();
	
}
if(isset($_POST['btnlocate']))
{
	
	$location=$_POST['location'];	

	
$_SESSION['location_selected'] =$location;
	$usr=new User();
	
	$usr->setLocation($location);
	
	
	$usr->chooselocation();
	
}
if(isset($_POST['submit'])){

$type = $_POST['type'];
$title = $_POST['title'];
$price = $_POST['price'];
$location = $_POST['location'];
$image_id = $_POST['image_id'];
$image = $_FILES['image']['tmp_name'];
	$ui=new UploadImage();
	
		$imagename=$ui->imageUpload($image);
		

 if($location == 'newyork'){
				$x = simplexml_load_file('../xml/today.xml');

				
				$code = 'USD';
				
				$nodes = $x->xpath('//Currency[@CurrencyCode="' . $code . '"]');
                    $product_price=$price*(string)$nodes[0]->BanknoteBuying;
                    $product_price='$'.$product_price;
                    }else if($location == 'paris'){
						
                            $x = simplexml_load_file('../xml/today.xml');

				
				$code = 'EUR';
				
				$nodes = $x->xpath('//Currency[@CurrencyCode="' . $code . '"]');
                    $product_price=$price*(string)$nodes[0]->BanknoteBuying;
                            $product_price='&euro;'.$product_price;
                            }else{
									$product_price='&pound;'.$price;
                                    }

					
					










$usr=new User();
$usr->setType($type);
$usr->settitle($title);
$usr->setPrice($product_price);

$usr->setLocation($location);


$usr->setImageName($imagename);

//$usr->setIid($pid);



$usr-> addproduct($image_id);
$usr-> addimage($imagename);

//$usr-> displayimage();




}



if(isset($_POST['makeappointment']))
{

$aptime = $_POST['aptime'];
$apdate=$_POST['apdate'];
$message = $_POST['message'];
$uiddd = $_POST['uid'];
$addproduct_id = $_POST['addproduct_id'];
$email = $_POST['email'];



$usr=new User();

$usr->setAptime($aptime);
$usr->setApdate($apdate);
$usr->setMessage($message);
$usr->setId($uiddd);
//$usr->setAddproduct_id($addproduct_id);

//$usr->setEmail($email);

$usr-> makeappointment($addproduct_id);
$usr-> sendmail($email , $apdate);
}
		
	
	?>