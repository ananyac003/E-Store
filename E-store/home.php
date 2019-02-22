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
        include 'header.php';
        include 'check_if_added.php';
        ?>
        <div class="container-fluid">
            <div class="row row-style">
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mi A1</div>
                        <div class="panel-body">
                            <img src="img/mia1.jpg" class="img-responsive img-rounded" alt="miA1">
                            <p>13.9cm (5.5) FHD display.<br>
                               2x Optical zoom <br>
                               Snapdragon 625 processor,max 2.0GHz. 14nm FinFET.<br>
                               4GB RAM.<br>
                               Rs. 13999
                            </p>
                                 <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Redmi Note 5 Pro</div>
                            <div class="panel-body">
                                <img src="img/rn5p.jpg" class="img-responsive img-rounded" alt="redmi note5 pro">
                                <p>15.2cm (5.99) FHD+ 18:9 Full screen display.<br>
                                20MP front camera. Soft selfie light<br>
                                Snapdragon 636. 14nm octa-core processor<br>
                                6GB RAM.<br>
                                Rs. 16999
                                </p>
                                   <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mi Max 2</div>
                            <div class="panel-body">
                                <img src="img/max2.jpg" class="img-responsive img-rounded" alt="mi max 2">
                                <p>16.4 cm (6.44) Immersive display<br>
                                5300mAh High-capacity battery <br>
                                Snapdragon 625 processor,max 2.0GHz. 14nm FinFET.<br>
                                Large 1.25μm pixels Sony IMX386 sensor. 4GB/64GB.<br>
                                Rs. 15999
                                </p>
                                   <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Redmi Note 5</div>
                            <div class="panel-body">
                                <img src="img/rn5.jpg" class="img-responsive img-rounded" alt="redmi note 5">
                                <p>18:9 Full screen display, with rounded corners.<br>
                                4000mAh, 3GB/32GB <br>
                                Snapdragon 625 octa-core processor.<br>
                                Large 1.25μm pixel stunning low light photography.<br>
                                Rs. 9999
                                </p>
                                   <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mi Mix 2</div>
                            <div class="panel-body">
                                <img src="img/mix2.jpg" class="img-responsive img-rounded" alt="mi mix 2">
                                <p>15.2cm (5.99)Full screen large display, 18:9 aspect ratio<br>
                                Large 6GB RAM Dual channel LPDDR4x <br>
                                Snapdragon 835, Qualcomm processor<br>
                                Large 128GB storage UFS 2.1<br>
                                Rs. 32999
                                </p>
                                   <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mi 6</div>
                            <div class="panel-body">
                                <img src="img/mi6.jpg" class="img-responsive img-rounded" alt="mi 6">
                                <p>5.15" display with reduced glare, Reduces harmful blue rays<br>
                                3350mAh(typ) Full-day battery <br>
                                Snapdragon 835, 10nm processor technology.<br>
                                12MP + 12MP, Dual camera with optical zoom.<br>
                                Rs. 22999
                                </p>
                                   <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'footer.php'; 
        ?>
    </body>
</html>