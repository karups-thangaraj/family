<?php

    if (isset($_SESSION["uid"])) {
            $msg = 'Alredy logged in';
            exit();
        }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Home - Karups</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
    .login-form {
        width: 340px;
        margin: 50px auto;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .input-group-addon .fa {
        font-size: 18px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }

    .bottom-action {
        font-size: 14px;
    }
    </style>
</head>


<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="#">myHOME</a>

            <!-- Rightside navbar Links: Set based on User signed-in or not-->
            <?php
            if (isset($_SESSION["uid"])) {    

            ?>
            <!-- Set rightside navbar links if no user signed-in -->
            <ul class="navbar-nav navbar-right">
                <li class="dropdown text-info"><a class="dropdown-toggle" data-toggle="dropdown">
                        <?php if ($isadmin==1) { ?> <i class="fa fa-usersecret"></i> <?php } ?> Welcome
                        <?php echo $uid; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"> <i class="fa fa-user-plus"></i> My Profile</a></li>
                        <li><a href="#"> <i class="fa fa-briefcase"></i> My Bookings</a></li>
                        <li><a href="./logout.php"> <i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>

            <?php } else { ?>
            <!-- Set rightside navbar links if user has signed-in -->
            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="./login.php"><i class="fa fa-sign-in"></i> Login</a>
                </li>
            </ul>
            <?php } ?>

        </div>
    </nav>

    <div class="container-fluid  p-3  bg-primary text-white text-center" style="margin-bottom:0">
        <h1>My Learning - Movie Reservation Sytem</h1>
        <p> Simple web application using PHP, MySQL, HTML, CSS, Bootstrap, Javascript & LAPM</p>
    </div>

    <div class="row">

        <div class="col-sm-2">
            <div class="row">
                <!-- to insert an image branding image -->
            </div>
            <div class="row">
                <nav class="navbar bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Movies</a>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">By Language</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">By Screen</a>
                                    </li>
                                </ul>
                            </nav>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Screens</a>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">By Language</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">By Movies</a>
                                    </li>
                                </ul>
                            </nav>
                        </li>
                  
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-8">


            <!--include specific code for your screen -->
            <div class="container-sm" style="Width:40%">

                <div class="login-form">
                    <form action="./index2.php" method="post">
                        <h2 class="text-center">Sign In</h2>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="fa fa-user"></span>
                                    </span>
                                </div>
                                <input type="text" name="uid" id="uid" class="form-control" placeholder="Username"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Log in</button>
                        </div>
                        <div class="bottom-action clearfix">
                            <label class="float-left form-check-label"><input type="checkbox" name="isadmin"> Login as
                                Admin</label>
                            <a href="#" class="float-right">Forgot Password?</a>
                        </div>
                    </form>
                    <p class="text-center small">Don't have an account! <a href="#">Sign up here</a>.</p>
                </div>

            </div>
        </div>






        <div class="container-fluid  p-3 my-3 bg-primary text-white text-center" style="margin-bottom:0">
            <h3>Developed using following technology stack:</h3>
            <p>PHP, MySQL, Apache, HTML5, CSS, Bootstrap, Javascript. </p>
            <p small> VS Code as IDE, GitHub as Source Code Library and free cloud server and mysql hosting at
                Infinityfree! :) </p>
        </div>


</body>

</html>