<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redstore Homepage</title>
    <link rel= "stylesheet" href= "style.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet"> 
</head>
<body>

<div class="header">
    <div class="container">

        <div class="welcome">
        <?php echo "<h2>Welcome " . $_SESSION['username'] . "</h2>"; ?>
        </div>

        <div class="navbar">
            <div class="logo">
                <a href="homepage.php"><img src="images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contacts</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Give Your Workout<br>A New Style!</h1>
                <p>Success isn't always about greatness. It's about 
                consistency. Consistent<br>hard work gains success. Greatness
                will come.</p>
                <a href="products.php" class="btn">Explore Now &#8594; </a>
            </div>
            <div class="col-2">
               <img src="images/image1.png">
            </div>
        </div>
    </div>
</div>

<!-------------- featured categories -------------------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg">
                </div>
            </div>
        </div>
    </div>
<!-------------- featured products -------------------->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="products.php"><img src="images/product-1.jpg"></a> 
                <h4>Red Printed T-Shirt </h4>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-2.jpg"></a>
                <h4>Black Sneaker </h4>
                <p>$150.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-3.jpg"></a>
                <h4>Grey Sweatpant </h4>
                <p>$65.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-4.jpg"></a>
                <h4>Blue-Black T-Shirt </h4>
                <p>$45.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="products.php"><img src="images/product-5.jpg"></a>
                <h4>High Tops Sneaker</h4>
                <p>$160.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-6.jpg"></a>
                <h4>Black Puma Shirt</h4>
                <p>$75.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-7.jpg"></a>
                <h4>Socks</h4>
                <p>$10.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-8.jpg"></a>
                <h4>Black Fossil Watch </h4>
                <p>$100.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-9.jpg"></a>
                <h4>Black Roadster Watch </h4>
                <p>$90.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-10.jpg"></a>
                <h4>Black Sneaker </h4>
                <p>$120.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-11.jpg"></a>
                <h4>Grey Sneaker </h4>
                <p>$110.00</p>
            </div>
            <div class="col-4">
                <a href="products.php"><img src="images/product-12.jpg"></a>
                <h4>Black SweatPant </h4>
                <p>$85.00</p>
            </div>
        </div>

    </div>
    <!------------------ offer ---------------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Redstore</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 features a 39.9% larger
                    (than Mi Band 3) AMOLED color full-touch display with 
                    adjustable brightness, so everything is clear as can 
                    be.</small><br>
                    <a href="products.php" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!------------ testimonial ---------------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the 
                    industry's standard dummy text ever</p>
                    <img src="images/user-1.png">
                    <h3>Sean Parker</h3>
                </div>
                <div class="col-3">
                    <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the 
                    industry's standard dummy text ever</p>
                    <img src="images/user-2.png">
                    <h3>Mike Smith</h3>
                </div>
                <div class="col-3">
                    <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the 
                    industry's standard dummy text ever</p>
                    <img src="images/user-3.png">
                    <h3>Mabel Joe</h3>
                </div>
                
            </div>
        </div>
    </div>

    <!------------brands--------------->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>

    <!-------------- footer ----------------->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <a href="homepage.php"><img src="images/logo-white.png"></a>
                    <p>Our Purpose Is To Sustainably Make the Pleasure and 
                    Benefits of Sports Accessible to the Many. </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright"> Copyright 2021 - REDSTORE</p>
        </div>
    </div>
    <!------------ js for toggle menu ---------------->

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>
</html>