<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Redstore</title>
    <link rel= "stylesheet" href= "style.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
</head>
<body>

<div class="container">
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
            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a> 
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
</div>

    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by price</option>
                <option>Sort by popularity</option>
                <option>Sort by rating</option>
                <option>Sort by sale</option>
            </select>
        </div>


        <div class="row">
            <div class="col-4">
                <a href="product-details.php"><img src="images/product-1.jpg"></a>
                <a href="product-details.php"><h4>Red Printed T-Shirt </h4></a>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-2.jpg">
                <h4>Black Sneaker </h4>
                <p>$150.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-3.jpg">
                <h4>Grey Sweatpant </h4>
                <p>$65.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-4.jpg">
                <h4>Blue-Black T-Shirt </h4>
                <p>$45.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg">
                <h4>High Tops Sneaker </h4>
                <p>$160.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-6.jpg">
                <h4>Black Puma Shirt</h4>
                <p>$75.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-7.jpg">
                <h4>Socks</h4>
                <p>$10.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-8.jpg">
                <h4>Black Fossil Watch </h4>
                <p>$100.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-9.jpg">
                <h4>Black Roadster Watch </h4>
                <p>$90.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>Black Sneaker </h4>
                <p>$120.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg">
                <h4>Grey Sneaker </h4>
                <p>$110.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg">
                <h4>Black SweatPant </h4>
                <p>$85.00</p>
            </div>
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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