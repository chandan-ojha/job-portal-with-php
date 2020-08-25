<?php
	$hostname='localhost';
	$username='root';
	$userpass='';
	$dbname='job portal';
	
	$dbcon=mysqli_connect($hostname,$username,$userpass) or die ('Database Connection fail');
	
	mysqli_select_db($dbcon,$dbname);
	
	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$address =$_POST['address'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$CareerObjective=$_POST['CareerObjective'];
		$JobExperience=$_POST['JobExperience'];
		$AcademicQualification=$_POST['AcademicQualification'];
		$KeySkills=$_POST['KeySkills'];
		$Activites=$_POST['Activites'];
		
		
		$querry="insert into resume(name,address,phonenumber,email,CareerObjective,JobExperience,AcademicQualification,KeySkills,Activites) 
		VALUES('$name', '$address','$phonenumber','$email', '$CareerObjective','$JobExperience','$AcademicQualification', '$KeySkills','$Activites')";;
		$run=mysqli_query($dbcon,	$querry);
		
		
		if($run){
			
			echo 'Rsume save successfully!';
		}
		else{
			echo 'Rsume  save successfully!';
		}	
	}
	
	
?> 