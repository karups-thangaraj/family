<!DOCTYPE html>
<html lang='en'>

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

    <title>Add Family Member</title>
</head>

<body>
    <!-- main section -->
    <div class="container-fluid  p-3 my-3 bg-primary text-white text-center">
        <h1>My Learning - Movie Reservation Sytem</h1>
        <p> Simple web application using PHP, MySQL, HTML, CSS, Bootstrap, Javascript & LAPM</p>
        <h3> Add new user profile </h3>
    </div>

    <div class="container" style=" width:60% ">
        <div class="row">
            <div class="col">
                <form action="insertprofile.php" method="post" class="was-validated">
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Enter Member Name"
                            name="fullname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender: </label><BR>
                        <label class="radio-inline"><input type="radio" name="gender" value="M" checked>Male</label>
                        <label class="radio-inline"><input type="radio" name="gender" value="F">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="dob">DOB:</label>
                        <input type="date" class="form-control" placeholder="Select DoB" id="dob" name="dob" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="role">Role: </label><BR>
                        <label class="radio-inline"><input type="radio" name="role" value="Customer" checked>Customer</label>
                        <label class="radio-inline"><input type="radio" name="role" value="Admin" >Admin</label>
                        <label class="radio-inline"><input type="radio" name="role" value="Owner">Owner</label>
                    </div>
            </div>

        </div>

        <div class="row justify-content-center ">
            <input class="form-group bg-primary text-white" type="submit" name="submit" value="Add User Profile" />
            </form>
        </div>
    </div><BR>

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
                <a href="./viewprofile.php" class="btn btn-primary">View user profiles</a>
            </div>
        </div>
    </div>


    </form>
    </header>
</body>

</html>