<?php include("contactdb.php"); ?>
<!doctype html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Job Board</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- <link rel="manifest" href="site.webmanifest"> -->
		<!-- Place favicon.ico in the root directory -->
		
		<!-- CSS here -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/gijgo.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slicknav.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- <link rel="stylesheet" href="css/responsive.css"> -->
		
		<style>
			.map-container{
			overflow:hidden;
			padding-bottom:56.25%;
			position:relative;
			height:0;
			}
			.map-container iframe{
			left:10px;
			top:10px;
		height:500px;
		width:1500px;
		position:absolute;
		}
		
		</style>
		</head>
		
		<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->
		
		<!-- header-start -->
		<header>
		<div class="header-area ">
		<div id="sticky-header" class="main-header-area">
		<div class="container-fluid ">
		<div class="header_bottom_border">
		<div class="row align-items-center">
		<div class="col-xl-3 col-lg-2">
		<div class="logo">
		<a href="index.php">
		<img src="img/logo.png" alt="">
		</a>
		</div>
		</div>
		<div class="col-xl-6 col-lg-7">
		<div class="main-menu  d-none d-lg-block">
		<nav>
		<ul id="navigation">
		<li><a href="index.php">Home</a></li>
		<li><a href="jobs.php">Browse Job</a></li>
		<li><a href="#">Job Seeker <i class="ti-angle-down"></i></a>
		<ul class="submenu">
		<li > <a href= "Jobseecker\login.php" > Sign Up/Login</a></li>
		<li><a href="Jobseecker\login.php">Post Resume</a></li>
		</ul>
		</li>
		<li><a href="#">Employer <i class="ti-angle-down"></i></a>
		<ul class="submenu">
		<li><a href="Employer\login.php">Sign Up/Login</a></li>
		<li><a href="Job Post\postjob.php" target="_blank">Post Jobs</a></li>
		<li><a href="Employer\SearchResume.php" target="_blank">Search Resume</a></li>
		
		</ul>
		</li>
		<li><a href="#">Career Resources <i class="ti-angle-down"></i></a>
		<ul class="submenu">
		<li><a href="Career_Guide.php">Career Guide & Tips</a></li>
		
		
		</ul>
		</li>
		<li><a href="contact.php">Contact</a></li>
		</ul>
		</nav>
		</div>
		</div>
		<div class="col-xl-3 col-lg-3 d-none d-lg-block">
		<div class="Appointment">
		<div class="phone_num d-none d-xl-block">
		<a href="Admin\login.php">Admin</a>
		</div>
		<div class="d-none d-lg-block">
		<a class="boxed-btn3" href="Employer\login.php">Post a Job</a>
		</div>
		</div>
		</div>
		<div class="col-12">
		<div class="mobile_menu d-block d-lg-none"></div>
		</div>
		</div>
		</div>
		
		</div>
		</div>
		</div>
		</header>
		<!-- header-end -->
		
		<!-- bradcam_area  -->
		<div class="bradcam_area bradcam_bg_1">
		<div class="container">
		<div class="row">
		<div class="col-xl-12">
		<div class="bradcam_text">
		<h3>contact</h3>
		</div>
		</div>
		</div>
		</div>
		</div>
		<!--/ bradcam_area  -->
		<!-- ================ contact section start ================= -->
		<section class="contact-section section_padding">
		<div class="container">
		<!--Google map-->
		<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
		<iframe src="https://maps.google.com/maps?q=mirpur-1&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
		style="border:0" allowfullscreen></iframe>
		</div>
		<!--Google Maps-->
		
		<h2 class="contact-title">Send us your query</h2>
		
		
		<form action="contact.php" method="POST"  >
		<div class="form-group">
		<div>
		<label for="exampleFormControlInput1"> Email address</label>
		<input type="email" class="form-control" id="exampleFormControlInput1" name="email" >
		
		</div>      
		<div class="form-group"> 
		<label>Name</label>
		<input type="text" class="form-control" name="name"  required>
		</div>
		<div class="form-group">
		<label for="exampleFormControlTextarea1">Message</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
		</div>
		
		
		<button  type="submit" class="btn btn-primary" name="submit"> Send message  </button>
		
		</form>
		
		</div>
		</section>
		<!-- ================ contact section end ================= -->
		
		
		<!-- footer start -->
		<footer class="footer">
		<div class="footer_top">
		<div class="container">
		<div class="row">
		<div class="col-xl-3 col-md-6 col-lg-3">
		<div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
		<div class="footer_logo">
		<a href="#">
		<img src="img/logo.png" alt="">
		</a>
		</div>
		<p>
		chandanojha917@gmail.com <br>
		01797348221<br>
		Mirpur-01,Dhaka,Bangladesh
		</p>
		<div class="socail_links">
		<ul>
		<li>
		<a href="#">
		<i class="ti-facebook"></i>
		</a>
		</li>
		<li>
		<a href="#">
		<i class="fa fa-google-plus"></i>
		</a>
		</li>
		<li>
		<a href="#">
		<i class="fa fa-twitter"></i>
		</a>
		</li>
		<li>
		<a href="#">
		<i class="fa fa-instagram"></i>
		</a>
		</li>
		</ul>
		</div>
		
		</div>
		</div>
		<div class="col-xl-2 col-md-6 col-lg-2">
		<div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
		<h3 class="footer_title">
		Company
		</h3>
		<ul>
		<li><a href="#">About </a></li>
		<li><a href="#"> Pricing</a></li>
		<li><a href="#">Carrier Tips</a></li>
		<li><a href="#">FAQ</a></li>
		</ul>
		
		</div>
		</div>
		<div class="col-xl-3 col-md-6 col-lg-3">
		<div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
		<h3 class="footer_title">
		Category
		</h3>
		<ul>
		<li><a href="#">Design & Art</a></li>
		<li><a href="#">Engineering</a></li>
		<li><a href="#">Sales & Marketing</a></li>
		<li><a href="#">Finance</a></li>
		</ul>
		</div>
		</div>
		<div class="col-xl-4 col-md-6 col-lg-4">
		<div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
		<h3 class="footer_title">
		Subscribe
		</h3>
		<form action="#" class="newsletter_form">
		<input type="text" placeholder="Enter your mail">
		<button type="submit">Subscribe</button>
		</form>
		
		</div>
		</div>
		</div>
		</div>
		</div>
		<div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
		<div class="container">
		<div class="footer_border"></div>
		<div class="row">
		<div class="col-xl-12">
		<p class="copy_right text-center">
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Me</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
		</div>
		</div>
		</div>
		</div>
		</footer>
		<!--/ footer end  -->
		
		
		<!-- JS here -->
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/ajax-form.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/scrollIt.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/nice-select.min.js"></script>
		<script src="js/jquery.slicknav.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/gijgo.min.js"></script>
		
		<!--contact js-->
		<script src="js/contact.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.form.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/mail-script.js"></script>
		
		<script src="js/main.js"></script>
		</body>
		
		</html>			