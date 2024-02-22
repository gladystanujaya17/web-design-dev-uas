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
	<title>Gotion-RajaAmpat</title>

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
        <h1 class="display-4 font-weight-bold">Raja Ampat</h1>
      </div>
      <hr class="border border-default mt-1 mb-3">
      <div class="col-12">
        <p class="lead text-justify">
          Far from the view-blocking skyscrapers, dense and hectic concrete jungles, congested traffics, flickering electric billboards, endless annoying noises, and all the nuisances of modern cities, you will find a pristine paradise where Mother Nature and warm friendly people welcome you with all the exceptional wonders in Raja Ampat, the islands-regency in West Papua Province. With all the spectacular wonders above and beyond its waters, as well as on land and amidst the thick jungles, this is truly the place where words such as beautiful, enchanting, magnificent, and fascinating get its true physical meaning.
        </p>
        <p class="lead text-justify">
          Situated off the northwest tip of Bird’s Head Peninsula on Papua, the most eastern island of the Indonesian Archipelago, Raja Ampat or literally meaning ‘The Four Kings’ is an archipelago comprising over 1,500 small islands, cays, and shoals surrounding the four main islands of Waigeo, Batanta, Salawati, and Misool. The name Raja Ampat itself is believed to derive from a legend where a woman found seven eggs, with four of them hatch and become the kings of the four main islands, while the other three became a woman, a ghost, and a stone.
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
        <img src="img/blograjaampat/rajaampat1.png" alt="carousel image">
      </div>
      <div class="carousel-item">
        <img src="img/blograjaampat/rajaampat2.png" alt="carousel image">
      </div>
      <div class="carousel-item">
        <img src="img/blograjaampat/rajaampat3.png" alt="carousel image">
        </div>
      </div>
    </div>
  </div>

<!--- Description-->
	<div class="container-fluid pb-5">
		<div class="row welcome mx-auto text-center pt-5">
			<div class="col-12">
        <p class="lead text-justify">
          For underwater enthusiasts, Raja Ampat definitely offers some of the world’s ultimate experience. The territory within the islands of the Four Kings is enormous, covering 9.8 million acres of land and sea, home to 540 types of corals, more than 1,000 types of coral fish and 700 types of mollusks. This makes it the most diverse living library for the world's coral reef and underwater biota. According to a report developed by The Nature Conservancy and Conservation International, around 75% of the world's species live here! Raja Ampat’s sheer numbers and diversity of marine life and its huge pristine coral reef systems are a scuba dream come true – and a fantastic site for snorkelers too.
        </p>
        <p class="lead text-justify">
          As you embark on your dive here, the phrase "Attention to detail" takes on new meaning as pigmy seahorses swim around your fingers. Manta Rays and wobbegongs will glide right by you. Schools of Tuna fish, giant trevallies, snappers, batfish, and even barracudas are there to complete your underwater "meeting list". Not to mention the friendly assistant of the "dugong", and a busy colleague, the turtle. Down at the sea floors, giant sea clams measuring to over one meter in length truly offers one of kind close encounter sensation. Obviously, there are a lot of diving and snorkeling spots to choose from in these vast waters. Among these are at the Kabui Passage (the very narrow passage between Waigeo and Gam Island crossed by the renowned British explorer, Alfred Russell Wallace in 1860), around the Arborek Island’s Dock, Sawandarek, Yenbuba, Friwen Wall, and many-many more.
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
