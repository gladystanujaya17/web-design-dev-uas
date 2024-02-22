<?php
    require 'function/function.php';
    $conn = koneksiDb();

    session_start();
if(!isset($_SESSION['uname']))
    {
    include 'navbar.php';
    }else {
		session_abort();
    include 'navbarlogin.php';
    }
    $query = "SELECT avf.flight_id, f.airline_name, avf.flight_departure, avf.flight_arrival, cs.class_name, avf.flight_price
    FROM avail_flight avf JOIN class cs ON cs.class_id = avf.class_id
    JOIN flight f ON f.airline_id = avf.airline_id
    WHERE flight_id = ?";

    $flight_id = urldecode(base64_decode($_GET['id']));
    $numofseats = urldecode(base64_decode($_GET['seats']));

    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $flight_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $hasil = $result->fetch_assoc();
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



     <div class="container-fluid h-200 bg-secondary p-5">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">
                <div class="card my-login-page">
                    <div class="card-body">
                        <div class="overflow-auto p-3" style="max-height: 30em;">

                        <div class="card"></div>
                <!-- Main content -->

                    <h2 class="card-title text-center font-weight-bold">Confirmation</h2>
                    <br>
                    <form action="../tiket/barcode.php" method="post">
                        <div class="form-text">
                            <ul style="list-style:none; display:table;">
                                <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Airline</b>: <?= $hasil['airline_name'] ?></li>
                                <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">From</b>: <?= $hasil['flight_departure'] ?></li>
                                <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">To</b>: <?= $hasil['flight_arrival'] ?></li>
                                <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Class</b>:  <?=$hasil['class_name']?> </li>
                                <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Departure Date</b>:  <?= $_GET['date'] ?></li>
                                <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Seats</b>:  <?=$numofseats?> </li>
                                <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Price</b>:  Rp. 
                                <?php 
                                    $totalbayar = $hasil['flight_price'] * $numofseats;
                                    $totalpay = $totalbayar;
                                    $totalbayar = number_format($totalbayar, 0, ",", ".");
                                    echo $totalbayar;

                                    $_SESSION['bookpesawat'] = true;
                                    $_SESSION['idpenerbangan'] = $hasil['flight_id'];
                                    $_SESSION['maskapai'] = $hasil['airline_name'];
                                    $_SESSION['flightdari'] = $hasil['flight_departure'];
                                    $_SESSION['flightke'] = $hasil['flight_arrival'];
                                    $_SESSION['flighttanggal'] = $_GET['date'];
                                    $_SESSION['flightnumofseats'] = $numofseats;
                                    $_SESSION['flightpembayaran'] = $totalpay;

                                ?></li>
                            </ul>
                            <br><br>
                            <h4 class="card-title text-left">Payment Method</h4>
                            <input type="radio" name="payment" id="payment" value="Gopay" id="gopay">
                            <label for="gopay">Gopay</label>
                            <br>
                            <input type="radio" name="payment" id="payment" value="Dana" id="dana">
                            <label for="dana">Dana</label>
                            <br>
                            <input type="radio" name="payment" id="payment" value="Ovo" id="ovo">
                            <label for="ovo">Ovo</label>
                            <br>
                            <input type="radio" name="payment" id="payment" value="Virtual Account" id="va">
                            <label for="va">Virtual Account</label>
                            <br><br>
                            <button type="submit" class="btn btn-warning btn-block text-light">Book Now</button>
                        </div>
                    </form>

                </div>
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
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- External JS -->
    <script src="js/my-login.js"></script>

    <!-- Internal JS -->
    <script>

    </script> 
</body>
</html>
