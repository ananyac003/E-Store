<?php
    require 'common.php';
    if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script type="text/javascript" src="bootstrap3/js/jquery-3.3.1.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script type="text/javascript" src="bootstrap3/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <title>E-Store</title>
    </head>
    <body>
        <?php
           require 'header.php'; 
        ?>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-6">
                    <img src="img/signup.png" class="img-responsive img-thumbnail" alt="Sign Up">
                </div>
                <div class="col-xs-4">
                    <h3>SIGN UP</h3>
                    <form method="POST" action="user_registration_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact" name="contact" maxlength="10" size="10" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary btn-md btn-pos">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="sfooter">
            <div class="row row-footer">
                <div class="col-xs-4">
                    <h3>Information</h3>
                </div>
                <div class="col-xs-4">
                    <h3>My Account</h3>
                </div>
                <div class="col-xs-4">
                    <h3>Contact Us</h3>
                </div>
                <div class="col-xs-4">
                    <a href="aboutUs.php">About Us</a>
                </div>
                <div class="col-xs-4">
                    <a href="#">Login</a>
                </div>
                <div class="col-xs-4">
                    Contact: +91-998-8667755
                </div>
                 <div class="col-xs-4">
                     <a href="contactUs.php">Contact Us</a>
                </div>
                <div class="col-xs-4">
                    <a href="signUp.php">Sign Up</a>
                </div>
            </div>
        </div>    
    </body>
</html>
