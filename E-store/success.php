<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
    }
    $user_id = $_SESSION['user_id'];
    $item_ids_string = $_GET['itemsid'];

    //We will change the status of the items purchased by the user to 'Confirmed'
    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
    mysqli_query($con, $query) or die($mysqli_error($con));
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
         <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="home.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <!-- <div class="container">
            <div class="row row-style">
                <div class="col-xs-offset-3 col-xs-6 border">
                    <pre style="overflow: hidden; background-color:white; border-style: none">
    Thank you for ordering from E-Store. The order shall be delivered<br>
                                to you shortly.

    -----------------------------------------------------------------
                    
                  Order some more electronic items from <a href="home.php" style="text-decoration: default; color: blue">here</a>                        
                        </pre>
                </div>  
            </div>
        </div>  -->
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
