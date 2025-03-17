<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	if(isset($_POST['submit'])){
		
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		
		
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "project2024";
		
		
		
		$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
			
		if($conn){
			$sql = "INSERT INTO stu_220021018098(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
		}
		
		if($conn->query($sql) == TRUE){
			echo("<h1>" . "Data inserted succesfully" . "</h1>");
		}else{
			echo "Please resubmit the data" . $conn->error;
		}$conn->close();
		
	}
	?>
</body>
</html>