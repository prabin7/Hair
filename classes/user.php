<?php
session_start();

include_once("db_connection.php");

class User
{
private $fname= "";
private $lname= "";
private $gender= "";
private $dob= "";
private $country= "";
private $email= "";
private $ph_number= "";
private $username= "";
private $userid= "";
//private $iid= "";
private $password= "";
private $type = "";
private $id = "";
private $addproduct_id = "";


private $title = "";
private $name = "";
private $image = "";

private $price = "";
private $location = "";
private $profilepic = "";
private $image_id = "";



private $aptime ="" ;
private $apdate = "";
private $message = "";


private $con;


public function __construct()
{
$this->con =  new db_connection();
}

 function listproductsbyid($sid)
		{
				$query="select * from addproduct where addproduct_id=$sid";
				
				$data=$this->con->Sel($query);
				
				return $data;
			}

	function login()
		{
			
			$query = "select * from register_me where  password='$this->password' and (username='$this->username' or email='$this->username')";
			
			$counter=$this->con->sel($query);
			
			$numRows=mysql_num_rows($counter);
			$data=mysql_fetch_array($counter);
			if ($numRows==0)?>
				
			<script> 
			
			alert("Invalid username or password");
			window.location.assign("../login.php");
           </script>
                        
			<?php
			// header("location:../login.php");
			 if($numRows==1)
			{
			  	
				if($data['role']=='admin')
				header("location:../admin/adminprofile.php");
				else
				{
				header("location:../include/chooselocation.php");
				$_SESSION['uname']=$this->username;
		
				
				$_SESSION['uiddd'] = $data['userid'];
				
				
			
				
				
				
				 
				//$_SESSION['pid'] = $data['iid'];
				
				
				
				
				$message=$this->message;
				//print_r($data);
				}
				
				}
			
		}
		function chooselocation(){
						
				
		if ($_POST['location']=='london'){
		header("location:../location/profile.php");
		
		}
		else if($_POST['location']=='paris'){
		header("location:../location/paris.php");
		
		}
		else if($_POST['location']=='newyork'){
		header("location:../location/newyork.php");
		
		}
		else if($_POST['location']=='select'){
		header("location:../include/chooselocation.php");
		
		}
		
		
$_SESSION['location'] = $this->location;		
		
		}
		
			function register_me()
		{
			$query="insert into register_me(fname,lname,gender,email,ph_number,username,password) values ('$this->fname','$this->lname','$this->gender','$this->email','$this->ph_number','$this->username','$this->password')";
					
		 
			$iAmRegistered=$this->con->forIUD($query);
			if($iAmRegistered==true){

			//header("location:page.php?page=user&msg=inserted");
			
				header("location:../login.php");
				
}
			else
				echo "Oops!!! Failed to register";
				
			
		}
	
	
		function addproduct()
		{
		$image_id = $_SESSION['image_id'];
		$query="insert into addproduct(type,title,price,location,image_id) values ('$this->type','$this->title',		
			'$this->price' ,'$this->location','$image_id')";
		
