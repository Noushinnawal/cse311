<?php include('partials/menu.php'); ?>
<?php  
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM food_table WHERE id=$id";
        $result = mysqli_query($connection, $query);
        $num_of_rows = mysqli_fetch_assoc($result);
        $title =  $num_of_rows['title'];
        $description =  $num_of_rows['description'];
        $price =  $num_of_rows['price'];
        $current_image =  $num_of_rows['image_name'];
        $featured =  $num_of_rows['featured'];
        $active =  $num_of_rows['active'];

    }
    else
    {
        
        header('location:'.SITEURL.'admin/manage-food.php');
    }
?>


<div class="navbar">
    <div class="boxes">
        <h1>Update Food Cart</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
        
        <table class="table_for_reg">

            <tr>
                <td>Title: </td>
                <td>
                    <input type="text" name="title" value="<?php echo $title; ?>">
                </td>
            </tr>

            <tr>
                <td>Description: </td>
                <td>
                    <textarea name="description" cols="30" rows="5"><?php echo $description; ?></textarea>
                </td>
            </tr>

            <tr>
                <td>Price: </td>
                <td>
                    <input type="number" name="price" value="<?php echo $price; ?>">
                </td>
            </tr>

            <tr>
                <td>Current Image: </td>
                <td>
             <?php 
                    if($current_image == "")
                        { 
                            echo "<div class='error-message'>Image not Available.</div>";
                        }
                        else
                        {
                            ?>
                            <img src="<?php echo SITEURL; ?>Image/Food/<?php echo $current_image; ?>" width="150px">
                            <?php
                        }
             ?>
                </td>
            </tr>

            <tr>
                <td>Select New Image: </td>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>
            <tr>
                <td>Featured: </td>
                <td>
                    <input <?php if($featured=="Yes") {echo "checked";} ?> type="radio" name="featured" value="Yes"> Yes 
                    <input <?php if($featured=="No") {echo "checked";} ?> type="radio" name="featured" value="No"> No 
                </td>
            </tr>

            <tr>
                <td>Active: </td>
                <td>
                    <input <?php if($active=="Yes") {echo "checked";} ?> type="radio" name="active" value="Yes"> Yes 
                    <input <?php if($active=="No") {echo "checked";} ?> type="radio" name="active" value="No"> No 
                </td>
            </tr>

            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">

                    <input type="submit" name="submit" value="Update Food" class="button-secondary">
                </td>
            </tr>
        
        </table>
        
        </form>
        <?php

        if(isset($_POST['submit']))
        {
                 
                 $id = $_POST['id'];
                 $title = $_POST['title'];
                 $description = $_POST['description'];
                 $price = $_POST['price'];
                 $current_image = $_POST['current_image'];
                 $featured = $_POST['featured'];
                 $active = $_POST['active'];

                 if(isset($_FILES['image']['name']))
                 {
                     $image_name = $_FILES['image']['name']; 
                     if($image_name!="")
                     {
                  $ext = explode('.', $image_name); 
                  echo end($ext);
             $image_name = "Food-Name-".rand(0000, 9999).'.'.$ext;
             $src_path = $_FILES['image']['tmp_name']; 
             $dest_path = "../Image/Food/".$image_name;
             $upload = move_uploaded_file($src_path, $dest_path);
             if($upload==false)
             {
                 $_SESSION['upload'] = "<div class='error-message'>Failed to Upload new Image.</div>";
                 header('location:'.SITEURL.'admin/manage-food.php');
                 die();
        }
        if($current_image!="")
                        {
                            $remove_path = "../Image/Food/".$current_image;

                            $remove = unlink($remove_path);
                            if($remove==false)
                            {
                        
                                $_SESSION['remove-failed'] = "<div class='error-message'>Failed to remove current image.</div>";
                                
                                header('location:'.SITEURL.'admin/manage-food.php');
                                
                                die();
                            }
                        }
                    }
        else
        {
            $image_name = $current_image; 
        }
    }
    else
    {
        $image_name = $current_image; 
    }
    $query3 = "UPDATE food_table SET 
    title = '$title',
    description = '$description',
    price = $price,
    image_name = '$image_name',
    
    featured = '$featured',
    active = '$active'
    WHERE id=$id
";
$result3 = mysqli_query($connection, $query3);

                if($result3==true)
                {
                 
                    $_SESSION['update'] = "<div class='success-message'>Food Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                else
                {
                   
                    $_SESSION['update'] = "<div class='error-message'>Failed to Update Food.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }   
            }
 ?>
    </div>
</div>

<?php include('partials/footer.php'); ?>
