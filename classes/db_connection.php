<?php

class db_connection
	{
		private $con;
		function __construct()
		{
			$this->con=mysql_connect("localhost","root","");
			$selection = mysql_select_db("heather_hair_saloon_database",$this->con);
		}
		
		function forIUD($query)
		{
			$isexecute = mysql_query($query,$this->con);
			if($isexecute)
				return true;
					else
						return false;
								
		}
			function sel($query)
				{
					$execute= mysql_query($query,$this->con);
					
					return $execute;
				
				
				}
}










?>