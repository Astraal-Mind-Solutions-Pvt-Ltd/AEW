<?php

// Include the common session configuration



//database configuration for localhost
$db_host = 'localhost';
$db_name = 'aewelectricbikes';
$db_user = 'root';
$db_pass = '';
$db_driver = 'mysql';





// // Database configuration for SERVER host
// $db_host = 'localhost';
// $db_name = 'skp';
// $db_user = 'adminkk';
// $db_pass = 'kk@123@321';
// $db_driver = 'mysql';



$coni=mysqli_connect("$db_host","$db_user","$db_pass","$db_name") or die('Requested Database is not available!');

	
date_default_timezone_set("Asia/Kolkata");




 
  
?>