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


    <div class="container">

        <div class="card-deck">
            <div class="card bg-primary" style="width:200px">
                <img class="card-img-top" src="./database/images/1dangal.jpeg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Dangal</h4>
                    <p class="card-text">Amir Khan. Short description of Dangal</p>
                    <a href="#" class="btn btn-warning">See Details</a>
                </div>
            </div>

            <div class="card bg-warning" style="width:200px">
                <img class="card-img-top" src="./database/images/2thuppaki.jpeg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Thuppakki</h4>
                    <p class="card-text">Vijay, Murugadoss. Short description of Thuppakki</p>
                    <a href="#" class="btn btn-primary">See Details</a>
                </div>
            </div>

            <div class="card bg-primary" style="width:200px">
                <img class="card-img-top" src="./database/images/3drishyam.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Drishyam</h4>
                    <p class="card-text">Mohanlal, Meena. Short description of Drishyam</p>
                    <a href="#" class="btn btn-warning">See Details</a>
                </div>
            </div>

            <div class="card bg-warning" style="width:200px">
                <img class="card-img-top" src="./database/images/4bahubali.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Bahubali</h4>
                    <p class="card-text">Prabhas, Rana. Short description of Thuppakki</p>
                    <a href="#" class="btn btn-primary">See Details</a>
                </div>
            </div>
        </div>
    </div> <BR>


        <div classs="container">
            <h2>List of Movies running now</h2>
            <div class="table-responsive">
                <BR>
                <table class="table table-bordered table-hover table-stribed">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>S.No</th>
                            <th>Movie Title</th>
                            <th>Cast </th>
                            <th>Language</th>
                            <th>Pre-image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td>Dangal</td>
                            <td>Amir Khan</td>
                            <td>Hindi</td>
                            <td> <img src="./database/images/1dangal.jpeg" class="img-thumbnail" alt="Dangal(Hindi)"
                                    width="100" height="78"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td>Thuppakki</td>
                            <td>Vijay</td>
                            <td>Tamil</td>
                            <td> <img src="./database/images/2thuppaki.jpeg" class="img-thumbnail"
                                    alt="Thuppakki (Tamil)" width="100" height="78">
                            </td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td>Drishyam</td>
                            <td>Mohanlal</td>
                            <td>Malayalam</td>
                            <td> <img src="./database/images/3drishyam.jpg" class="img-thumbnail"
                                    alt="Drishyam (Malayalam)" width="100" height="78"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td>Bahubali</td>
                            <td>Prabhas</td>
                            <td>Telugu</td>
                            <td> <img src="./database/images/4bahubali.jpg" class="img-thumbnail"
                                    alt="Bahubali (Telugu)" width="100" height="78">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Or let Bootstrap automatically handle the layout -->
        <div class="row border bg-white text-dark text-center">
            <div class="col "><a href="viewfamily.php" target="_self">View Family</a></div>
            <div class="col "><a href="index2.php" target="_self">Back to Home Page</a></div>
            <div class="col "><a href="addfamilymember.php" target="_self">Add Family Member</a></div>
        </div>
</body>

</html>