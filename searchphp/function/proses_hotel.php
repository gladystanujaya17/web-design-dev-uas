<?php
    require 'function.php';
    $conn = koneksiDb();
    session_start();

if(!isset($_SESSION['uname']))
    {
    require 'navbar.php';
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
    <title>Gotion-Hotels</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/7d35781f0a.js" crossorigin="anonymous"></script>

    <!--  External CSS  -->
    <link rel="stylesheet" href="../../css/style.css">

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
                        <div class="overflow-auto p-3" style="max-width: 60em; max-height: 30em;">

        <!-- Main content -->
        
            <?php
            $city = $_POST['kota'];
            $roomtype = $_POST['room-type'];
            $manyroom = $_POST['jumlah-kamar'];
            $tanggalmasuk = $_POST['tanggal-ci'];
            $tanggalkeluar = $_POST['tanggal-co'];
                
            $query = "SELECT avh.avail_id, avh.hotel_id, ht.hotel_name, ht.hotel_city, hr.room_type, hb.bed_type, avh.hotel_price
                    FROM avail_hotel avh
                    JOIN hotel ht ON ht.hotel_id = avh.hotel_id
                    JOIN hotel_room hr ON avh.room_id = hr.room_id
                    JOIN hotel_bed hb ON avh.bed_id = hb.bed_id
                    WHERE ht.hotel_city LIKE ? AND hr.room_type = ?";

            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $city, $roomtype);
            $stmt->execute();
            $result = $stmt->get_result();
            $result_rows = $result->num_rows;

            if ($result_rows >0 ) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class=" card col-sm-12 search-result-list shadow p-1 mb-5 bg-white rounded">
                    <div class="card-body">
                    <div class="card-title font-weight-bold text-primary">
                        <h1><?= $row['hotel_name'] ?></h1>
                    </div>

                    <div class="card-title text-muted">
                         <div class="container">
                             <h3><?= $row['hotel_city'] ?></h3>
                        </div>
                    </div>


                    <div class="card-text text-right">
                    <p class="font-weight-bold"><?= $row['room_type'] ?></p>
                    <p class="text-muted font-weight-bold"><?= $row['bed_type'] ?></p>
                    <p class="text-muted font-weight-bold"><?= number_format($row['hotel_price'], 0, ",", ".") ?>/room/night</p>
                    <a href="../confirmation_hotel.php?id=<?=urlencode(base64_encode($row['avail_id']))?>
                    &manyroom=<?=$manyroom?>&ci=<?=$tanggalmasuk?>&co=<?=$tanggalkeluar?>" class="btn btn-warning text-light">Booking</a>

                </div>
            </div>
        </div>

            <?php    }
            } else {
                echo "Hotel yang anda cari sedang tidak tersedia";
            } ?>
        </div>




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
    <script src="../../js/my-login.js"></script>

    <!-- Internal JS -->
     <script>

    </script> 
</body>
</html>