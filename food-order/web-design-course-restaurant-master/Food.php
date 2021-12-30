<?php include('Front-parts/Menu.php'); ?>

    <!-- Search section starts here -->
    <section class="Search taking_text_in_center">
        <div class="boxes"> 
            <marquee behavior="alternate"direction="right" scrollamount="7">
                    <h5> Eat More.... </h5>
                </marquee>
                <br/>
                <br/>
                <marquee behavior="alternate"direction="left" scrollamount="7">
                    <h5> Think Less </h5>
                </marquee>
        </div>
    </section>
    <!-- Search section ends here -->

    <!-- Food menu section starts here -->
    <section class="food_menu">
        <div class="boxes">
            <h2 class="taking_text_in_center">Food Menu</h2>
            <?php
            $query = "SELECT * FROM food_table WHERE active='Yes'
            ";
            $result= mysqli_query($connection,$query);
            $count=mysqli_num_rows($result);
            if($count>0)
            {
                while($num_of_rows = mysqli_fetch_assoc($result))
                {
                 $id = $num_of_rows['id'];
                 $title = $num_of_rows['title'];
                 $description = $num_of_rows['description'];
                 $price = $num_of_rows['price'];
                 $image_name = $num_of_rows['image_name'];
                 ?>
     <div class="different_foods">
                <div class="image_of_foods">
                    <?php
                          if($image_name == "")
                          {
                              echo "<div class='error-message'>Image nont available.</div>";
                          }
                          else 
                          {
                              ?>
                                 <img src="<?php echo SITEURL; ?>Image/Food/<?php echo $image_name; ?>" alt="Chicken sausage burger" class="img_inside_border img_curve">
                              <?php
                          }
                    ?>
                   
                </div>
                <div class="description_of_foods">
                    <h4><?php echo $title; ?></h4>
                    <p class="price_of_foods"><?php echo $price; ?></p>
                    <p class="detail_of_foods">
                        <?php echo $description; ?>
                    </p>
                    <br>
                    <a href="<?php echo SITEURL; ?>Order.php?food_id=<?php echo $id; ?>" class="button">Order Now</a>
                </div>
            </div>
       </div>

                <?php
                }
            } 
            else
            {
            
                echo "<div class='error-message'>Food not found.</div>";
            }
            ?>
       
<div class ="fix"></div>
     </div>
    </section>
    <!-- Food menu section ends here -->
                <?php include('Front-parts/Bottomline.php'); ?>