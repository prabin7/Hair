<?php
	include_once "../classes/user.php";
	include_once("../classes/function.php");

	if(isset($_POST['email'])){
		$email=$_POST['email'];
	}
	//include_oncesdf("function.php");
	sendmail( 'email');
		
			
?>