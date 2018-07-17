<?php include "config/config.php"; ?>

<?php 
if((isset($_POST['submit']))){
	$username= $_POST['username'];
	$email= $_POST['email'];
	$password= md5($_POST['password']);
	$city= $_POST['city'];
	$mob= $_POST['mob'];
	
	$query = "INSERT INTO user(username,email,password,city,mob) VALUES('$username','$email','$password','$city',$mob)";
	$fire = mysqli_query($con,$query) or die("can not insert data into database".mysqli_error($con));
	
	if($fire) echo "Data submitted to database";
}


?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.o">

    <!-- Bootstrap CSS -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">
    <title>phpapp</title>
	
  </head>




<body>
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
  </ul>
  </div>
  </div>
  
  </nav>
<div class="container">
<div id="slider">
  <a href="#" class="control_next">>></a>
  <a href="#" class="control_prev"><</a>
  <ul>
   
    <li style="background: #aaa;"><img src="images/1.jpg" height="100%" width="100%" /></li>
    <li style="background: #aaa"><img src="images/3.jpg" height="100%" width="100%" /></li>
    <li style="background: #aaa;"><img src="images/2.jpg" height="100%" width="100%" /></li>
  </ul>  
</div>
<div class="aa">
<h2>Sign Up</h2>
<form name="signup" id="signup" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<input type="text" name="username" id="username" placeholder="please Enter username" required><br><br>
<input type="email" name="email" id="email" placeholder="please Enter email" required><br><br>
<input type="password" name="password" id="password" placeholder="plese enter your password" required><br><br>
<input type="text"  name="city" id="city" placeholder="plese enter your city" required><br><br>
<input type="text"  name="mob" id="mob"placeholder="plese enter your mobile number" required><br><br>
<input type="date" name="date" id="date" placeholder="enter your date of birth"	><br><br>
<button name="submit" id="submit" class="btn btn-primary btn-block">Sign Up</button> &nbsp; &nbsp; &nbsp; &nbsp;<button name="home" id="home" ><a href="index.html" class="btn btn-success btn-block">HOME</a></button>
</form></div>
</div>


</header>
			
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
<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
<script src='js/jquery.min.js'></script>
     <script src="js/index.js"></script>
</html>