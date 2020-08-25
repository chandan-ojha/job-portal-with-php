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
		<form action="/SearchResume.php" align="center">
			<h3> Search Resume</h3>
			<label for="name">Keyword:</label>
			<input type="text" id="name" name="nname" size="40"><br><br>
			
			<label for="name">Name:</label>
			<input type="text" id="name" name="nname" size="40"><br><br>
			
			
			<label for="name">Email Address:</label>
			<input type="email" id="email" name="email" size="40"><br><br>
			
			<label for="Category">Job Category:</label>
			
			<select name="Category" id="Category" >
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="opel">Opel</option>
				<option value="audi">Audi</option>
			</select><br>
			<label for="Category">Job Experience:</label>
			
			<select name="Category" id="Category" >
				<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
			</select><br>
			
			
			<input type="submit" value="Search">
			</form>
			
			</body>
			</html>			