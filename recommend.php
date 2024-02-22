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
	<title>Gotion-Recommend</title>

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
        <img src="img/carouselrecommend/bromo.jpg" alt="carousel image">
        <div class="carousel-caption">
          <h1 class="display-3">Mount Bromo</h1>
          <h3 class="mb-3">Find tours, activities, and more</h3>
          <a  href="#blog" class="btn btn-primary btn-lg mx-3 my-1" type="button">
            Find out
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carouselrecommend/rajaampat.jpg" alt="carousel image">
        <div class="carousel-caption">
          <h1 class="display-3">Raja Ampat</h1>
          <h3 class="mb-3">Find tours, activities, and more</h3>
          <a  href="#blog" class="btn btn-primary btn-lg mx-3 my-1" type="button">
            Find out
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carouselrecommend/toraja.jpg" alt="carousel image">
        <div class="carousel-caption">
          <h1 class="display-3">Torajaland</h1>
          <h3 class="mb-3">Find tours, activities, and more</h3>        
          <a  href="#blog" class="btn btn-primary btn-lg mx-3 my-1" type="button">
            Find out
          </a>
        </div>
      </div>
    </div>
  </div>

<!--- Header section-->
	<div class="container-fluid pb-5">
		<div class="row welcome mx-auto text-center pt-5">
			<div class="col-12">
				<h1 class="display-4">Travel Recommendation</h1>
			</div>
			<hr class="border border-default mt-1 mb-3" >
			<div class="col-12" >
				<p class="lead">
					With a world full of fascinating destinations, choosing the perfect vacation spot can present a challenge.
				</p>
			</div>
		</div>
	</div>

	<!-- Blog section -->
      <div class="row p-5" id="blog">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="img/rajaampat.png" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>Raja Ampat</h2>
              </div>
              <div class="card-text">
                <p>
 Far from the view-blocking skyscrapers, dense and hectic concrete jungles, congested traffics, flickering electric billboards, endless annoying noises, and all the nuisances of modern cities, ...
                </p>
              </div>
              <a href="blog-RajaAmpat.php" class="btn btn-outline-primary rounded-0 float-end"
                >Learn More</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="img/mountbromo.jpg" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>Mount Bromo</h2>
              </div>
              <div class="card-text">
                <p>
All you will hear is the click of cameras as visitors snap their camera’s hoping to capture the incredible scene of Mt Bromo in the foreground with Mt Semeru smoking in the distance and the sun shining brightly, ...
                </p>
              </div>
              <a href="blog-Bromo.php" class="btn btn-outline-primary rounded-0 float-end"
                >Learn More</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mb-5 shadow-sm">
            <img src="img/torajaland.jpg" class="img-fluid" />

            <div class="card-body">
              <div class="card-title">
                <h2>Torajaland</h2>
              </div>
              <div class="card-text">
                <p>
Nicknamed ‘the Land of the Heavenly Kings,’ Torajaland (Tana Toraja) is tucked within the lush central highlands of Indonesia’s Southern Sulawesi, a region that’s dotted with rice fields, limestone peaks, ...
                </p>
              </div>
              <a href="blog-Torajaland.php" class="btn btn-outline-primary rounded-0 float-end"
                >Learn More</a
              >
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
