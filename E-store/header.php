


<div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">E-store</a>
                </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class=" nav navbar-nav navbar-right">
                            <?php
                                if(isset($_SESSION['email'])) {
                            ?>
                            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"> Cart</span></a></li>
                            <li><a href="settings.php"><span class="glyphicon glyphicon-wrench"> Settings</span></a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-off"> Log-Out</span></a></li>
                            <?php
                                }else{
                            ?>
                            <li><a href="signUp.php"><span class="glyphicon glyphicon-user"> Sign Up</span></a></li>
                            <li><a href="#ck_modal" data-toggle="modal" data-target="#ck_modal"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
                            <li><a href="aboutUs.php"><span class="glyphicon glyphicon-tasks"> About Us</span></a></li>
                            <li><a href="contactUs.php"><span class="glyphicon glyphicon-phone"> Contact Us</span></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
            </div>
        </div>
        <div>
            <div class="modal fade" id="ck_modal" role="dialog">
                <div class="modal-dialog">
    
                    <!-- Modal content-->
                    <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">LOGIN</h4>
                            </div>
                            <div class="modal-body">
                                <p>Don't have an account?<a href="signUp.php" style="color: blue">Register</a></p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" > <!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$>"-->
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name ="password" pattern=".{6,}">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md">Login</button><br><br>
                                    <a href="#" style="color:blue">Forget Password?</a>
                                </form>
                            </div>        
                    </div>
      
                </div>
            </div>
        </div>