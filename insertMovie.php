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

    <title>Insert New Movie</title>
</head>

<body>

    <?php



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
        }else{
            echo "Error Inserting new member <BR>";
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }


  function uploadImage(){
    $target_dir = "./tmp/";    
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
}

function moveImageToDatabase($pname, $plang){

    $source_path = "./tmp/".$_FILES["fileToUpload"]["name"];
    $target_file = substr(str_replace(" ","",$pname),0,4) . substr($plang,0,4) . $_FILES["fileToUpload"]["name"];
    $target_path = "./database/images/". $target_file;

    $msg = 'No file: ' .$source_path;
    if (file_exists($source_path)) {
        $ok = rename($source_path, $target_path);
        $msg = 'Failed to rename???';
       if($ok)
       {
          return $target_file;
       }
    }
    echo $msg;
    return 0;
}

?>

</body>

</html>