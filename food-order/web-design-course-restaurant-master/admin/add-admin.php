<?php include('partials/menu.php'); ?>

<div class="navbar">
    <div class="boxes">
        <h1> Add Admin</h1>
        <br/> <br/> <br/>
        <?php 
            if(isset($_SESSION['added']))
            {
                echo $_SESSION['added'];
                unset($_SESSION['added']);
            }
            ?>
            <br/> <br/> <br/>
        <form action ="" method="POST">
        <table class="table-for_reg">
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="Full_name" placeholder="Enter Your Name"></td>
</tr>
<tr>
    <td>Username: </td>
<td><input type="text" name="Username" placeholder="Your Username"></td>
</tr>
<tr>
    <td>Password: </td>
    <td><input type="password" name="Password" placeholder="type your password"></td>
</tr>
<tr>
    <td colspan="2">
        <input type="submit" name="submitted" value="Add Admin" class="button-secondary">
    </td>
</tr>
</table>
</form>
</div>
</div>
<?php include('partials/footer.php'); ?>
<?php
if(isset($_POST['submitted']))
{
     $Full_name=$_POST['Full_name'];
    $Username=$_POST['Username'];
    $Password=md5($_POST['Password']);

    $query="INSERT INTO admin_table SET
    Full_name='$Full_name',
    Username='$Username',
    Password='$Password'
    ";
    
    $result=mysqli_query($connection,$query) or die(mysqli_error($connection));

    if($result==TRUE)
    {
        $_SESSION['added']="Admin Added Successfully";
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else{
        $_SESSION['added']="Admin Add failed";
        header("location:".SITEURL.'admin/add-admin.php');
    }
}

?>

