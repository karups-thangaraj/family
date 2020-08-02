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

    <title>View Family Table</title>
</head>

<body>
    <!-- main section -->
    <div class="container-fluid  p-3 my-3 bg-primary text-white text-center">
        <h1>My Learning - Movie Reservation Sytem</h1>
        <p> Simple web application using PHP, MySQL, HTML, CSS, Bootstrap, Javascript & LAPM</p>
        <h3>View all user profiles</h1>
    </div>

    <!--core logic -->
    <?php

    include './database/config/config.php';
    if ($connection == "local"){
        $t_family = "members";
    }else {
        $t_family = "$database.members";
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


    <div classs="container-fluid">
        <div class="row">
            <div class="col">
                <h3>List of registered user profiles</h3>
            </div>

        </div>
        <div class="table-responsive mx-auto" style="width:80%">
            <BR>
            <table class="table table-bordered table-hover table-stribed">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Gender </th>
                        <th>DoB</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
        
                    try {
                        $i=1;
                        foreach($db->query("SELECT mem_name, mem_gender, mem_dob, mem_role FROM $t_family") as $row) {  ?>

                    <tr>
                        <td> <?php echo $i; ?> </td>
                        <td> <?php echo  $row['mem_name'];  ?> </td>
                        <td> <?php echo  $row['mem_gender'];  ?> </td>
                        <td> <?php echo $row['mem_dob'];  ?> </td>
                        <td> <?php echo $row['mem_role'];  ?> </td>
                    </tr>

                    <?php 
                            $i++;
                            }  
                        } catch (PDOException $e) {
                            print "Error!: " . $e->getMessage() . "<br/>";
                            die();
                        }?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Common footer for all pages   -->
    <div class="card-group">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <a href="./viewMovies.php" class="btn btn-primary">View Movies Showing Now</a>
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

    </div>

</body>

</html>