<?php  
session_start();  
  
if(!$_SESSION['user_code']=="") {  
    echo "<META HTTP-EQUIV=Refresh content=0;URL=login.php>";  
 } 
 else{
 	header('location: index.php');
 } 
?> 