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
	<title>Gotion-Torajaland</title>

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
        <h1 class="display-4 font-weight-bold">Torajaland</h1>
      </div>
      <hr class="border border-default mt-1 mb-3">
      <div class="col-12">
        <p class="lead text-justify">
          The strangely shaped island of Sulawesi looks like someone squished a giant spider on the map of Indonesia. Squashed between Borneo to the west and the small islands of Muluku to the east, adrift between the continents of Asia and Australia, it is a place where land and water, species and cultures blend and converge. Nicknamed ‘the Land of the Heavenly Kings,’ Torajaland (Tana Toraja) is tucked within the lush central highlands of Indonesia’s Southern Sulawesi, a region that’s dotted with rice fields, limestone peaks, and bamboo-clad hills. Home to the Toraja, a Christian and animist people, Tana Toraja has a fascinating culture that’s remained largely and surprisingly independent from western influence. Torajans are famous for their massive peaked-roof houses known as tongkonan and spectacular but gruesome funeral rites. After a person’s death, the body is kept – often for several years – until the actual funeral ceremony, which can last for several days. The deceased is then finally buried in a small cave or in a hollow tree. The biggest funerals are usually held in the dry-season months of July and August, but there are funerals year-round.
        </p>
        <p class="lead text-justify">
          Home to the Toraja, a Christian and animist people, Tana Toraja has a fascinating culture that’s remained largely and surprisingly independent from western influence. Torajans are famous for their massive peaked-roof houses known as tongkonan and spectacular but gruesome funeral rites. After a person’s death, the body is kept – often for several years – until the actual funeral ceremony, which can last for several days. The deceased is then finally buried in a small cave or in a hollow tree. The biggest funerals are usually held in the dry-season months of July and August, but there are funerals year-round.
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
        <img src="img/blogtorajaland/toraja1.jpg" alt="carousel image">
      </div>
      <div class="carousel-item">
        <img src="img/blogtorajaland/toraja2.jpg" alt="carousel image">
      </div>
      <div class="carousel-item">
        <img src="img/blogtorajaland/toraja3.jpg" alt="carousel image">
        </div>
      </div>
    </div>
  </div>

<!--- Description-->
	<div class="container-fluid pb-5">
		<div class="row welcome mx-auto text-center pt-5">
			<div class="col-12">
        <p class="lead text-justify">
          Most of the population is indigenous belief system is polytheistic animism, called Aluk ("the way"), Indonesian government has recognized this animist belief as Aluk To Dolo ("Way of the Ancestors"). In the Toraja myth, the ancestors of Torajan people came down from heaven using stairs, which were then used by the Torajans as a communication medium with Puang Matua, the Creator. The cosmos, according to Aluk, is divided into the upper world (heaven), the world of man (earth), and the underworld. At first, heaven and earth were married, then there was a darkness, a separation, and finally the light. Animals live in the underworld, which is represented by rectangular space enclosed by pillars, the earth is for mankind, and the heaven world is located above, covered with a saddle-shaped roof. Other Toraja Gods include Pong Banggai di Rante (god of Earth), Indo' Ongon-Ongon (a goddess who can cause earthquakes), Pong Lalondong (god of death), and Indo' Belo Tumbang (goddess of medicine); and other population is Christian, and others are Muslim.
        </p>
        <p class="lead text-justify">
          The earthly authority, whose words and actions should be cleaved to both in life (agriculture) and death (funerals), is called To Minaa (an aluk priest). Aluk is not just a belief system; it is a combination of law, religion, and habit. Aluk governs social life, agricultural practices, and ancestral rituals. The details of aluk may vary from one village to another. One common law is the requirement that death and life rituals be separated. Torajans believe that performing death rituals might ruin their corpses if combined with life rituals. The two rituals are equally important. During the time of the Dutch missionaries, Christian Torajans were prohibited from attending or performing life rituals, but were allowed to perform death rituals. Consequently, Toraja's death rituals are still practiced today, while life rituals have diminished.
        </p>
          <p class="lead text-justify">
         The Toraja people enjoy great longevity surely something to do with the cool climate and active lifestyle from infancy to old age. They spend their lives growing excellent fragrant rice, raising magnificent buffalo, especially the highly valued pink albino strains. Their work is interspersed with dramatic ceremonies. Harvest festivals and house warming festivals, are times for feasting and a gathering of the clan, times to wear their best costumes and jewellery, bring out the tuak (a local brew) and party for days on end, times for singing and dancing and, of course, eating. These are also times for neighbours and clan members to pay their respects and to pay back obligations that may date back generations.
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
