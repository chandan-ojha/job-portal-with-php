<?php
	$hostname='localhost';
	$username='root';
	$userpass='';
	$dbname='job portal';
	
	$dbcon=mysqli_connect($hostname,$username,$userpass) or die ('Database Connection fail');
	
	mysqli_select_db($dbcon,$dbname);
	
	if(isset($_POST['submit'])){
		
		$email = $_POST['email'];
		$jobtitle =$_POST['jobtitle'];
		$location=$_POST['location'];
		$jobtype=$_POST['jobtype'];
		$jobdescription=$_POST['jobdescription'];
		$companyname=$_POST['companyname'];
		$companydescription=$_POST['companydescription'];
		$companyweblink=$_POST['companyweblink'];
		
		$name = $_FILES['file']['name'];
		$target_dir = "companylogo/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
		
		// Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		// Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif","pdf");
		
		
		
		
		// Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
		$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
		
		
		
		$querry="insert into postjob(email,jobtitle,location,jobtype,jobdescription,companyname,companydescription,companyweblink,name,image) 
		VALUES('$email', '$jobtitle','$location','$jobtype', '$jobdescription','$companyname','$companydescription', '$companyweblink','$name','$image')";
		
		
		
		// Upload file
		move_uploaded_file($_FILES['file']['tmp_name'],'companylogo/'.$name);
		$run=mysqli_query($dbcon,	$querry);
		
		if($run){
		
		echo 'Job information save successfully!';
		}
		else{
		echo 'Job information do not save successfully!';
		}
		
		
		}
		
		
		
		}
		
		
		?> 		