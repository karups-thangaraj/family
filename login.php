<?php

    if (isset($_SESSION["uid"])) {
            $msg = 'Alredy logged in';
            exit();
        }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Screen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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

    <BR><BR>
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
                    <button type="submit" name="login"  class="btn btn-primary btn-block">Log in</button>
                </div>
                <div class="bottom-action clearfix">
                    <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="float-right">Forgot Password?</a>
                </div>
            </form>
            <p class="text-center small">Don't have an account! <a href="#">Sign up here</a>.</p>
        </div>

    </div>


</body>

</html>