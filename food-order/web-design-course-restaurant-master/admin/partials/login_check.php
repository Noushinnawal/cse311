<?php
if(!isset($_SESSION['User'])) //User is not logged in then it will redirect in login page
{
$_SESSION['not_loggedin_Message']="<div class='error-message text_at_center'>Login to Access Admin Panel.</div>";
header('location:'.SITEURL.'admin/login.php');
}
?>