<?php 
	$hostname 	= "localhost";
	$username 	= "root";
	$password 	= "";
	$dbname	 	= "pr_thailotte_web";

	$connect = mysqli_connect($hostname,$username,$password) or die('Error connecting to MySQL');

	$select = mysqli_select_db($connect, $dbname) or die('Database sysapp does not exist!');

	mysqli_set_charset($connect,"utf8");
	
 ?>