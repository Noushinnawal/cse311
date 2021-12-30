<?php include('partials/menu.php'); ?>

<div class="navbar">
<div class="boxes">
<h1> Manage Food </h1>
<br/><br/><br/>
            <a href="<?php echo SITEURL; ?>admin/Adding-Food.php" class="button-primary">Add Food to the Cart</a>
            <br/><br/><br/>
            <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
           if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
           
            if(isset($_SESSION['unauthorize']))
            {
                echo $_SESSION['unauthorize'];
                unset($_SESSION['unauthorize']);
            }
            if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
            
            ?>
            <table class="table-style">
                <tr>
                    <td> ID</td>
                    <td> Title </td>
                    <td> Price</td>
                    <td>Image </td>
                    <td> Featured</td>
                    <td>Active</td>
                </tr>
                <?php
                 
                 $query = "SELECT * FROM food_table";
                 $result = mysqli_query($connection,$query);
                 $count= mysqli_num_rows($result);
                 $serial =1;
                 if($count>0)
                 {
                    while($num_of_rows =mysqli_fetch_assoc($result))
                    {
                         $id= $num_of_rows['id'];
                         $title =$num_of_rows['title'];
                         $price= $num_of_rows['price'];
                         $image_name = $num_of_rows['image_name'];
                         $featured = $num_of_rows['featured'];
                         $active= $num_of_rows['active'];
                         ?>
                       <tr>
                    <td> <?php echo $serial++; ?></td>
                    <td><?php echo $title; ?></td>
                    <td> <?php echo $price; ?></td>
                    <td> <?php 
                    if($image_name == "")
                    {
                        echo "<div class = 'error-message'>Image not added.</div>";
                    }

                    else
                    {
                        ?>
                        <img src ="<?php echo SITEURL; ?>Image/Food/<?php echo $image_name; ?>" width="100px" >
                        <?php
                    }
                     ?> </td>
                    <td> <?php echo $featured; ?></td>
                    <td> <?php echo $active; ?></td>
                    <td>
                    <a href="<?php echo SITEURL; ?>admin/Food-updating.php?id=<?php echo $id; ?>" class="button-secondary">Update Food Cart</a>
                        <a href="<?php echo SITEURL; ?>admin/deleting-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="button-danger">Delete Food Cart </a>
                    </td>
                </tr>
                         <?php
                    }
                 }
                 else{
                     echo "<tr><td colspan= '7' class='error-message'> Food is not Added Yet. </td> </tr>";
                 }
                ?>
                
               
            </table>

</div>
</div>
<?php include('partials/footer.php'); ?>