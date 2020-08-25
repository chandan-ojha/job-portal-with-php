<?php
	$hostname='localhost';
	$username='root';
	$userpass='';
	$dbname='job portal';
	
	$dbcon=mysqli_connect($hostname,$username,$userpass) or die ('Database Connection fail');
	
	mysqli_select_db($dbcon,$dbname);
	
	if(isset($_POST['submit'])){
		
		$email = $_POST['email'];
		$jobseekername =$_POST['jobseekername'];
		$portfoliolink=$_POST['portfoliolink'];		
		
		$Pdfname = $_FILES['file']['name'];
		$target_dir = "CV/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
		
		// Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		// Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif","pdf");
		
		
		// Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $pdf = 'data:image/'.$imageFileType.';base64,'.$image_base64;	
			
			$querry="insert into jobapply(email,jobseekername,portfoliolink,Pdfname,pdf) 
			VALUES('$email', '$jobseekername','$portfoliolink','$Pdfname','$pdf')";			
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'CV/'.$Pdfname);
			$run=mysqli_query($dbcon,	$querry);
		
		if($run){
		
		echo 'Job Apply successfully Done!';
		}
		else{
		echo 'Job not done ';
		}
		
		
		}		
		
		}
		
		?> 		