<?php
include "connection/connection.php";
if(isset($_POST['login'])){
	$error="";
	$email = trim(mysqli_real_escape_string($db,$_POST['email']));
	$password = trim(mysqli_real_escape_string($db,md5($_POST['password'])));
	$Query = mysqli_query($db,"SELECT * FROM user WHERE email ='$email' && password='$password'");
	if(mysqli_num_rows($Query)==1){
		$_SESSION['username'] = $email;
	header("location:home.php");
	
	}else{
		?>
		
		<script> alert('your password or Email not matched'); 
		</script>
	<?php
	}	
}


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
	<h1><a href="sign.php"><button type="button" class="btn btn-success">SignUp</button></a></h1>
  </ul>
  </div>
  </div>
  
  </nav>
  <div class="back">
  <div class="container">
  <div class="row">
  <div class="col-md-4  col-md-offset-4">
  <?php if(isset($error)): ?>
  <div class="alert alert-warning"> <?php echo $error; ?></div>
  <?php endif; ?>
  <div class="panel panel-primary">
  <div class="panel-heading">
  <h2> Login System</h2>
 </div>
 <div class="aa">
<h2>Login</h2>
<form action="" method="POST">
<input type="email" name="email" class="form-control" placeholder="enter your email" required><br><br>
<input type="password" name="password" class="form-control" placeholder="enter your password" required><br><br>
<input type="submit" name="login" value="Login"></div>


 
				
			</form>
  
  </div> <!-- close panel -->
  </div> <!-- close col -->
  </div> <!-- close row -->
  </div> <!-- close container -->
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
</html>