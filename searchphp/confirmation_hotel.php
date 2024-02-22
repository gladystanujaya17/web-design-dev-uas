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
    $query = "SELECT avh.avail_id, ht.hotel_name, ht.hotel_city, hr.room_type, hb.bed_type, avh.hotel_price
    FROM avail_hotel avh
    JOIN hotel ht ON ht.hotel_id = avh.hotel_id
    JOIN hotel_room hr ON avh.room_id = hr.room_id
    JOIN hotel_bed hb ON avh.bed_id = hb.bed_id
    WHERE avh.avail_id = ?";

    $hotel_id = urldecode(base64_decode($_GET['id']));

    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $hotel_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $hasil = $result->fetch_assoc();

    $checkin = new DateTime($_GET['ci']);
    $checkout = new DateTime($_GET['co']);
    $datediff = date_diff($checkout, $checkin);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gotion-Hotel</title>

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
                                <form action="../tiket/barcode3.php" method="post">
                        <div class="form-text">
                        <ul style="list-style:none; display:table;">

                            <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Hotel's Name</b>: <?= $hasil['hotel_name'] ?></li>
                            <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">City</b>: <?= $hasil['hotel_city'] ?>
                            </li>
                            <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Check-In Date</b>: <?= $_GET['ci'] ?>
                            </li>
                            <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Check-Out Date</b>: <?= $_GET['co'] ?>
                            </li>
                            <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Room Type</b>: <?= $hasil['room_type'] ?></li>
                            <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Number Of Room(s)</b>: <?= $_GET['manyroom'] ?></li>
                            <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Type Of Bed</b>: <?= $hasil['bed_type'] ?></li>
                            <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Total Price</b>: Rp.
                                <?php 
                                    $totalbayar = $hasil['hotel_price'] * $_GET['manyroom'] * $datediff->days;
                                    $totalpay = $totalbayar;
                                    $totalbayar = number_format($totalbayar, 0, ",", ".");
                                    echo "$totalbayar";

                                    $_SESSION['idhotel'] = $hasil['avail_id'];
                                    $_SESSION['bookhotel'] = true;
                                    $_SESSION['hotel'] = $hasil['hotel_name'];
                                    $_SESSION['kota'] = $hasil['hotel_city'];
                                    $_SESSION['checkin'] = $_GET['ci'];
                                    $_SESSION['checkout'] = $_GET['co'];
                                    $_SESSION['numofroom'] = $_GET['manyroom'];
                                    $_SESSION['bedtype'] = $hasil['bed_type'];
                                    $_SESSION['hotelpembayaran'] = $totalpay;
                                ?>
                            </li>
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
