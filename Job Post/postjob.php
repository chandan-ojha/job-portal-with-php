<?php include("dbjob.php"); ?>
<html>
	<head>
		<title> Post Job </title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
	</head>
	<body>
		<div class="container">
			<br>
			<h2>Post A Job</h2><br>
			<form action="postjob.php" method="POST" enctype='multipart/form-data' >
				<div class="form-group">
					<label for="exampleFormControlInput1"> Employer Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" name="email" >
				</div>      
				<div class="form-group"> 
					<label>Job Title</label>
					<input type="text" class="form-control" name="jobtitle"  required>
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Location</label>
					<select class="form-control" id="exampleFormControlSelect1" name="location" >
						<option>Dhaka</option>
						<option>Chittagong</option>
						<option>Rajshahi</option>
						<option>Khulna</option>
						<option>Barisal</option>
						<option>Comilla</option>
						<option>Rangpur</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Job Type</label>
					<select class="form-control" id="exampleFormControlSelect1" name="jobtype">
						<option>Part time</option>
						<option>Full time</option>
						
					</select>
				</div>
				
				<div class="form-group">
				<label for="exampleFormControlTextarea1">Job Description</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="jobdescription"></textarea>
				</div>
				
				<br><h5>Company Details</h5><hr>
				<div class="form-group"> 
				<label>Company Name</label>
				<input type="text"  class="form-control" name="companyname" required>
				</div>
				
				<div class="form-group">
				<label for="exampleFormControlTextarea1">Company Description</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="companydescription" rows="3"></textarea>
				</div>
				<div class="form-group"> 
				<label>Company Website Link</label>
				<input type="text"  class="form-control" name="companyweblink" required>
				</div>
				
				<div class="form-group">
				<label for="exampleFormControlFile1">Upload Company logo</label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
				</div>
				
				
				<button  type="submit" class="btn btn-primary" name="submit"> Save Job  </button>
				
				</form>
				
				</div>
				
				
				
				
				
				</body>
				</html>								