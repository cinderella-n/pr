<?php 
	$servername = "localhost";
	$username 	= "root";
	$password 	= "";
	$dbname	 	= "pr_db";

	// Create connection
	$connect = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($connect->connect_error) {
	die("Connection failed: " . $connect->connect_error);
	}	

	mysqli_set_charset($connect,"utf8");	
 ?>