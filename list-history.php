<?php 
require 'searchphp/function/function.php';
$conn = koneksiDb();

include 'navbarlogin.php';
$username = $_SESSION['uname'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gotion-Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/7d35781f0a.js" crossorigin="anonymous"></script>

    <!--  External CSS  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Internal CSS -->
    <style>
        

    </style>
</head>
<body>

        <div class="container-fluid h-200 bg-secondary p-5">
        <div class="row align-items-center h-100">
            <div class="col-9 mx-auto">
                <div class="card fat my-login-page">
                    <div class="card-body">
                        <div class="overflow-auto p-3" style="max-height: 30em;">
                        <h1>History</h1>

                <?php
            $query1 = "SELECT ht.hotel_name, ht.hotel_city, th.check_in, th.check_out, th.total_room, th.grand_total
            FROM transaksi_hotel th JOIN avail_hotel avh ON th.avail_id = avh.avail_id
            JOIN hotel ht ON avh.hotel_id = ht.hotel_id
            WHERE th.username = ?";

            $stmt1 = $conn->prepare($query1);
            $stmt1->bind_param('s', $username);
            $stmt1->execute();
            $result1 = $stmt1->get_result();
            $result_rows1 = $result1->num_rows;
            
            if ($result_rows1 > 0):
                while ($row1 = $result1->fetch_assoc()):
            ?>
         <div class=" card col-sm-12 search-result-list shadow p-1 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="card-title font-weight-bold text-primary text-left">
                        <h2><?= $row1['hotel_name']; ?></h2>
                    </div>

                    <div class="card-title text-muted text-center">
                        <div class="row">
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                            <h4><?= $row1['check_in']; ?></h4>
                        </div>
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                            <i class="fas fa-hotel fa-3x text-primary"></i><br>
                            <h4><?= $row1['hotel_city'] ?></h4>
                        </div>
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                            <h4><?= $row1['check_out']; ?></h4>
                        </div>
                        </div>
                    </div>


                    <div class="card-text text-right font-weight-bold">
                        <p><?= $row1['total_room']; ?></p>
                        <p>Rp.<?= number_format($row1['grand_total'], 0, ",", "."); ?></p>
                    </div>
                    </div>
                    </div> <?php endwhile; endif;?>


                    <?php
            $query2 = "SELECT avt.train_departure, avt.train_arrival, tk.departure_date, tk.total_seats, tk.grand_total
            FROM transaksi_kereta tk JOIN avail_train avt ON tk.train_id = avt.train_id 
            WHERE tk.username = ?";

            $stmt2 = $conn->prepare($query2);
            $stmt2->bind_param('s', $username);
            $stmt2->execute();
            $result2 = $stmt2->get_result();
            $result_rows2 = $result2->num_rows;
            
            if ($result_rows2 > 0):
                while ($row2 = $result2->fetch_assoc()):
            ?>
            <div class=" card col-sm-12 search-result-list shadow p-1 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="card-title font-weight-bold text-primary text-left">
                        <h2>Kereta</h2>
                        </div>

                    <div class="card-title text-muted text-center">
                        <div class="row">
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                            <h4><?= $row2['train_departure']; ?></h4>
                        </div>
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                        <i class="fas fa-train fa-3x text-primary"></i>
                        </div>
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                            <h4><?= $row2['train_arrival'] ?></h4>
                        </div>
                        </div>
                    </div>

                     <div class="card-text text-right font-weight-bold">
                            <p><?= $row2['departure_date']; ?></p>
                            <p><?= $row2['total_seats']; ?></p>
                            <p>Rp.<?= number_format($row2['grand_total'], 0, ",", "."); ?></p>
                    </div>
                    </div>
                    </div>
                    <?php endwhile; endif;?>


                    <?php
            $query3 = "SELECT fl.airline_name, avf.flight_departure, avf.flight_arrival, tp.departure_date, tp.total_seats, tp.grand_total
            FROM transaksi_pesawat tp JOIN avail_flight avf ON tp.flight_id = avf.flight_id 
            JOIN flight fl ON avf.airline_id = fl.airline_id
            WHERE tp.username = ?";

            $stmt3 = $conn->prepare($query3);
            $stmt3->bind_param('s', $username);
            $stmt3->execute();
            $result3 = $stmt3->get_result();
            $result_rows3 = $result3->num_rows;
            
            if ($result_rows3 > 0):
                while ($row3 = $result3->fetch_assoc()):
            ?>
            <div class=" card col-sm-12 search-result-list shadow p-1 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="card-title font-weight-bold text-primary text-left">
                        <h2><?= $row3['airline_name']; ?></h2>
                    <div class="card-title text-muted text-center">
                        <div class="row">
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                        <h3><?= $row3['flight_departure'] ?></h3>
                        </div>
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                        <i class="fas fa-plane fa-3x text-primary"></i>
                        </div>
                        <div class="container col-xs-10 col-sm-6 col-md-4">
                        <h3><?= $row3['flight_arrival'] ?></h3>
                        </div>
                        </div>
                    </div>

                    <div class="card-text text-right font-weight-bold">
                        <p><?= $row3['departure_date']; ?></p>
                        <p><?= $row3['total_seats']; ?></p>
                        <p>Rp.<?= number_format($row3['grand_total'], 0, ",", "."); ?></p>
                    </div>
                    
                </div>
                    </div>
                    <?php endwhile; endif;?>



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

    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>