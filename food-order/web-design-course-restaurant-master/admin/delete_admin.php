<?php
include('../config/constants.php');
 $Id=$_GET['Id'];
 $query = "DELETE FROM admin_table WHERE Id=$Id";
 $result=mysqli_query($connection,$query);
 if($result==TRUE)
 {
$_SESSION['deleted'] = "<div class='success-message'>Admin Deleted from database.</div>";
header('location:'.SITEURL.'admin/manage-admin.php');
 }
 else{
     
$_SESSION['deleted'] = "<div class='error-message'>Failed to Delete Admin.</div>";
header('location:'.SITEURL.'admin/manage-admin.php');
 }
?>