<?php
ob_start();
session_start();
define('SITEURL','http://localhost/food-order/web-design-course-restaurant-master/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food-management');
$connection=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
$select_database = mysqli_select_db($connection,DB_NAME) or die(mysqli_error()); 


?>