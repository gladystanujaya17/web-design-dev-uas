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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gotion-Hotels</title>

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
                                    </a>                               
                                </div>
                           </div>
                           <br><br>

                           <!-- Form -->
                            <form action="function/proses_hotel.php" method="POST">
                            <div class="form-group">
                                <span class="form-label">Destination</span>
                                <input class="form-control" type="text" name="kota" id="kota" placeholder="Destination">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Check In</span>
                                        <input class="form-control" type="date" name="tanggal-ci" id="tanggal-ci" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Check out</span>
                                        <input class="form-control" type="date" name="tanggal-co" id="tanggal-co" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Rooms</span>
                                <input class="form-control" type="number" name="jumlah-kamar" id="jumlah-kamar" placeholder="Number of room">
                            </div>
                                <div class="form-group">
                                    <span class="form-label">Type</span>
                                        <select class="form-control" name="room-type" id="room-type">
                                            <option value="" disabled selected> </option>
                                                <?php
                                                    $query = "SELECT * FROM hotel_room";
                                                    $result = $conn->query($query);

                                                    while ($row = $result->fetch_array()):
                                                ?>
                                            <option value="<?= $row['room_type']; ?>"><?= $row['room_type']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    <span class="select-arrow"></span>
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
        document.getElementById("tanggal-ci").setAttribute("min", minDate);

        var tanggalci;
        var tanggalco;
        $('#tanggal-ci').on('change', function() {
            tanggalci = $(this).val();
            $('#tanggal-co').prop('min', function() {
                return tanggalci;
            })
        });

        $('#tanggal-co').on('change', function() {
            tanggalco = $(this).val();
            $('#tanggal-ci').prop('max', function() {
                return tanggalco;
            })
        });
    </script> 

</body>
</html>
