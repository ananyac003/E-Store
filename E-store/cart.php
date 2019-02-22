<?php
    require 'common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
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
            $user_id = $_SESSION['user_id'];
            $sum = 0;
            $id = 0;
            $con = mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));
            $select_query = "SELECT items.price AS Price, items.id AS id, items.name AS Name FROM users_items JOIN
                    items ON users_items.item_id = items.id WHERE users_items.user_id = '$user_id' and status = 'Added to cart'";
            $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
            $total_rows_fetched = mysqli_num_rows($select_query_result);
            if($total_rows_fetched == 0){
        ?>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-offset-3 col-xs-6 border">
                    <h3>ADD  item to the cart first!</h3>
                </div>
            </div>
        </div>
        <?php
            }else{
                ?>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-offset-3 col-xs-6 border">
                    <div class="table-responsive">
                        <table class="table table-stripped table-bordered">
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($select_query_result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"].", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' style='color:red'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td><b>Total</b></td><td><b>Rs " . $sum . "</b></td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php }  require 'footer.php'; 
        ?>
    </body>
</html>
