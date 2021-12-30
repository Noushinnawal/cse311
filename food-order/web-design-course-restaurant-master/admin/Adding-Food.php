<?php include('partials/menu.php'); ?>
<div class="navbar">
    <div class="boxes">
        <h1>Add Food to the Cart</h1>
        <br/><br/>
        <?php
        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table-style">
                <tr>
                    <td>Food Title:</td>
                    <td>
                        <input type="text" name="title" placeholder=" Enter Food Title">
                    </td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5" placeholder="Description of the Food"></textarea>
                    </td>
                </tr>

                <tr>
                <td>Price: </td>
                <td>
                    <input type="number" name="price">
                </td>
                </tr>
                <tr>
                    <td>Image: </td>
                    <td>
                    <input type="file" name="image">
                    </td>
                </tr>
            <tr>
                <td>Featured: </td>
                <td>
                    <input type="radio" name="featured" value="Yes">Yes
                    <input type="radio" name="featured" value="No">No
                </td>
            </tr>
            <tr>
                <td>Active: </td>
                <td>
                    <input type="radio" name="active" value="Yes">Yes
                    <input type="radio" name="active" value = "No">No
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Food" class="button-secondary">
                </td>
            </tr>
                
            </table>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $title=$_POST['title'];
            $description=$_POST['description'];
            $price = $_POST['price'];
            if(isset($_POST['featured']))
            {
                $featured=$_POST['featured'];
            }
            else{
                $featured = "NO";
            }
            if(isset($_POST['active']))
            {
                $active=$_POST['active'];
            }
            else{
                $active = "NO";
            }
            if(isset($_FILES['image']['name']))
            {
                $image_name=$_FILES['image']['name'];
               if($image_name!=="")
               {
                   $extsn = end(explode('.',$image_name));
                   $image_name = "Food-Name-".rand(0000,9999).".".$extsn;
                   $source = $_FILES['image']['tmp_name'];
                   $destination = "../Image/Food/".$image_name;
                   $upld = move_uploaded_file($source,$destination);
                   if($upld==false){
                       $_SESSION['upload'] = "<div class = 'error-message'>Failed to upload image.</div>";
                       header('location:'.SITEURL.'admin/Adding-Food.php');
                       die();
                   }
               }
            }
            else
            {
                $image_name = "";
            }
            $query = "INSERT INTO food_table SET
            title = '$title',
            description = '$description',
            price = $price,
            image_name = '$image_name',
            featured = '$featured',
            active = '$active'
            ";
            $result = mysqli_query($connection,$query);
            if($result == true)
            {
                $_SESSION['add']="<div class='success-message'>Food Added Successfully.</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
            }
            else
            {
                $_SESSION['add']="<div class='error-message'>Food Added Failed.</div>";
                header('location:'.SITEURL.'admin/manage-food.php');
            }
        }
    
        ?>
    </div>
</div>
<?php include('partials/footer.php'); ?>