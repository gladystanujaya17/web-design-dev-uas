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



<!--- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/background1.jpg" alt="carousel image">
				<div class="carousel-caption">
					<h1 class="display-3">Welcome To Gotion</h1>
					<h3 class="mb-3">Find tours, activities, and more</h3>
					<a  href="#ctr" class="btn btn-primary btn-lg mx-3 my-1" type="button">
						Find out
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/background2.jpg" alt="carousel image">
				<div class="carousel-caption">
					<h1 class="display-3">Welcome To Gotion</h1>
					<h3 class="mb-3">Find tours, activities, and more</h3>
					<a  href="#ctr" class="btn btn-primary btn-lg mx-3 my-1" type="button">
						Find out
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/background3.jpg" alt="carousel image">
				<div class="carousel-caption">
					<h1 class="display-3">Welcome To Gotion</h1>
					<h3 class="mb-3">Find tours, activities, and more</h3>				
					<a  href="#ctr" class="btn btn-primary btn-lg mx-3 my-1" type="button">
						Find out
					</a>
				</div>
			</div>
		</div>
	</div>


<!--- Header section-->
	<div class="container-fluid pb-5">
		<div class="row welcome mx-auto text-center pt-5" id="ctr">
			<div class="col-12">
				<h1 class="display-4">Lowest prices. Longest satisfaction.</h1>
			</div>
			<hr class="border border-default mt-1 mb-3">
			<div class="col-12">
				<p class="lead">
					Find the best for the right price				
				</p>
			</div>
		</div>
	</div>

<!--- Three Column Section -->
	<div class="container-fluid pb-5">
		<div class="row text-center pb-5">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="searchphp/search_flight.php">
				<i class="fas fa-plane fa-4x text-primary"></i>
				</a>
				<h3 class="my-3">Airline</h3>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="searchphp/search_train.php">
				<i class="fas fa-train fa-4x text-primary"></i>
				</a>
				<h3 class="my-3">Train</h3>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="searchphp/search_hotel.php">
				<i class="fas fa-hotel fa-4x text-primary"></i>
				</a>
				<h3 class="my-3">Hotel</h3>
			</div>
		</div>
			<hr class="my-4">
	</div>


<!--- Blog preview section-->
	<div class="container-fluid p-5">
		<div class="row pb-5">
			<div class="col-lg-6">
				<h2>Raja Ampat</h2>
				<p class="mb-3">
					For underwater enthusiasts, Raja Ampat definitely offers some of the world’s ultimate experience.
				</p>
				<p class="mb-3">
					The territory within the islands of Raja Ampat is enormous, covering 9.8 million acres of land and sea, home to 540 types of corals, more than 1,000 types of coral fish and 700 types of mollusks. 
				</p>
				<p class="mb-3">
					This makes it the most diverse living library for the world's coral reef and underwater biota.
				</p>

				<a href="blog-RajaAmpat.php" class="btn btn-primary" role="button">
					Learn More 
				</a>
			</div>
			<div class="col-lg-6 bg-info">
				<img class="img-fluid" src="img/rajaampat.png" alt="bali" width="1000px" height="642">
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





