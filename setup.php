
<html>
<head>
	<title> Database Setup</title>
	
</head>
<body>	
	
	<?php
	include_once("classes/db_connection.php");
	mysql_connect("localhost","root","") or die("could not connect.");
//creating database
	mysql_query("create database if not exists `heather_hair_saloon_database`");
//Selecting database
	mysql_select_db("heather_hair_saloon_database") or die("Database not connected");


//creating addproduct table
	mysql_query("CREATE TABLE IF NOT EXISTS `addproduct` (
		`addproduct_id` int(100) NOT NULL AUTO_INCREMENT,
		`type` varchar(100) NOT NULL,
		`title` varchar(100) NOT NULL,
		`price` varchar(255) NOT NULL,
		`location` varchar(10) NOT NULL,
		`image_id` int(11) NOT NULL,
		PRIMARY KEY (`addproduct_id`)
		)");
		
		mysql_query("
		INSERT INTO `addproduct` (`addproduct_id`, `type`, `title`, `price`, `location`, `image_id`) VALUES
(4, 'HairStyle', 'blondered', '&pound;567', '', 0),
(5, 'HairStyle', 'blondered', '&pound;567', '', 0),
(7, 'HairStyle', 'blondered', '&pound;567', '', 0),
(8, 'HairStyle', 'blondered', '&pound;567', '', 0),
(9, 'HairStyle', 'blondered', '&pound;567', '', 0),
(10, 'HairStyle', 'blondered', '&pound;567', '', 0),
(11, 'HairStyle', 'blondered', '&pound;567', '', 0),
(12, 'HairStyle', 'blondered', '&pound;567', '', 0),
(13, 'HairStyle', 'blondered', '&pound;567', '', 0),
(14, 'HairStyle', 'blondered', '&pound;567', '', 0),
(15, 'HairStyle', 'blondered', '&pound;567', '', 0),
(16, 'HairStyle', 'blondered', '&pound;567', '', 0),
(17, 'HairStyle', 'blondered', '&pound;567', '', 0),
(18, 'HairStyle', 'blondered', '&pound;567', '', 0),
(19, 'HairStyle', 'blondered', '&pound;567', '', 0),
(20, 'HairStyle', 'blondered', '&pound;567', '', 0),
(22, 'HairStyle', 'ghjk', '&pound;5678', 'london', 54),
(23, 'HairStyle', '123', '&pound;67', 'london', 55),
(24, 'HairStyle', 'best boy cut', '&euro;284.5152', 'paris', 56),
(25, 'Treatment', 'cezanne', '$2282.0247', 'newyork', 57),
(26, 'Treatment', 'keratin', '&euro;2838.7584', 'paris', 58),
(27, 'Treatment', 'loreal', '$2279.1324', 'newyork', 59),
(28, 'HairStyle', 'maxres', '&pound;999', 'london', 60),
(29, 'HairStyle', 'ombre', '&euro;639.36', 'paris', 61),
(30, 'HairStyle', 'wedding hair', '$1639.9341', 'newyork', 62),
(31, 'HairStyle', 'up do', '&euro;2519.0784', 'paris', 63),
(32, 'Treatment', 'fghj', '$673.9059', 'newyork', 64),
(33, 'HairStyle', 'silk', '&pound;567', 'london', 65);

		
		");


//Creating appointment table
	mysql_query("CREATE TABLE IF NOT EXISTS `appointment` (
		`appointment_id` int(10) NOT NULL AUTO_INCREMENT,
		`time` time NOT NULL,
		`date` date NOT NULL,
		`additional_info` varchar(200) NOT NULL,
		`userid` int(11) NOT NULL,
		`addproduct_id` int(100) NOT NULL,
		PRIMARY KEY (`appointment_id`)
		)");
		mysql_query("
		INSERT INTO `appointment` (`appointment_id`, `time`, `date`, `additional_info`, `userid`, `addproduct_id`) VALUES
(1, '10:01:00', '2015-09-30', 'i need an appointment', NULL, NULL),
(2, '07:02:00', '2015-09-16', 'appointment', 0, NULL),
(3, '00:00:00', '2015-10-13', 'test', NULL, NULL),
(4, '11:57:00', '2015-10-22', 'my test form', 9, NULL),
(5, '11:57:00', '2015-10-15', 'test test', 9, NULL),
(6, '12:59:00', '2015-10-21', 'fda', 9, NULL),
(7, '22:59:00', '2015-10-13', 'test', 9, NULL),
(8, '12:59:00', '2015-10-29', 'test', 9, NULL),
(9, '12:59:00', '2015-10-17', 'uytrewqkjhgfd', 9, NULL),
(10, '15:57:00', '2015-12-31', 'lkasdjf', 9, NULL),
(11, '00:59:00', '2015-12-31', 'lasdjfl', 9, NULL),
(12, '13:59:00', '2015-10-17', 'ljlkk', 9, NULL),
(13, '12:59:00', '2015-10-10', 'kjh', 9, NULL),
(14, '12:59:00', '2015-10-17', '', 9, NULL),
(15, '12:59:00', '2015-10-17', '', 9, NULL),
(16, '12:59:00', '2015-10-17', '', 9, NULL),
(17, '12:59:00', '2015-10-10', '', 9, NULL),
(18, '14:01:00', '2015-10-23', 'i need the product', 31, NULL),
(19, '14:01:00', '2015-10-23', 'i need the product', 31, NULL),
(20, '14:01:00', '2015-10-23', 'i need the product', 31, NULL),
(21, '23:00:00', '2015-10-14', 'i need an appointment again', 29, NULL),
(22, '23:00:00', '2015-10-14', 'i need an appointment again', 29, NULL),
(23, '23:00:00', '2015-10-14', 'i need an appointment again', 29, NULL),
(24, '01:00:00', '2015-10-15', 'i need it , in time', 9, NULL),
(25, '12:01:00', '2015-10-01', 'dfghj', 29, 0),
(26, '12:00:00', '2015-10-14', 'ertyu', 29, 0),
(27, '12:00:00', '2015-10-14', 'ertyu', 29, 0),
(28, '12:00:00', '2015-10-14', 'ertyu', 29, 0),
(29, '12:00:00', '2015-10-14', 'ertyu', 29, 0),
(30, '12:00:00', '2015-10-14', 'ertyu', 29, 0),
(31, '05:56:00', '2015-10-15', 'dfgh', 29, 0),
(32, '04:56:00', '0005-03-12', 'dfghj', 29, 0),
(33, '04:56:00', '0005-03-12', 'dfghj', 29, 0),
(34, '18:56:00', '2015-10-08', 'dfghjk', 29, 0),
(35, '18:56:00', '2015-10-08', 'dfghjk', 29, 0),
(36, '09:57:00', '2015-10-23', 'dfghjk', 29, 0),
(37, '09:57:00', '2015-10-23', 'dfghjk', 29, 0),
(38, '13:00:00', '2015-10-06', 'cv', 9, 0),
(39, '00:00:00', '2015-10-23', 'dfghj', 29, 0),
(40, '01:59:00', '2015-10-17', 'jkl', 32, 0),
(41, '00:00:00', '2015-10-14', 'ksdjfliashfajg', 32, 0),
(42, '00:58:00', '2015-10-08', 'fgh', 9, 0),
(43, '00:58:00', '2015-10-08', 'fgh', 9, 0),
(44, '00:58:00', '2015-10-08', 'fgh', 9, 0),
(45, '00:58:00', '2015-10-08', 'fgh', 9, 48),
(46, '00:00:00', '2015-10-15', 'ghj', 9, 48),
(47, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(48, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(49, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(50, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(51, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(52, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(53, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(54, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(55, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(56, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(57, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(58, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(59, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(60, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(61, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(62, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(63, '01:01:00', '2015-10-28', 'bhuwaan', 32, 48),
(64, '00:12:00', '2015-10-07', 'adfasdfasf', 32, 48),
(65, '00:12:00', '2015-10-07', 'adfasdfasf', 32, 48),
(66, '01:00:00', '2015-10-09', 'fghj', 32, 48),
(67, '03:43:00', '2015-10-23', 'asfasfsf', 9, 48),
(68, '03:43:00', '2015-10-23', 'asfasfsf', 9, 48),
(69, '03:43:00', '2015-10-23', 'asfasfsf', 9, 48),
(70, '03:43:00', '2015-10-23', 'asfasfsf', 9, 48),
(71, '03:43:00', '2015-10-23', 'asfasfsf', 9, 48),
(72, '03:43:00', '2015-10-23', 'asfasfsf', 9, 48),
(73, '12:01:00', '2015-10-08', 'fghj', 9, 53),
(74, '02:03:00', '2015-10-14', 'dfghj', 9, 4),
(75, '02:01:00', '2015-10-14', 'ghj', 9, 41),
(76, '02:01:00', '2015-11-20', 'i want it', 9, 65),
(77, '02:01:00', '2015-11-20', 'i want it', 9, 65);

		
		
		");


//Creating groups table
	mysql_query("CREATE TABLE IF NOT EXISTS `groups` (
		`userid` int(10) NOT NULL AUTO_INCREMENT,
		`fname` varchar(50) NOT NULL,
		`lname` varchar(50) NOT NULL,
		`permission` text NOT NULL,
		PRIMARY KEY (`userid`)
		)");


//Creating images table
	mysql_query("CREATE TABLE IF NOT EXISTS `images` (
		`image_id` int(100) NOT NULL AUTO_INCREMENT,
		`name` varchar(11) NOT NULL,
		PRIMARY KEY (`image_id`)
		)");
		mysql_query("
		INSERT INTO `images` (`image_id`, `name`) VALUES
(2, 'img956.jpg'),
(3, 'img566.jpg'),
(4, 'img245.jpg'),
(5, 'img927.jpg'),
(6, 'img337.jpg'),
(7, 'img148.jpg'),
(8, 'img300.jpg'),
(9, 'img960.jpg'),
(10, 'img738.jpg'),
(11, 'img869.jpg'),
(12, 'img742.jpg'),
(13, 'img255.jpg'),
(14, 'img372.jpg'),
(15, 'img257.jpg'),
(16, 'img500.jpg'),
(17, 'img911.jpg'),
(18, 'img499.jpg'),
(19, 'img148.jpg'),
(20, 'img194.jpg'),
(21, 'img771.jpg'),
(22, 'img745.jpg'),
(23, 'img752.jpg'),
(24, 'img640.jpg'),
(25, 'img968.jpg'),
(26, 'img381.jpg'),
(27, 'img990.jpg'),
(28, 'img236.jpg'),
(29, 'img704.jpg'),
(30, 'img849.jpg'),
(31, 'img770.jpg'),
(32, 'img764.jpg'),
(33, 'img370.jpg'),
(34, 'img683.jpg'),
(35, 'img565.jpg'),
(36, 'img125.jpg'),
(37, 'img237.jpg'),
(38, 'img707.jpg'),
(39, 'img399.jpg'),
(40, 'img755.jpg'),
(41, ''),
(42, '<br />\r\n<b>'),
(43, '<br />\r\n<b>'),
(44, ''),
(45, 'C:xampp	mpp'),
(46, 'C:xampp	mpp'),
(47, 'C:xampp	mpp'),
(48, 'img827.jpg'),
(49, 'img400.jpg'),
(50, 'img466.jpg'),
(51, 'img718.jpg'),
(52, 'img650.jpg'),
(53, 'img751.jpg'),
(54, 'img771.jpg'),
(55, 'img311.jpg'),
(56, 'img610.jpg'),
(57, 'img666.jpg'),
(58, 'img874.jpg'),
(59, 'img669.jpg'),
(60, 'img361.jpg'),
(61, 'img892.jpg'),
(62, 'img974.jpg'),
(63, 'img787.jpg'),
(64, 'img140.jpg'),
(65, 'img744.jpg');

		
		
		");


//Creating register_me table
	mysql_query("CREATE TABLE IF NOT EXISTS `register_me` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ph_number` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userid`)
)
");


 	mysql_query("INSERT INTO `register_me` (`userid`, `fname`, `lname`, `gender`, `country`, `email`, `ph_number`, `username`, `password`, `role`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin', 'admin'),
(9, 'mamata', 'tamang', 'female', 'paris', 'mamatatamang31@yahoo.com', '987654321', 'mamata', 'mamata', NULL),
(14, 'Sujan', 'Tamang', 'male', '', '321sujan@gmail.com', '9818928606', 'suzan', 'suzan1', NULL),
(27, 'Prazwal', 'Malakar', 'male', NULL, 'its.prazwal@gmail.com', '9860301449', 'its.prazwal', 'mepraz', NULL),
(29, 'enisha', 'pradhan', 'female', NULL, 'enishapradhan01@gmail.com', '987654321', 'enu', '1234', NULL),
(30, 'sahid', 'sahid', 'male', NULL, 'sahidkapoor@yahoo.com', '987654321', 'sahid', 'sahid', NULL),
(31, 'bikram', 'tamang', 'male', NULL, 'bikram@yahoo.com', '123456789', 'bikram', 'bikram', NULL),
(32, 'bhuwan', 'acharya', 'male', NULL, 'abhuwan14@gmail.com', '9840837223', 'bhuwan', 'bhuwan', NULL),
(125, 'sani', 'sani', 'female', NULL, 'sani11@gmail.com', '99775544', 'sani', 'sani', NULL),
(126, 'mamata', 'tamang', 'female', NULL, 'mamatatamang31@yahoo.com', '4567890', 'mmmm', 'iii', NULL),
(127, 'sangita', 'thapa', 'female', NULL, 'sangita@yahoo.com', '4567', 'sangita', 'sangita', NULL);






");
		?>
		

	</body>
	</html>