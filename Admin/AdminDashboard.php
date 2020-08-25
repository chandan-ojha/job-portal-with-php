<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<?php 
	session_start(); 
	
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	
?>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Employer Login</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- <link rel="manifest" href="site.webmanifest"> -->
		<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
		<!-- Place favicon.ico in the root directory -->
		
		<!-- CSS here -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/owl.carousel.min.css">
		<link rel="stylesheet" href="../css/magnific-popup.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/themify-icons.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/gijgo.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/slicknav.css">
	
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="Login&SignUp.css">
	<link rel="stylesheet" href="AdminDashboard.css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
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
	<a href="index.html">
	<img src="../img/logo.png" alt="">
	</a>
	</div>
	</div>
	<div class="col-xl-6 col-lg-7">
	<div class="main-menu  d-none d-lg-block">
	<nav>
	<ul id="navigation">
	<li><a href="../index.php">Home</a></li>
	<li><a href="../jobs.php">Browse Job</a></li>
	<li><a href="#">Job Seeker <i class="ti-angle-down"></i></a>
	<ul class="submenu">
	<li > <a href= "#" > Sign Up/Login</a></li>
	<li><a href="#">Post Resume</a></li>
	</ul>
	</li>
	<li><a href="#">Employer <i class="ti-angle-down"></i></a>
	<ul class="submenu">
	<li><a href="#">Sign Up/Login</a></li>
	<li><a href="#">Post Jobs</a></li>
	<li><a href="SearchResume.php" target="_blank">Search Resume</a></li>
	
	</ul>
	</li>
	<li><a href="#">Career Resources <i class="ti-angle-down"></i></a>
	<ul class="submenu">
	<li><a href="../Career_Guide.php">Career Guide & Tips</a></li>
	
	
	</ul>
	</li>
	<li><a href="../contact.php">Contact</a></li>
	</ul>
	</nav>
	</div>
	</div>
	<div class="col-xl-3 col-lg-3 d-none d-lg-block">
	<div class="Appointment">
	<div class="phone_num d-none d-xl-block">
	<a href="#">Admin</a>
	</div>
	<div class="d-none d-lg-block">
	<a class="boxed-btn3" href="../Job Post/postjob.php"  target="_blank">Post a Job</a>
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
	
	<br> <br> <br> <br> 
	
	<div class="container">
	<div class="row profile">
	<div class="col-md-3">
	<div class="profile-sidebar">
	<!-- SIDEBAR USERPIC -->
	<div class="profile-userpic">
	<img src="images/Profile1.png" class="img-responsive" alt="">
	</div>
	<!-- END SIDEBAR USERPIC -->
	<!-- SIDEBAR USER TITLE -->
	<div class="profile-usertitle">
	<div class="profile-usertitle-name">
	
	</div>
	<div class="profile-usertitle-job">
	Mr.<?php echo $_SESSION['username']; ?>
	</div>
	</div>
	<!-- END SIDEBAR USER TITLE -->
	
	
	<!-- SIDEBAR MENU -->
	<div class="profile-usermenu">
	<ul class="nav">
	<li class="active">
	<a href="#">
	<i class="glyphicon glyphicon-th-list"></i>
	Dashboard </a>
	</li>
	
	
	
	
	<li>
	<a href="../Job Post/postjob.php" target="_blank">
	<i class="glyphicon glyphicon-edit"></i>
	Post  A  Jobs </a>
	</li>
	
	
	</ul>
	</div>
	<!-- END MENU -->
	</div>
	</div>
	
	<!-- Start Dashboard Content -->
	<div class="col-md-9">
	<div class="profile-content">
	
	<p style="text-align:right"> <a  href="login.php" style="color: red;">logout</a> </p>
	
	
	<br> 
	
	
	
	<div class="gallery">
	<a target="_blank" href="../Job Post/postjob.php">
	<img src="images/post_job.png" alt="Search Jobs" width="600" height="400">
	</a>
	<div class="desc">Post A Job</div>
	</div>
	
	
	
	
	</div>
	</div>
	<!-- End Dashboard Content -->
	</div>
	</div>
	
	<br> 
	
	
	
	<!-- link that opens popup -->
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