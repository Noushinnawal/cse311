<?php include('partials/menu.php'); ?>
    <div class="navbar">
        <div class="boxes">
            <h1>Manage Admin </h1>
            <br/><br/><br/>
            <?php 
            if(isset($_SESSION['added']))
            {
                echo $_SESSION['added'];
                unset($_SESSION['added']);
            }
            if(isset($_SESSION['deleted']))
            {
                echo $_SESSION['deleted'];
                unset($_SESSION['deleted']);
            }
            if(isset($_SESSION['updated']))
            {
                echo $_SESSION['updated'];
                unset($_SESSION['updated']);
            }

            ?>
            <br/><br/><br/>
            <a href="add-admin.php" class="button-primary">Add Admin</a>
            <br/><br/><br/>
            <table class="table-style">
                <tr>
                    <td> ID</td>
                    <td> Full Name </td>
                    <td> Username</td>
                    <td>Actions </td>
                </tr>
                <?php
                $query="SELECT * FROM admin_table";

                $result=mysqli_query($connection,$query);

                if($result==TRUE)
                {
                    $count=mysqli_num_rows($result);
                     $Serial=1;
                    if($count>0)
                    {
                       while($num_of_rows=mysqli_fetch_assoc($result))
                       {
                       $Id=$num_of_rows['Id'];
                       $Full_name=$num_of_rows['Full_name'];
                       $Username=$num_of_rows['Username'];
                       ?>
                       
                       <tr>
                    <td> <?php echo $Serial++; ?></td>
                    <td> <?php echo $Full_name; ?></td>
                    <td> <?php echo $Username; ?></td>
                    <td>
                        <a href="<?php echo SITEURL; ?>admin/admin-update.php? Id=<?php echo $Id; ?>" class="button-secondary">Update Admin </a>
                        <a href="<?php echo SITEURL; ?>admin/delete_admin.php? Id=<?php echo $Id; ?>" class="button-danger">Delete Admin </a>
                    </td>
                </tr>
                <?php
                       
                    }
                }
                    else
                    {

                    }
                }
                ?>
                
            </table>
        </div>
    </div>
    <?php include('partials/footer.php'); ?>
