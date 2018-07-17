<?php

include "connection/connection.php";
	if(!isset($_SESSION['username'])):
		header("location:login.php");
	endif;
	?>
	
	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.o">

    <!-- Bootstrap CSS -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">
    <title>Login System</title>
  </head>
  <body><header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <div class="container">
  
  <a href="index.html" class="navbar-brand text-warning font-weight-bold"> gopswebs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
  <span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse text-center" id="collapsenavbar">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item">  
	<a href="index.html" class="nav-link text-white"> Home</a></li>
	<li class="nav-item">  
	<a href="services.html" class="nav-link text-white">Services</a> </li>
	<li class="nav-item">  
	<a href="aboutme.html" class="nav-link text-white"> about me</a></li>

	<li class="nav-item">  
	<a href="contact.html" class="nav-link text-white"> contact</a></li>
	<li class="nav-item">  
	<h6><a href="logout.php"><button type="button" class="btn btn-danger">log out</button></a></h6> </li>
	
  </ul>
  </div>
  </div>
  
  </nav>
<br>
<br>
<br>
<h1>welcm to desboard</h1>
</header>
			<br><br>
			<br>
			<br>
			<br>
			<br><br><br>
			<br>
			<br>
			<br>
			<br>
  <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Gops<span>webs</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">gopswebs &copy; 2018</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email" />
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>

</body>
</html>
