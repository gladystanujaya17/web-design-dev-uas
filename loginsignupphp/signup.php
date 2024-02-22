<?php
session_start();
if(!isset($_SESSION['uname']))
    {
    require 'navbar.php';
    }else {
    include 'navbarlogin.php';
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gotion-Signup</title>

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
					<div class="card fat my-login-page">
					<div class="card-body">
							<h4 class="card-title text-center">Signup</h4>
							<form action="signup_proses.php" method="POST" class="my-login-validation" novalidate="">

								<div class="form-group">
									<label for="USERNAME">Username</label>
									<input id="USERNAME" type="text" class="form-control inputbox" name="USERNAME" required autofocus>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>

								<div class="form-group">
									<label for="EMAIL">E-Mail Address</label>
									<input id="EMAIL" type="text" class="form-control inputbox" name="EMAIL" required>
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="PASSWORD">Password</label>
									<input id="PASSWORD" type="password" class="form-control inputbox" name="PASSWORD" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

								<div class="form-group">
									<label for="PHONE">Phone Number</label>
									<input type="text" name="PHONE" class="form-control inputbox"required autofocus>
									<div class="invalid-feedback">
										Your phone number is unavailable
									</div>
								</div>


								<div class="form-group">
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Signup
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="login.php">Login</a>
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

</body>
</html>
