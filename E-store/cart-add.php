<?php
    require 'common.php';
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $con = mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));
    $insert_query = "INSERT INTO users_items(user_id, item_id, status)
          VALUES('$user_id', '$item_id', 'Added to cart')";
    $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    header('location: home.php');
    }
?>