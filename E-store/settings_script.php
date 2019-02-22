<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
    }
    //$user_id = $_SESSION['id'];
    $opassword = $_POST['opassword'];
    $opassword = mysqli_real_escape_string($con, $opassword);
    $opassword = md5($opassword);
    
    $npassword = $_POST['npassword'];
    $npassword = mysqli_real_escape_string($con, $npassword);
    $npassword = md5($npassword);
    
    $rpassword = $_POST['rpassword'];
    $rpassword = mysqli_real_escape_string($con, $rpassword);
    $rpassword = md5($rpassword);
    $email = $_SESSION['email'];
    //$con = mysqli_connect("localhost","root","","estore") or die(mysqli_error($con));
    $select_query = "SELECT id, password FROM users WHERE email = '$email'" ;
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($select_query_result);
    $org_pass = $row['password'];

    if ($npassword != $rpassword) {
    header('location: settings.php?error=The two passwords don\'t match');
    } else {
    if ($opassword == $org_pass) {
        $query = "UPDATE users SET password = '".$npassword."' WHERE email = '".$_SESSION['email']."'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
    }
 ?>   