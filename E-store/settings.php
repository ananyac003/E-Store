<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
                <div class="col-xs-offset-3 col-xs-6">
                    <h3>Change Password</h3>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="opassword" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="npassword" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="rpassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
