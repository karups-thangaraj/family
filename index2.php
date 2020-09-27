<?php
    
    //Test Sessions variable with hardcoding
   // $_SESSION["uid"]="Karups";
   // $_SESSION["pwd"]="1234";


   if (isset($_SESSION["uid"])) {    
        echo "I am in Index2";
       $uid = $_SESSION["uid"];  
       echo $uid;  
   }
   $msg = '';   
   
   if (isset($_POST["login"]) && !empty($_POST["uid"]) 
      && !empty($_POST["pwd"])) {
       
      if ($_POST["uid"] == "karups" && 
         $_POST["pwd"] == "1234") {
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['uid'] = $_POST["uid"];
         $_SESSION["pwd"] = $_POST["pwd"];
         $uid = $_SESSION['uid'];
         $pwd = $_SESSION['pwd'];
         
      }else {
         echo '<script>alert("Invalid Username or Password. Try again")</script>';
      }
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
                <li class="dropdown text-info"><a class="dropdown-toggle" data-toggle="dropdown"> Welcome
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

    <div class="container" style="margin-top:30px">

        <div class="card-deck">
            <div class="card bg-primary" style="width:200px">
                <img class="card-img-top" src="./img/profile.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">My Profile</h4>
                    <p class="card-text">Use this option to create/update your profile(WIP)</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-warning">Click here</a>
                </div>
            </div>

            <div class="card bg-warning" style="width:200px">
                <img class="card-img-top" src="./img/movies.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Movies</h4>
                    <p class="card-text">Use this option to view movies showing currently</p>
                </div>
                <div class="card-footer">
                    <a href="./viewMovies.php" class="btn btn-primary">Click here</a>
                </div>
            </div>

            <div class="card bg-primary" style="width:200px">
                <img class="card-img-top" src="./img/family.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">User Profiles</h4>
                    <p class="card-text">Use this option to view list of all users</p>
                </div>
                <div class="card-footer">
                    <a href="./viewprofile.php" class="btn btn-warning">Click here</a>
                </div>

            </div>

            <div class="card bg-warning" style="width:200px">
                <img class="card-img-top" src="./img/booking.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Bookings</h4>
                    <p class="card-text">Use this option to view your history of bookings(WIP)</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Click here</a>
                </div>
            </div>

        </div> <BR>


        <div class="container-fluid  p-3 my-3 bg-primary text-white text-center" style="margin-bottom:0">
            <h3>Developed using following technology stack:</h3>
            <p>PHP, MySQL, Apache, HTML5, CSS, Bootstrap, Javascript. </p>
            <p small> VS Code as IDE, GitHub as Source Code Library and free cloud server and mysql hosting at
                Infinityfree! :) </p>
        </div>


</body>

</html>