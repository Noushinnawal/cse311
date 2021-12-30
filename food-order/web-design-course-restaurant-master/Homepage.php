<?php include('Front-parts/Menu.php'); ?>
    <!-- Search section starts here -->
    <section class=" Search taking_text_in_center">
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

    <?php 
     if(isset($_SESSION['order']))
     {
         echo $_SESSION['order'];
         unset($_SESSION['order']);

     }

     ?>
    <!-- Food type section starts here -->
    <section class="foodtype">
        <div class="boxes">
            <h2 class="taking_text_in_center"> Foods Types </h2>
            <a href="Burger.php">
            <div class="foodtype_box box_float_inside_boarder">
                <img src="image/burger.jpg" alt="Burger" class="img_inside_border img_curve">

                <h3 class="float_the_text text_color">Burger</h3>
            </div>
            </a>
            <a href="Pizza.php">
            <div class="foodtype_box box_float_inside_boarder">
                <img src="image/pizza.jpg" alt="Pizza" class="img_inside_border img_curve">

                <h3 class="float_the_text text_color">Pizza</h3>
            </div>
            </a>
            <a href="Pasta.php">
            <div class="foodtype_box box_float_inside_boarder">
                <img src="image/pasta.jpg" alt="Pasta" class="img_inside_border img_curve">

                <h3 class="float_the_text text_color">Pasta</h3>
            </div>
            </a>
            <div class="image_on_same_border"></div>
        </div>
    </section>
    <!-- Food type section ends here -->

    <!-- Food menu section starts here -->
    <section class="food_menu">
        <div class="boxes">
            <h2 class="taking_text_in_center">Food Menu</h2>
            <?php
            $query="SELECT * FROM food_table WHERE active='Yes' AND featured='Yes' LIMIT 6";
           $result = mysqli_query($connection,$query);
           $count= mysqli_num_rows($result);
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
                    if($image_name=="")
                    {
                        echo "<div class='error-message'>Image is not Available</div>";
                    }
                    else
                    {
                        ?>
                    <img src="Image/Food/<?php echo $image_name ?>" alt="Beef Burger" class="img_inside_border img_curve">
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
              
              <?php
             }
           }
           else
           {
               echo "<div class = 'error-message'>Food is not Available.</div>";
           }

?>
<div class="fix"></div>
            
    </section>
    <!-- Food menu section ends here -->
<?php include('Front-parts/Bottomline.php'); ?>