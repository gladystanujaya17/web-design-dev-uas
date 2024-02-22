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
    $query = "SELECT avt.train_id, avt.train_departure, avt.train_arrival, cs.class_name, avt.train_price
    FROM avail_train avt JOIN class cs ON cs.class_id = avt.class_id
    WHERE train_id = ?";

    $train_id = urldecode(base64_decode($_GET['id']));
    $numofseats = urldecode(base64_decode($_GET['seats']));

    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $train_id);
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
    <title>Gotion-Train</title>

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


                    <h2 class="card-title text-center font-weight-bold">Confirmation</h2>
                    <br>
                    <form action="../tiket/barcode2.php" method="post">
                    <div class="form-text">
                    <ul style="list-style:none; display:table;">

                        <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">From</b>: <?= $hasil['train_departure'] ?></li>
                        <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">To</b>: <?= $hasil['train_arrival'] ?></li>
                        <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Class</b>:  <?=$hasil['class_name']?> </li>
                        <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Date</b>: <?= $_GET['date'] ?></li>
                        <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Seats</b>: <?=$numofseats?> </li>
                        <li style="display: table-row;"><b style="display:table-cell; padding-right: 1em;">Price</b>: Rp.    
                            <?php 
                                $totalbayar = $hasil['train_price'] * $numofseats;
                                $totalpay = $totalbayar;
                                $totalbayar = number_format($totalbayar, 0, ",", ".");
                                echo $totalbayar;

                                $_SESSION['idkereta'] = $hasil['train_id'];
                                $_SESSION['bookkereta']=true;
                                $_SESSION['keretadari'] = $hasil['train_departure'];
                                $_SESSION['keretake'] = $hasil['train_arrival'];
                                $_SESSION['keretatanggal'] = $_GET['date'];
                                $_SESSION['keretanumofseats'] = $numofseats;
                                $_SESSION['keretapembayaran'] = $totalpay;
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

   </section>
</body>
</html>