			$add=$this->con->forIUD($query);
			if($add==true){?>
             <script> 
			
			
			alert("You succesfully added the product");
			window.location.assign("../admin/addproduct.php");
           </script>
				
				<?php }
			else{?>
				<script> 
			
			
			alert("There is problem in adding the product");
			window.location.assign("../admin/addproduct.php");
           </script>
			<?php }
				$_SESSION['image_id'] = $this->image_id;
				
				
				}
			
			
			
			
			
			function addimage($image)
			{
			
			$query = "insert into images(name) values ('$image')";
		 	
			$addimage=$this->con->forIUD($query);
			
			if($addimage==true){
				echo "You succesfully added the image";
			}else
			{	echo "Oops!!! cannot add the image";
				}
							$_SESSION['id'] = $addimage['id'];
	
			}
		
			
				function makeappointment()
		{
		$addproduct_id = $_SESSION['addproduct_id'];
		$query="insert into appointment(time,date,additional_info,userid,addproduct_id) values ('$this->aptime','$this->apdate' ,'$this->message','$this->id','$addproduct_id')";
			
			
		 
			$add=$this->con->forIUD($query);
			if($add==true)
			{?>
            <script> 
			
			
			alert("Appointment successfull and check your mail for further info.");
			window.location.assign("../showproducttouser.php");
           </script>
				
				
                 
			<?php	}
			
			else
		 		{
				echo "Oops!!! Can't make the appointment";
				}
				$_SESSION['addproduct_id'] = $this->addproduct_id;
			}
			
			
			
			public function selectAll($addproduct)
	{
		
		$data = array();
		$sql = mysql_query("SELECT * FROM addproduct a
join images i 
on a.image_id = i.image_id  ");
		
		if(mysql_num_rows($sql) > 0)
		{
			while($row = mysql_fetch_assoc($sql))
			{
				$data[] = $row;
			}
		}
		return $data;
	}
	
	
	
	
	
	
	
 function delete($table, $field, $id){
	
		$sql = "DELETE FROM $table WHERE $field = $id";
		$result=mysql_query($sql) or die(mysql_error());
		return $result;
	}
			
			//function to filter the appointment
	
//Getter and setter function  for aptime
				function setAptime($aptime)
		{

			$this->aptime=$aptime;
		}
		
		function getAptime()
		{
		return $this->aptime;
		}
		//Getter and setter function  for apdate
				function setApdate($apdate)
		{

			$this->apdate=$apdate;
		}
		
		function getApdate()
		{
		return $this->apdate;
		}
		
		//Getter and setter function  for apmessage
				function setMessage($message)
		{

			$this->message=$message;
		}
		
		function getMessage()
		{
		return $this->Message;
		}
		
		
			//Getter and setter function  for id
					function setId($id)
		{

			$this->id=$id;
		}
		
		function getId()
		{
		return $this->id;
		}
		
		
		
		
		
		
					function setImage_id($image_id)
		{

			$this->image_id=$image_id;
		}
		
		
		
		
		
		
		function getImage_id()
		{
		return $this->image_id;
		}
		
		
		
		
		
		
		
		function setAddproduct_id($addproduct_id)
		{

			$this->addproduct_id=$addproduct_id;
		}
		
		function getAddproduct_id()
		{
		return $this->addproduct_id;
		}
		
		
//Getter and setter function  for setting location
		
		
		
				function setLocation($location)
		{

			$this->location=$location;
		}
		
		function getLocation()
		{
		return $this->location;
		}
		//Getter and setter function  for setting style type
			function setType($type)
		{

			$this->type=$type;
		}
		
		function getType()
		{
		return $this->type;
		}
		
		
//Getter and setter function  for setting title
		
			function setTitle($title)
		{

			$this->title=$title;
		}
		function gettitle()
		{
		return $this->title;
		}
		
//Getter and setter function  for setting price
		function getPrice()
		{
		return $this->price;
		}
			function setPrice($price)
		{

			$this->price=$price;
		}
		
		

//Getter and setter function  for setting the value of first name
		function setFname($fname)
		{

			$this->fname=$fname;
		}
		
		function getFname()
		{
		return $this->fname;
		}



//Getter and setter function  for setting the value of Last name
		function setLname($lname)
		{

			$this->lname=$lname;
		}
		
		function getLname()
		{
		return $this->lname;
		}

//Getter and setter function  for setting the value of gender
		function setGender($gender)
		{

			$this->gender=$gender;
		}
		
		function getGender()
		{
		return $this->gender;
		}
		
		//Getter and setter function  for setting the value of date of birth
		function setDob($dob)
		{

			$this->dob=$dob;
		}
																																							
		function getDob()
		{
		return $this->dob;
		}
		
		//Setter and getter for Image Name 
		function setImageName($imagename)
		{

			$this->imagename=$imagename;
		}
		
		function getImageName()
		{
		return $this->imagename;
		}
//Getter and setter function  for setting the value of address
	
		function setCountry($country)
		{

			$this->country=$country;
		}
																																							
		function getCountry()
		{
		return $this->country;
		}
		

		

		
//Getter and setter function  for setting the value of email address
		function setEmail($email)
		{

			$this->email=$email;
		}
		
		function getEmail()
		{
		return $this->email;
		}
		
//Getter and setter function  for setting the value of phone number
		function setPh_number($ph_number)
		{

			$this->ph_number=$ph_number;
		}
		
		function getPh_number()
		{
		return $this->ph_number;
		}
		
//Getter and setter function  for setting the value of username
		function setUsername($username)
		{

			$this->username=$username;
		}
		
		function getUsername()
		{
		return $this->username;
		}
		
//Getter and setter function  for setting the value of Last name
		function setPassword($password)
		{

			$this->password=$password;
		}
		
		function getPassword()
		{
		return $this->password;
		}
		
		function sendmail($email , $apdate ){
		$to = $email;
		$subject = "Appointment Confirmation";
		$message = "You have sucessufully booked an appointment for ".$apdate;
		die();
		$from = "From"."mamatatamang11@gmail.com";
     mail($to , $subject , $message , $from);
		
		$mailmessage = "Check your email for further information";
		
	  
}
	}



?>