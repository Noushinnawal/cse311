<?php include('partials/menu.php'); ?>

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
    <br/><br/>
    <?php
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            ?>
            <br/><br/>
    <!-- Food type section starts here -->
    <section class="foodtype">
        <div class="boxes">
            <h2 class="taking_text_in_center"> Foods Types </h2>
            <a href="Burger.html">
            <div class="foodtype_box box_float_inside_boarder">
                <img src="../Image/burger.jpg" alt="Burger" class="img_inside_border img_curve">

                <h3 class="float_the_text text_color">Burger</h3>
            </div>
            </a>
            <a href="Pizza.html">
            <div class="foodtype_box box_float_inside_boarder">
                <img src="../Image/pizza.jpg" alt="Pizza" class="img_inside_border img_curve">

                <h3 class="float_the_text text_color">Pizza</h3>
            </div>
            </a>
            <a href="Pasta.html">
            <div class="foodtype_box box_float_inside_boarder">
                <img src="../Image/pasta.jpg" alt="Pasta" class="img_inside_border img_curve">

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
            <div class="different_foods">
                <div class="image_of_foods">
                    <img src="../Image/beef_burger.jpg" alt="Beef Burger" class="img_inside_border img_curve">
                </div>
                <div class="description_of_foods">
                    <h4>Beef Burger</h4>
                    <p class="price_of_foods">TK 180</p>
                    <p class="detail_of_foods">
                        Prepared with beef patty & special sauce.
                    </p>
                    <br>
                    <a href="Order.html" class="button">Order Now</a>
                </div>
            </div>
            <div class="different_foods">
                <div class="image_of_foods">
                    <img src="../Image/chicken_burger.jpg" alt="Chicken Burger" class="img_inside_border img_curve">
                </div>
                <div class="description_of_foods">
                    <h4>Chicken Burger</h4>
                    <p class="price_of_foods">TK 180</p>
                    <p class="detail_of_foods">
                        Prepared with chicken patty & special sauce.
                    </p>
                    <br>
                    <a href="Order.html" class="button">Order Now</a>
                </div>
            </div>
            <div class="different_foods">
                <div class="image_of_foods">
                    <img src="../Image/Cheese Fountain Pizza.jpg" alt="Cheese Fountain Pizza" class="img_inside_border img_curve">
                </div>
            <div class="description_of_foods">
                    <h4>Cheese Fountain Pizza</h4>
                    <p class="price_of_foods">TK 255</p>
                    <p class="detail_of_foods">
                        Prepared with mariana sauce, chicken, capsicum, cheese. Only 6" available.
                    </p>
                    <br>
                    <a href="Order.html" class="button">Order Now</a>
                </div>
            </div>
            <div class="different_foods">
                <div class="image_of_foods">
                    <img src="../Image/tender beef pizza.jpg" alt="Tender Beef Pizza" class="img_inside_border img_curve">
                </div>
                <div class="description_of_foods">
                    <h4>Tender Beef Pizza</h4>
                    <p class="price_of_foods">Tk 275</p>
                    <p class="detail_of_foods">
                        Prepared with mariana sauce, mashed beef, capsicum, cheese. Only 6" available.
                    </p>
                    <br>
                    <a href="Order.html" class="button">Order Now</a>
                </div>
            </div>
            <div class="different_foods">
                <div class="image_of_foods">
                    <img src="../Image/Pasta italiano.jpg" alt="Pasta italiano" class="img_inside_border img_curve">
                </div>
                <div class="description_of_foods">
                    <h4>Pasta italiano</h4>
                    <p class="price_of_foods">TK 278</p>
                    <p class="detail_of_foods">
                        Prepared with tomato sauce, chicken, cheese and garlic sauce.
                    </p>
                    <br>
                    <a href="Order.html" class="button">Order Now</a>
                </div>
            </div>
            <div class="different_foods">
                <div class="image_of_foods">
                    <img src="../Image/Meat Lovers Pasta.jpg" alt="Meat Lovers Pasta" class="img_inside_border img_curve">
                </div>
                <div class="description_of_foods">
                    <h4>Meat Lovers Pasta</h4>
                    <p class="price_of_foods">TK 286</p>
                    <p class="detail_of_foods">
                        Prepared with tomato sauce, chicken, cheese, mushroom and garlic sauce.
                    </p>
                    <br>
                    <a href="Order.html" class="button">Order Now</a>
                </div>
            </div>
            <div class="image_on_same_border"></div>
        </div>
    </section>
    <!-- Food menu section ends here -->

    <!-- Social media section starts here -->
    <section class="social_media">
        <div class="boxes taking_text_in_center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/linkedin.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/pinterest.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Social media section ends here -->
<?php include('partials/footer.php'); ?>
