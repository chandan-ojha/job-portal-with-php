<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>View Resume</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		
	</head>
	<body>
		
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "job portal";
			
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			$sql = "SELECT * FROM resume WHERE id=1";
			
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					
					
					echo '<p>'.  $row['name'] .'<p>' ;
					echo '<p>'.  $row['address'] .'<p>';
					echo '<p>'.  $row['phonenumber'] .'<p>';
					echo '<p>'.  $row['email'] .'<p>'."<br>";
					
					
					echo '<p>'.'<h4>'."Career Objective : ".'</h4>'.  $row['CareerObjective'] .'<p>'."<br>";
					echo '<p>'.'<h4>'."Job Experience : ".'</h4>'.  $row['JobExperience'] .'<p>'."<br>";
					
					echo '<p>'.'<h4>'."Academic Qualification : ".'</h4>'.  $row['AcademicQualification'] .'<p>'."<br>";
					
					echo '<p>'.'<h4>'."KeySkills : ".'</h4>'.  $row['KeySkills'] .'<p>'."<br>";
					
					echo '<p>'.'<h4>'."Activites: ".'</h4>'.  $row['Activites'] .'<p>'."<br>";
					
					
					
				}
				} else {
				echo "0 results";
			}
			
			mysqli_close($conn);
		?>
		
		
	</body>
</html>

