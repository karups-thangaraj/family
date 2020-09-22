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

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
    .file {
        visibility: hidden;
        position: absolute;
    }
    </style>

    <title>Book Movie Ticket</title>
</head>

<body>
    <!-- main section -->
    <div class="container-fluid  p-3 my-3 bg-primary text-white text-center">
        <h1>My Learning - Movie Reservation Sytem</h1>
        <p>Simple way to learn PHP, MySQL, HTML/CSS/Bootstrap</p>
        <h3> Add new movie details </h3>
    </div>

    <div class="container" style=" width:80% ">
        <form action="insertBooking.php" method="post" class="was-validated" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="form-group">
                        <label for="book_title">Select Movie:</label>
                        <select class="form-control" id="book_title">
                            <option>Thuppakki(Tamil)</option>
                            <option>Dangal(Hindi)</option>
                            <option>K.G.F(Kannada)</option>
                            <option>Bahubali(Telegu)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="book_screen">Select Screen:</label>
                        <select class="form-control" id="book_screen">
                            <option>Screen 1</option>
                            <option>Screen 2</option>
                            <option>Screen 3</option>
                            <option>Screen 4</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="font-weight-bold" for="book_date">Booking Date:</label>
                        <input type="date" class="form-control" placeholder="Select Booking Date" id="book_date"
                            name="book_date" required>
                    </div>
                    <div class="form-group">
                        <label for="book_slot">Select Slot:</label>
                        <select class="form-control" id="book_slot">
                            <option>10:30 am</option>
                            <option>02:00 pm</option>
                            <option>06:00 pm</option>
                            <option>10:00 pm</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="container">
                <table id="myTable" class=" table order-list">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Gender</td>
                            <td>Age</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="name1" class="form-control" />
                            </td>
                            <td class="col-sm-4">
                                <select class="form-control" id="gender1" name="gender1">
                                    <option value="M">MALE</option>
                                    <option value="F">FEMALE</option>
                                    <option value="T">TRANSGENDER</option>
                                </select>
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="age1" class="form-control" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>

                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: left;">
                                <input type="button" class="btn bg-success btn-block " id="addrow" value="Add Entry" />
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="row justify-content-center ">
                <input class="form-group bg-primary text-white" type="submit" name="submit" value="Book Ticket" />

            </div>
            <input type="hidden" class="form-control" name="ticketCounts" id="ticketCounts">
        </form>
        <!-- script to add each ticket holder dynamically -->
        <script>
        $(document).ready(function() {
            var counter = 1;

            $("#addrow").on("click", function() {
                counter++; //trying to test deletion of row
                var newRow = $("<tr>");
                var cols = "";
                $("input:hidden[name=ticketCounts]").val(counter); //set right after setting a row

                cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';

                cols += '<td class="col-sm-4"><select class="form-control" id="gender' + counter +
                    '" name="gender' + counter +
                    '"> <option value=M>MALE</option><option value=F>FEMALE</option><option value=T>TRANSGENDER</option></select></td>';
                cols += '<td><input type="text" class="form-control" name="age' + counter + '"/></td>';

                cols +=
                    '<td><input type="button" class="ibtnDel btn btn-md btn-danger" value="Delete"></td></tr>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                //counter++;
            });

            $("table.order-list").on("click", ".ibtnDel", function(event) {

                $(this).closest("tr").remove(); // Removing the current row. 
                counter--; // Decreasing total number of rows by 1. s
                $("input:hidden[name=ticketCounts]").val(counter); //set right after deleting a row
            });
        });
        </script>
        <!-- End of script to add each ticket holder dynamically -->

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
    </div>
</body>

</html>