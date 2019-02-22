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
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">WHO WE ARE</div>
                        <div class="panel-body">
                            <img src="img/whoweare.jpg" class="img-responsive img-rounded" alt="who we are">
                            <p>E-store is an Indian electronic commerce company with headquarters in Kolkata.
                            E-Store was founded in 2010 by serial entrepreneur Neo Constantine, who believes
                            that high-quality technology doesn't need to cost a fortune. We create remarkable 
                            hardware, software, and internet services for and with the help of our customers.
                            We incorporate their feedback into our product range, which currently includes the
                            Mi A1, Mi Max 2, Mi Mix 2, Redmi Note 5, Redmi note 5 Pro, Mi 6 and others. With 
                            more than 81 million handsets sold in 2017, and products launched in Bangladesh,
                            UAE, Singapore, Malaysia, Saudi-Arabia, Sri-Lanka, Indonesia and Brazil, E-Store 
                            is expanding its footprint across the world to become a global brand.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Our History</div>
                        <div class="panel-body">
                            <p>
                            <h4>2010</h4>
                            Launched our first product Mi 1.<br>
                            <h4>2011</h4>
                            24X7 Customer Support.<br>
                            <h4>2012</h4>
                            Cash on Delivery.<br>
                            <h4>2013</h4>
                            10-Day Replacement Policy.<br>
                            <h4>2014</h4>
                            Same-day Guarantee.<br>
                            <h4>2015</h4>
                            Billion Dollar Funding.<br>
                            <h4>2016</h4>
                            Launched Experience Zones.<br>
                            <h4>2017</h4>
                            Sold more than 81 million handset across<br>
                            the globe in a single quarter.<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">OPPORTUNITIES</div>
                        <div class="panel-body">
                            <p><h4>Available roles</h4>
                            1. Jr/Sr Web Developer [Full-Time Role + also available as
                            a 6 Months Internship].<br><br>
                            2. Business Apprentice [6 Months Internship].<br><br>
                            3. Manager at Backend operations [Full-Time Role + also 
                                available as a 6 Months Internship].
                            </p>
                        </div>
                    </div>
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
