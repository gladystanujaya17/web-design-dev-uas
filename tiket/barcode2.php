<?php

include 'navbarlogin.php';
if(!isset($_SESSION['uname']))
    {
    header('Location: ../loginsignupphp/login.php');
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


        <!-- Main content -->
          <div class="container-fluid h-200 bg-primary p-5">
            <div class="row align-items-center h-100">
                <div class="col-6 mx-auto">
                    <div class="card my-login-page">
                        <div class="card p-5">
                            <div class="card-body text-center">
                                <img src="gambar/ihr_qr_code_ohne_logo.jpg" class="img-fluid rounded mx-auto d-block">
                                <br><br>
                                <a href="tiketkereta.php" class="btn btn-primary">Verify Payment</a>   
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
    <script src="../js/my-login.js"></script>

    <!-- Internal JS -->
     <script>

    </script> 
</body>
</html>
