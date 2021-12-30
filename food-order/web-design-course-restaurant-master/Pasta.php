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
            <div class="different_foods">
                <div class="image_of_foods">
                    <img src="image/Meat Lovers Pasta.jpg" alt="Meat Lovers Pasta" class="img_inside_border img_curve">
                </div>
                <div class="description_of_foods">
                    <h4>Meat Lovers Pasta</h4>
                    <p class="price_of_foods">TK 286</p>
                    <p class="detail_of_foods">
                        Prepared with tomato sauce, chicken, cheese, mushroom and garlic sauce.
                    </p>
                    <br>
                    <a href="Order.php" class="button">Order Now</a>
                </div>
            </div>
            <div class="different_foods">
                <div class="image_of_foods">
                    <img src="image/Pasta italiano.jpg" alt="Pasta italiano" class="img_inside_border img_curve">
                </div>
                <div class="description_of_foods">
                    <h4>Pasta Italiano</h4>
                    <p class="price_of_foods">TK 278</p>
                    <p class="detail_of_foods">
                        Prepared with tomato sauce, chicken, cheese and garlic sauce.
                    </p>
                    <br>
                    <a href="Order.php" class="button">Order Now</a>
                </div>
            </div>
            <div class="image_on_same_border"></div>
        </div>
    </section>
    <!-- Food menu section ends here -->
    <?php include('Front-parts/Bottomline.php'); ?>