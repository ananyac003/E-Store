<?php
    require 'common.php';
    $con = mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,$email);
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con,$password);
    $password = md5($password);
    $select_query = "SELECT id, email FROM users WHERE email ='$email' AND password ='$password'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($select_query_result);
    if($total_rows_fetched == 0)
    {
        //header('location:index.php');
        echo '<script>alert("User does not exists! Please Sign-Up");
                window.location.replace("http://localhost/E-store/index.php");</script>';
    }else{
        $row = mysqli_fetch_array($select_query_result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    }
?>