<?php
	$hostname='localhost';
	$username='root';
	$userpass='';
	$dbname='job portal';
	
	$dbcon=mysqli_connect($hostname,$username,$userpass) or die ('Database Connection fail');
	
	mysqli_select_db($dbcon,$dbname);
	
	if(isset($_POST['submit'])){
		
		$email = $_POST['email'];
		$name = $_POST['name'];
		$message= $_POST['message'];
		
		
		$querry="insert into contact(email,name,message) 
		VALUES('$email', '$name ','$message')";
		
		$run=mysqli_query($dbcon,$querry);
		
		if($run){
			
			echo 'Send your message successfully!';
		}
		else{
			echo 'Your message do not send!';
		}
		
	}
?> 