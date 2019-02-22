<?php
    require 'common.php';
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
                <div class="col-xs-9">
                    <h3>LIVE SUPPORT</h3>
                    <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                    <p>At E-Store we are dedicated to provide you with the best customer experience.
                    We have a team of experienced, dedicated and ready-to-help support staffs who are
                    available 24*7 everyday. For any issue regarding our services, kindly give your 
                    correct details below and we will get back to you shortly. We are happy to help :)
                    </p>
                </div>
                <div class="col-xs-3">
                    <img src="img/Technical_Support.jpg" class="img-responsive img-thumbnail" alt="tech support">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-7">
                    <h3>CONTACT US</h3>
                    <form>
                        <div class="form-group">
                        <lable for="">Name:</lable>
                        <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                        <lable for="">Email:</lable>
                        <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable for="">Message:</lable>
                        <textarea rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-5">
                    <h3>Company Information</h3>
                    <p>
                        P-786 Basilisk Park<br>
                        Salt Lake City<br>
                        Kolkata - 700311<br>
                        West Bengal<br>
                        Phone: (00)222 333 444<br>
                        Fax: (111) 222 33 44 5<br>
                        E-mail: info@estore.com
                    <h4>Follow On:</h4>
                    Facebook, Twitter
                    </p>
                </div>
            </div>
        </div>
        <div class="footer">
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
