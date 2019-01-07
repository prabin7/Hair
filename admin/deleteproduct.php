<?php
	include_once "../classes/user.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	$obj=new user();
	$result=$obj->delete('addproduct', 'addproduct_id', $id);
	if($result){
		header("location:../include/viewproduct.php?msg=deleted successfully");
	}else{
		header("location:../include/viewproduct.php?msg=ERROR");
	}
?>