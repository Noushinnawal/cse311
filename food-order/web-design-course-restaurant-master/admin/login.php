<?php include('../config/constants.php'); ?>
<html>
    <head>
        <title>LoginSystem </title>
        <link rel="stylesheet" href="../css/CSS_FILE.css">
    </head>
    <body>
        <div class="login-style">
            <h1 class="text_at_center">Login</h1>
            <br/><br/><br/>
            <?php
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            if(isset($_SESSION['not_loggedin_Message']))
            {
                echo $_SESSION['not_loggedin_Message'];
                unset($_SESSION['not_loggedin_Message']);
            }
            ?>
            <br/><br/>
            <!-- Login form -->
            <form action="" method="POST" class="text_at_center">
                Username:<br/>
                <input type="text" name="Username" placeholder="Enter Your Username"><br/><br/>
              Password:<br/>
              <input type="password" name="Password" placeholder="Enter Password"><br/><br/>
              <input type="submit" name="submit" value="Login" class="button-primary"><br/><br/>  

            </form>
            
        </div>
    </body>
</html>
<?php
 
 if(isset($_POST['submit'])){
    $Username=$_POST['Username'];
    $Password = $_POST['Password'];
    //$Password = mysqli_real_escape_string($connection,$raw_password);

    $query="SELECT * from admin_table WHERE Username='$Username' AND Password='$Password'";
    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);

    if($count==1)
    {

    $_SESSION['login']="<div class='success-message'>Login SuccessFully.</div>";
    $_SESSION['User']=$Username; //user is logged or not
    header('location:'.SITEURL.'admin/');
    }
    else{
        $_SESSION['login']="<div class='error-message text_at_center'>login Failed.Username or Passsword Didn't match.Try Again.</div>";
       header('location:'.SITEURL.'admin/login.php');
    }
 }
 else{

 }
?>