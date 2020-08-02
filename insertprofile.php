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

    <title>Insert Profile</title>
    <link rel="stylesheet" href="css/indexstyles.css">
</head>

<body>

    <?php

    include './database/config/config.php';

    if ($connection == "local"){
        $t_members = "members";
    }else {
        $t_members = "$database.members";
    }

    $iname = $_POST['fullname'];
    $igender = $_POST['gender'];
    $idob = $_POST['dob'];
    $irole = $_POST['role'];

    //echo "You entered $iname , $igender , $idob, $irole";

    try {
        $db = new PDO("mysql:host=$host",$user,$password,$options);
    
        $sql_insert = "INSERT INTO $t_members (mem_name, mem_gender, mem_dob, mem_role) 
            VALUES ('$iname', '$igender' , date('$idob'),'$irole' )";
        $stmt = $db->prepare($sql_insert);
        $rows = $stmt->execute();
        If ($rows>0){   ?>

    <!-- main section -->
    <div class="container-fluid p-3 my-3 bg-primary text-white text-center">
        <h1>My Learning - Movie Reservation Sytem</h1>
        <p> Simple web application using PHP, MySQL, HTML, CSS, Bootstrap, Javascript & LAPM</p>
        <h3> New user profile added successfully </h3>
    </div>

    <div class="table-responsive mx-auto" style="width:70%    " >
        <BR>
        <table class="table table-bordered table-hover table-stribed">
            <thead class="thead-dark text-center">
                <tr>
                    <th>Name</th>
                    <td> <?php echo $iname ?>
                </tr>
                <tr>
                    <th>Gender </th>
                    <td> <?php echo $igender ?>
                </tr>
                <tr>
                    <th>DoB</th>
                    <td> <?php echo $idob ?>
                </tr>
                <tr>
                    <th>Role</th>
                    <td> <?php echo $irole ?>
                </tr>
            </thead>
        </table>

    </div>
    <!-- Common footer for all pages   -->
    <div class="card-group">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <a href="./viewprofile.php" class="btn btn-primary">View all profiles</a>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <a href="./index2.php" class="btn btn-warning">Return to Home Page </a>
            </div>
        </div>
        <div class="card bg-primary">
            <div class="card-body text-center">
                <a href="./addprofile.php" class="btn btn-primary">Add user profile </a>
            </div>
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


?>

</body>

</html>