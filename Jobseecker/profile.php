<?php include('server.php') ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Profile</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		
		
	</head>
	<body>
		
		<main id="main-area">
			
			<section id="main-site">
				<div class="container py-5">
					<div class="row">
						<div class="col-4 offset-4 shadow py-4">
							<div class="upload-profile-image d-flex justify-content-center pb-5">
								<div class="text-center">
									
									<img class="img rounded-circle" style="width: 200px; height: 200px;" src="images/Profile1.png" >
									
								</div>
							</div>
							
							<div class="user-info px-3">
								<ul class="font-ubuntu navbar-nav">
									<li class="nav-link"><b> Name: </b><span><?php echo $_SESSION['username']; ?></span></li>
									<li class="nav-link">  <a href="Resume/ViewResume.php" target="_blank">Resume </a></li>
								</ul>
							</div>
						
						</div>
						</div>
						</div>
						</section>
						
						</main>
						
						<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
						<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
						
						<script src="js/main.js"></script>
						</body>
						</html>
												