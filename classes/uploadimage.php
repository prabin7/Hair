<?php

	class UploadImage
	{
		private $conn;
		
		function __construct()
		{
			$this->conn=new db_connection();
			}
		function imageUpload($image){
		      $file = "img".rand(1000,100).".jpg";
			$file_loc = $image;
		// $file_size = $_FILES['style_pic']['size'];
		 //$file_type = $_FILES['style_pic']['type'];
		 $folder="../uploads/";
		 
		 move_uploaded_file($file_loc,$folder.$file);
		// $query="INSERT INTO hairstyles(image) VALUES('$file')";
		//$check=$this->conn->IUD($query);
		return $file;
		}

		}

?>