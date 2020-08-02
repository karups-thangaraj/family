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
    <style>
    .file {
        visibility: hidden;
        position: absolute;
    }
    </style>

    <title>Add New Movie</title>
</head>

<body>
    <!-- main section -->
    <div class="container-fluid  p-3 my-3 bg-primary text-white text-center">
        <h1>My Learning - Movie Reservation Sytem</h1>
        <p>Simple way to learn PHP, MySQL, HTML/CSS/Bootstrap</p>
        <h3> Add new movie details </h3>
    </div>

    <div class="container" style=" width:80% ">
        <div class="row justify-content-center">
            <div class="col">
                <form action="insertMovie.php" method="post" class="was-validated" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="font-weight-bold" for="mov_name">Movie Title:</label>
                        <input type="text" class="form-control" id="mov_name" placeholder="Enter Movie Title"
                            name="mov_name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="mov_cast">Movie Cast:</label>
                        <input type="text" class="form-control" id="mov_cast" placeholder="Enter Cast Details"
                            name="mov_cast" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="mov_direct">Movie Director:</label>
                        <input type="text" class="form-control" id="mov_direct" placeholder="Enter Director Name"
                            name="mov_direct" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="mov_lang">Movie Language:</label> <BR>
                        <label class="radio-inline"><input type="radio" name="mov_lang" value="English">English</label>
                        <label class="radio-inline"><input type="radio" name="mov_lang" value="Hindi">Hindi</label>
                        <label class="radio-inline"><input type="radio" name="mov_lang" value="Kannada">Kannada</label>
                        <label class="radio-inline"><input type="radio" name="mov_lang"
                                value="Malayalam">Malayalam</label>
                        <label class="radio-inline"><input type="radio" name="mov_lang" value="Tamil"
                                checked>Tamil</label>
                        <label class="radio-inline"><input type="radio" name="mov_lang" value="Telugu">Telegu</label>
                        <label class="radio-inline"><input type="radio" name="mov_lang" value="Other">Other</label>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="mov_rel_date">Release Date:</label>
                        <input type="date" class="form-control" placeholder="Select Release Date" id="mov_rel_date"
                            name="mov_rel_date" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="font-weight-bold" for="mov_short_desc">Movie Short Description:</label>
                    <textarea rows="3" class="form-control-file" id="mov_short_desc" name="mov_short_desc"
                        required></textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="fileToUpload">Movie Image:</label>
                    <input type="file" class="form-control-file" id="fileToUpload"
                        accept="image/jpg, image/jpeg, image/png, image/gif" name="fileToUpload" required />
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    <div class="ml-2">
                        <img src="./tmp/80x80.png" id="preview" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>

        <script>
        // Preview selected image
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);

        });
        </script>
        <div class="row justify-content-center ">
            <input class="form-group bg-primary text-white" type="submit" name="submit" value="Add Movie" />
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