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

    <title>Insert Booking and Tickets</title>
</head>

<body>

    <?php

    echo "entering insertBooking <BR>";

    $ticketCounts = $_POST['ticketCounts'];

    echo "Number of tickets $ticketCounts <BR>";
    
    $tickets = array(array());
    for($i=1; $i<=$ticketCounts; $i++){
            echo "HTML POST".$_POST['age'.$i]."<BR>";   
            $tickets[$i]['name']=$_POST['name'.$i];
            $tickets[$i]['age']=$_POST['age'.$i];
            $tickets[$i]['gender']=$_POST['gender'.$i];
            echo $i. " gender : ".$tickets[$i]['gender']."<BR>";
            echo $i. " Name : ".$tickets[$i]['name']."<BR>";
    }

    /*
    //Read HTML FORM submitted values using POST Method
    $iname = str_replace("'", "\'", $_POST['mov_name']);
    $icast = str_replace("'", "\'", $_POST['mov_cast']);
    $idirect = str_replace("'", "\'", $_POST['mov_direct']);
    $ilang = $_POST['mov_lang'];
    $ireldate = $_POST['mov_rel_date'];
    $iimg = basename($_FILES["fileToUpload"]["name"]);
    $idesc = str_replace("'", "\'", $_POST['mov_short_desc']);

    uploadImage(); // Upload the image to temporary folder

    $ifn = moveImageToDatabase($iname,$ilang); // Move from temp to target folder

    include './database/config/config.php';
    if ($connection == "local"){
        $t_movies = "Movies";
    }else {
        $t_movies = "$database.Movies";
    }

    try { 
        $db = new PDO("mysql:host=$host",$user,$password,$options);
        echo "Database connected successfully <BR>";

        $sql_insert = "INSERT INTO $t_movies (movie_name, movie_cast, movie_director, movie_img_fn, movie_language, 
            movie_rel_date, movie_short_desc)  VALUES ('$iname', '$icast' , '$idirect','$ifn', '$ilang', 
            date('$ireldate'),'$idesc' )";
        //echo "SQL Statement $sql_insert";
        $stmt = $db->prepare($sql_insert);
        $rows = $stmt->execute(array());
        //echo "Rows  $rows <BR>";

        If ($rows>0){   ?>

    <!-- main section -->
    <div class="container-fluid  p-3 my-3 bg-primary text-white text-center">
        <h1>My Learning - Movie Reservation Sytem</h1>
        <p> Simple web application using PHP, MySQL, HTML, CSS, Bootstrap, Javascript & LAPM</p>
        <h3> Following Movie details added successfully </h3>
    </div>

    <div class="container">

        <div class="card-group">
            <div class="card bg-primary" style="width:200px">

                <div class="card-body">
                    <h3 class="card-title"><?php echo $iname,"(",$ilang,")"; ?></h3>
                    <h4 class="card-text">Cast: <?php echo $$icast; ?></h4>
                    <h5 class="card-text">Directed by: <?php echo $idirect; ?></h5>
                    <h5 class="card-text">Release Date: <?php echo $ireldate; ?></h5>
                    <p class="card-text">Summary: <?php echo $idesc; ?></p>
                </div>
            </div>

            <div class="card bg-warning" style="width:200px">
                <img class="card-img-top" src="./database/images/<?php echo $ifn; ?>" alt="Card image"
                    style="width:100%">
                <div class="card-footer">
                    <h4 class="card-text">Language: <?php echo $ilang; ?></h4>
                </div>
            </div>
        </div>
    </div> <BR>
    */
    ?>
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
                <a href="./addMovies.php" class="btn btn-primary">Add New Movie </a>
            </div>
        </div>

        <?php
   /*     }else{
            echo "Error Inserting new member <BR>";
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }


  */

?>

</body>

</html>