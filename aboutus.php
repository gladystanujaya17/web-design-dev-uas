<?php
session_start();
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
	<title>Gotion-AboutUs</title>

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



<!--- Header section-->
	<div class="container-fluid p-5 bg-secondary">
		<div class="row welcome mx-auto text-center pt-5">
			<div class="col-12">
				<h1 class="display-5 font-weight-bold text-light">About Us</h1>
			</div>
		</div>
	</div>

<!--- Block section 1-->
  <div class="container-fluid p-4">
    <div class="row p-4">

      <div class="col-lg-6 bg-info">
        <img class="img-fluid" src="img/maps.png" alt="bali" width="1000px" height="642">
      </div>

      <div class="col-lg-6">
        <h2>Gotion</h2>
        <p class="mb-3">
          Gotion merupakan website yang diciptakan serta dikembangkan oleh beberapa mahasiswa/i jurusan Sistem Informasi angkatan 2021, Universitas Multimedia Nusantara.
        </p>
        <p class="mb-3">
          Website ini dibuat dan terinspirasi dari kerinduan banyak orang yang ingin mencari suasana baru namun terkendala situasi pandemi serta banyak ketidakstabilan pada faktor lain. 
        </p>
        <p class="mb-3">
          Tentu di masa yang memberatkan ini, masyarakat Indonesia membutuhkan refreshing dan cenderung ingin mengeksplorasi banyak hal.
        </p>

      </div>
    </div>
  </div>

  <!---Block section 2 -->
  <div class="container-fluid p-4">
    <div class="row p-4">
      <div class="col-lg-6">
        <h2>Anggota Kelompok 2</h2>
        <p class="mb-3">
        Anthony Salim (00000059287) <br>
        Cindy Febriani Santoso (00000059735) <br>
        Gladys Tanujaya (00000057928) <br>
        Michelle Celine (00000059777) <br>
        Rafael Putra Hulu (00000058742) <br>
        </p>

      </div>
      
      <div class="col-lg-6 bg-info">
        <img class="img-fluid" src="img/aboutUs.jpg" alt="anggota kel 2" width="1000px" height="642">
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
