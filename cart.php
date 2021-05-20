<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Redstore</title>
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


<!------------------------ cart items details---------------- -->

<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/buy-1.jpg">
                    <div>
                        <p>Red Printed T-Shirt</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="product-details.php">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/buy-2.jpg">
                    <div>
                        <p>Red Printed T-Shirt</p>
                        <small>Price: $150.00</small>
                        <br>
                        <a href="products.php">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$150.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/buy-3.jpg">
                    <div>
                        <p>Red Printed T-Shirt</p>
                        <small>Price: $65.00</small>
                        <br>
                        <a href="products.php">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$65.00</td>
        </tr>
    </table>

    <div class="total-price">

        <table>
            <tr>
                <td>Subtotal</td>
                <td>$265.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$35.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$295.00</td>
            </tr>
        </table>
    </div>
    <br>
    
    <div class="cart-btn">
    <a href="" class="btn">Checkout</a>
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