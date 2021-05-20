<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details - Redstore</title>
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

<!---------------- single product details ------------------->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gallery-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-4.jpg" width="100%" class="small-img">
                    </div>
                </div>



            </div>
            <div class="col-2">
                <p>Home / T-Shirt</p>
                <h1>Red Printed T-Shirt by HRX</h1>
                <h4>$50.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="cart.php" class="btn">Add to Cart</a>

                <h3>Product Details</h3>
                <br>
                <p>Give your summer wardrobe a style upgrade with the HRX
                Men's Active T-shirt. Team it with a pair of shorts for 
                your morning workout or a denims for an evening out with 
                the guys.</p>
            </div>
        </div>
    </div>

<!---------------------- title ----------------------------->

<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <a href="products.php"><p>View More</p></a>
    </div>
</div>

<!---------------------- products ----------------------------->

    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg">
                <h4>Red Printed T-Shirt </h4>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>Black Sneaker </h4>
                <p>$150.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg">
                <h4>Grey Sweatpant </h4>
                <p>$65.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg">
                <h4>Blue-Black T-Shirt </h4>
                <p>$45.00</p>
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

    <!------------ js for product gallery ---------------->

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }


    </script>

</body>
</html>