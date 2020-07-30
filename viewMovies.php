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

    <title>Welcome to my new Home Page - Karups</title>
</head>

<body>

    <div class="container-fluid  p-3 my-3 bg-primary text-white text-center">
        <h1>iMovies Reservation Sytem</h1>
        <p>VIT - DBMS Project - Fall Semester 2020-21 - by Goku, Rahul & xxxx</p>
    </div>

    <?php

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
    ?>

    <div class="container">

        <?php 
        $number_of_cards=0;         //Track to display 3 cards per row
        $row_count=$db->query("SELECT count(*) from $t_Movies")->fetchColumn();
        $number_of_rows=0;

        try {
            foreach($db->query("SELECT movie_id, movie_name, movie_cast, movie_director, movie_img_fn, 
            movie_language, movie_rel_date, movie_short_desc FROM $t_Movies") as $row) {  
                
                if($number_of_cards==0){     //3 cards per row  ?>
        <div class="card-deck">
            <?php }

                if(($row['movie_id'] % 2) == 1){
                    $bg = "bg-primary";
                    $btn = "btn-warning";
                }else{
                    $bg = "bg-warning";
                    $btn = "btn-primary";
                } ?>

            <div class="card <?php echo $bg; ?>" style="max-width:18rem">
                <img class="card-img-top" src="./database/images/<?php echo $row['movie_img_fn']; ?>" alt="Card image"
                    style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"> <?php echo $row['movie_name'], "(", $row['movie_language'], ")"; ?></h4>
                    <p class="card-text"> <?php echo $row['movie_cast']; ?> </p>
                    <p class="card-text small"> <?php echo $row['movie_short_desc']; ?> </p>

                </div>
                <div class="card-footer">
                    <a href="#" class="btn <?php echo $btn; ?>">More Details</a>
                </div>
            </div>

            <?php 
                $number_of_cards++;
                $number_of_rows++;
                if(($number_of_cards==3) or ($number_of_rows==$row_count)){  ?>
        </div> <BR>
        <?php 
                $number_of_cards=0;
                }
            }
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }  ?>

    </div>


    <div class="card-group">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <a href="./viewfamily.php" class="btn btn-primary">View Family Table </a>
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