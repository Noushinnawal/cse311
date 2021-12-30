<?php 
 include('../config/constants.php');
    if(isset($_GET['id']) && isset($_GET['image_name'])) 
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];
        if($image_name != "")
        {
            $path = "../Image/Food/".$image_name;
            $remove = unlink($path);
            if($remove==false)
            {
                $_SESSION['upload'] = "<div class='error-message'>Failed to Remove Image .</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
                die();
            }
        }
        $query = "DELETE FROM food_table WHERE id=$id";
        $result = mysqli_query($connection, $query);
      if($result == true)
      {
      $_SESSION['delete'] = "<div class='success-message'>Food deleted Successfully.</div>";
      header('location:'.SITEURL.'admin/manage-food.php'); 
}   
      else
      {
        $_SESSION['delete'] = "<div class='error-message'>Food deletetion Failed.</div>";
        header('location:'.SITEURL.'admin/manage-food.php'); 

      } 
    }
    else
    {
        $_SESSION['unauthorize'] = "<div class='error-message'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-food.php');
    }
?>