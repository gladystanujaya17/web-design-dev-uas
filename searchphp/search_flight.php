<?php
session_start();
include 'header.php';
if(!isset($_SESSION['uname']))
    {
    include 'navbar.php';
    }else {
		session_abort();
    include 'navbarlogin.php';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gotion-Flight</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/7d35781f0a.js" crossorigin="anonymous"></script>

    <!--  External CSS  -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Internal CSS -->
    <style>
        

    </style>
</head>
<body>



<!--- Background section-->
    <div class="container-fluid h-200 bg-secondary p-5">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            <!-- Icons -->
                            <div class="row text-center">
                                <div class="col">
                                    <a href="search_flight.php">
                                        <i class="fas fa-plane fa-3x text-primary"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="search_train.php">
                                        <i class="fas fa-train fa-3x text-primary"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="search_hotel.php">
                                        <i class="fas fa-hotel fa-3x text-primary"></i>
                                    </a
>                               </div>
                           </div>
                           <br>

                           <!-- Form -->
                           <form action="function/proses_flight.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Departure</span>
                                        <input class="form-control" type="text" name="dari" id="dari" placeholder="Departure">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Destination</span>
                                        <input class="form-control" type="text" name="ke" id="ke" placeholder="Destination">
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                        <span class="form-label">Departure Date</span>
                                        <input class="form-control" type="date" name="tanggal" id="tanggal" required>
                                </div>
                                <div class="form-group">
                                        <span class="form-label">No. of passangers</span>
                                        <input class="form-control" type="number" name="seats" id="seats" placeholder="No. of passangers">
                                    </div>
                                <div class="form-group">
                                        <span class="form-label">Class</span>
                                        <select class="form-control" name="class" id="class">
                                            <option value="" diabled selected>Select your class </option>
                                                <?php
                                                    $query = "SELECT * FROM class";
                                                    $result = $conn->query($query);

                                                    while ($row = $result->fetch_array()):
                                                    if ($row['class_id'] == "EXC") {
                                                        continue;
                                                    }
                                                ?>
                                            <option value="<?= $row['class_name']; ?>"><?= $row['class_name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                </div>
                                <br><br>
                                <div class="form-group m-0">
                                    <button type="submit" name="search" class="btn btn-primary btn-block">
                                        Search
                                    </button>
                                </div>
                        </form>
                       </div>
                   </div>
            </div>
        </div>
    </div>                                          



<!--- Footer -->
    <footer>
        <div class="container-fluid bg-dark pt-5">
            <div class="text-center text-white py-3">
                    <h5>&copy;Gotion</h5>
            </div>
        </div>
    </footer>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- External JS -->
    <script src="../js/my-login.js"></script>

    <!-- Internal JS -->
     <script>
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth() + 1;
        if (day < 10) {
            day = '0' + day;
        }
        if (month < 10) {
            month = '0' + month;
        }
        var year = date.getUTCFullYear();
        var minDate = year + "-" + month + "-" + day;
        document.getElementById("tanggal").setAttribute("min", minDate);
    </script> 
</body>
</html>
