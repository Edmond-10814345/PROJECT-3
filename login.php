<?php 

include 'config.php';

error_reporting(0);

session_start();



if (isset($_SESSION['username'])) {
    header("Location: homepage.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: homepage.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Redstore</title>
    <link rel= "stylesheet" href= "style.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="navbar">
        <div class="logo">
        <a href="index.php"><img src="images/logo.png" width="125px"></a>
        </div>
    </div>
</div>

<!------------------------ account page ----------------------->

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.png" width="100%">
            </div>

            <div class="col-2">
                <div class="form-container">
                    <p>Login</p>

                    <form action="" method="POST">
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                        <button type="submit" name="submit" class="btn">Login</button>
                        <a href="account.php">Not a Member? Register</a>
                    </form>

                </div>
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
                    <a href="index.php"><img src="images/logo-white.png"></a>
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