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
	<title>Gotion-Bromo</title>

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
  <div class="container-fluid pb-5">
    <div class="row welcome mx-auto text-center pt-5">
      <div class="col-12">
        <h1 class="display-4 font-weight-bold">Mount Bromo</h1>
      </div>
      <hr class="border border-default mt-1 mb-3">
      <div class="col-12">
        <p class="lead text-justify">
          In a country full of natural beauty, one of the most spectacular sights is Tengger Caldera. The collapsed remnants of an ancient volcano forms a steeply walled crater nearly 10 kilometers (six miles) in diameter. Rising from the nearly flat volcanic sand floor of the caldera is the dormant cone of Mount Betok and the active volcano of Mount Bromo. Just south of the caldera walls is Mount Semeru, Java's highest mountain and most active volcano. All of this has been incorporated as the Bromo-Tengger-Semeru National Park.
        </p>
        <p class="lead text-justify">
          The mountain complex is about 120 kilometers (80 miles) south of Surabaya and can be visited as a day trip, sort of. As with many such sights, "the thing" to do is see the sunrise over the caldera. This means getting to the lookout point on Mount Penankajan, the highest point on the north rim of the caldera, by about 4:30 in the morning. If you decide to take this route, keep in mind that it can be quite cold in the pre-dawn mountains. On my visit, the air temperature was probably not more than 5°C and there was a high wind making it feel well below zero. There are many people on the approach to the lookout willing to rent you parkas if you don't want to haul your ski jacket around tropical Indonesia.
        </p>
      </div>
    </div>
  </div>

<!--- Image Slider -->
  <div id="slides" class="carousel slide container-fluid w-75" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <li data-target="#slides" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/blogmountbromo/bromo1.jpg" alt="carousel image">
      </div>
      <div class="carousel-item">
        <img src="img/blogmountbromo/bromo2.jpg" alt="carousel image">
      </div>
      <div class="carousel-item">
        <img src="img/blogmountbromo/bromo3.jpg" alt="carousel image">
        </div>
      </div>
    </div>
  </div>

<!--- Description-->
	<div class="container-fluid pb-5">
		<div class="row welcome mx-auto text-center pt-5">
			<div class="col-12">
        <p class="lead text-justify">
          As you're waiting for the sun to make an appearance, don't forget to look up. High up on a mountain and far away from the lights of any big city, you'll see a sky filled with stars, that sadly few people get to see these days. As the eastern horizon begins to redden, you'll be able to make out the shapes in the caldera below you. Bring a camera tripod if you want to get good photos in the still-dim light. Once the sun actually appears over the horizon, to be greeted by yells from the assembled crowd, it's then time to make your way to the crater floor.
        </p>
        <p class="lead text-justify">
          The steep road down to the floor of the caldera comes out opposite to Mount Betok, with Mount Bromo behind. The floor of the caldera is find volcanic sand, which is often called the Sand Sea or Lautan Pasir. Crossing the Sand Sea is usually done by jeep. On rounding the base of Mount Betok, you're greeted by two rather incongruous sights. One is a Hindu Temple, and the other is cowboys. The temple is a reminder that some of the Hindu Tengger people stayed behind when the Majapahit empire fell and many others fled to Bali. The cowboys are there to sell you their services, or rather, the services of their horses.
        </p>
          <p class="lead text-justify">
         Just beyond the Hindu temple are the lower slopes of Mount Bromo. The jeeps only go as far as this, and the choice is to either walk across the slick volcanic sands to the base of Bromo's cone, or ride one of the horses on offer. Most people goes on the ponies, probably because it's included in the price of the tour. The horses will take you only to the base of the steep sides of the cone. From there you have to climb a rather steep stairway.
        </p>
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
