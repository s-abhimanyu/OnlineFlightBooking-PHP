<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="ASRS | About page"; ?>
<?php require 'head.php'; ?>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Airline Seat Reservation System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      </li>
     
    </ul>

  </div>
</nav>

<div class="jumbotron">
  <h1>Airline Seat Reservation System</h1>
  <p>Allows you to reserve your Airlines Seat</p>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="image/ASR4.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2>We're here to save you!</h2>
			<p class="py-3">We believe every journey counts!, Every journey matters.This website helps you to reserve your desired seat/position in your Journey.Reserve your seat,Have a happy and safe journey:)</p>
			<a href="about.php"> </a> 
			</div>
		</div>
	</div>
</section>
<?php require 'footer.php'; ?>
</body>
</html>