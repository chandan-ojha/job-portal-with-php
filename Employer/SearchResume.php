<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Search Resume</title>
		<style>
			select {
			width: 300px;
			margin: 10px;
			}
			
		</style>
	</head>
	<body style="background-color:powderblue;">
		<form action="SearchResume.php" align="center">
			<h3> Search Resume</h3>
			<label for="name">Keyword:</label>
			<input type="text" id="name" name="nname" size="40"><br><br>
			
			<label for="name">Name:</label>
			<input type="text" id="name" name="nname" size="40"><br><br>
			
			
			<label for="name">Email Address:</label>
			<input type="email" id="email" name="email" size="40"><br><br>
			
			<label for="Category">Job Category:</label>
			
			<select name="Category" id="Category" >
				<option value="Web Design">Web Design</option>
				<option value="Web Development">Web Development</option>
				<option value="Marketing">Marketing</option>
				<option value="Art & Design">Art & Design</option>
				<option value="HR Manager">HR Manager</option>
			</select><br>
			<label for="Category">Job Experience:</label>
		
		<select name="Category" id="Category" >
		<option value="1 year">1 year</option>
		<option value="2 year">2 year</option>
		<option value="3 year">3 year</option>
		<option value="4 year">4 year</option>
		<option value="4 year">5 year</option>
		</select><br>
		
		
		<input type="submit" value="Search">
		</form>
		
		</body>
		</html>		