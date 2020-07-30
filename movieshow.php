<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Movies & Screens </title>
</head>

<body>

    <!-- Top banner -->
    <div class="container-fluid  p-3 my-3 bg-primary text-white text-center">
        <h1>iMovies Reservation Sytem</h1>
        <p>VIT - DBMS Project - Fall Semester 2020-21 - by Goku, Rahul & xxxx</p>
    </div>

    <?php

    # Get the information from the URL
    $movie_id = $_GET['p_movie_id'];


    include './database/config/config.php';
    if ($connection == "local"){
        $t_Movies = "Movies";
    }else {
        $t_Movies = "$database.Movies";  
    }

    try 
    { 
        $db = new PDO("mysql:host=$host",$user,$password,$options);
    } 
    catch(PDOException $ex) 
    { 
        die("Failed to connect to the database: " . $ex->getMessage()); 
    } 
    $sqlstmt = $db->prepare("SELECT movie_id, movie_name, movie_cast, movie_director, movie_img_fn, 
    movie_language, movie_rel_date, movie_short_desc FROM $t_Movies where movie_id=$movie_id");
    $sqlstmt->execute();
    $row=$sqlstmt->fetch();

    ?>


    <div class="container">

        <div class="card-group">
            <div class="card bg-primary" style="width:200px">

                <div class="card-body">
                    <h3 class="card-title"><?php echo $row['movie_name'],"(",$row['movie_language'],")"; ?></h3>
                    <h4 class="card-text">Cast: <?php echo $row['movie_cast']; ?></h4>
                    <h5 class="card-text">Directed by: <?php echo $row['movie_director']; ?></h5>
                    <h5 class="card-text">Release Date: <?php echo $row['movie_rel_date']; ?></h5>
                    <p class="card-text">Summary: <?php echo $row['movie_short_desc']; ?></p>

                </div>
            </div>

            <div class="card bg-warning" style="width:200px">
                <img class="card-img-top" src="./database/images/<?php echo $row['movie_img_fn']; ?>" alt="Card image"
                    style="width:100%">
                <div class="card-footer">
                    <h4 class="card-text">Language: <?php echo $row['movie_language']; ?></h4>
                </div>
            </div>
        </div>
    </div> <BR>


    

    <!-- Common footer style -->
    <div class="card-group">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <a href="./viewMovies.php" class="btn btn-primary">Back to View Movies </a>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <a href="./index2.php" class="btn btn-warning">Return to Home Page </a>
            </div>
        </div>
        <div class="card bg-primary">
            <div class="card-body text-center">
                <a href="#" class="btn btn-primary">Return to Home Page </a>
            </div>
        </div>
    </div>
</body>

</html>