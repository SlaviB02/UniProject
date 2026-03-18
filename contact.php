<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (!empty($fname) && !empty($email) && !empty($message)) {

        echo "<h3>Form submitted!</h3>";
        echo "Name: $fname $lname <br>";
        echo "Email: $email <br>";
        echo "Subject: $subject <br>";
        echo "Message: $message <br>";

    } else {
        echo "Please fill all required fields.";
    }
}
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stamina</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/bootstrap.css">


	<link rel="stylesheet" href="css/magnific-popup.css">

	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	
	<link rel="stylesheet" href="css/style.css">

	
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
		
	<?php include 'inc/header.php'; ?>

	<div id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contact Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 East 22th Street, <br> Suite 721 Burgas 8000</li>
							<li class="phone"><a>+ 1235 2355 98</a></li>
							<li class="email"><a>Stamina@gmail.com</a></li>
						
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form method="POST">
						<div class="row form-group">
							<div class="col-md-6">
								<input type="text" name="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<input type="text" name="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">	
								<input type="text" name="subject" class="form-control" placeholder="Your subject">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">						
								<textarea name="message" class="form-control"placeholder="Write your message here" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<?php include 'inc/footer.php'; ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

	<script src="js/jquery.min.js"></script>

	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.stellar.min.js"></script>
	
	<script src="js/owl.carousel.min.js"></script>

	<script src="js/jquery.countTo.js"></script>
	
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/main.js"></script>

	</body>
</html>

