<?php include('partials/menu.php'); ?>
<div class="navbar">
    <div class="boxes">
        <h1>Admin Update</h1>
        <br/><br/>
        <?php 
        $Id=$_GET['Id'];
        $query="SELECT * FROM admin_table  WHERE Id=$Id";
        $result=mysqli_query($connection,$query);
        if($result==TRUE)
        {
            $count=mysqli_num_rows($result);
            if($count==1)
            {

         $num_of_rows = mysqli_fetch_assoc($result);
         $Full_name=$num_of_rows['Full_name'];
         $Username=$num_of_rows['Username'];

            }
            else{
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }
        ?>
        <form action="" method="POST">
            <table class="table-style">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="Full_name" value=" <?php echo $Full_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>User Name: </td>
                    <td>
                        <input type="text" name="Username" value="<?php echo $Username; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="Id" value="<?php echo $Id; ?>">
                        <input type="submit" name="submit" value="Admin Update" class="button-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?Php
if(isset($_POST['submit']))
{
      $Id=$_POST['Id'];
      $Full_name=$_POST['Full_name'];
      $Username=$_POST['Username'];
      $query = "UPDATE admin_table SET
               Full_name = '$Full_name',
               Username = '$Username'
               WHERE Id = '$Id' ";
      $result=mysqli_query($connection,$query);
      if($result==TRUE)
      {
          $_SESSION['updated'] = "<div class='success-message'>Admin Updated.</div>";
          header('location:'.SITEURL.'admin/manage-admin.php');
      }
      else{
        $_SESSION['updated'] = "<div class='error-message'>Admin Updated Failed.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
      }
}
?>
<?php include('partials/footer.php'); ?>