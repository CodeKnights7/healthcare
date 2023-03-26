<?php
	if(isset($_POST['user']) || isset($_POST['mobno']) || isset($_POST['password'] ))   {
	$Regno= $_POST['user'];
    $Email= $_POST['mobno'];
    $Password= $_POST['password'];
	// $Confirm_Password = $_POST['conpass'];
	// Database connection
	$conn = new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into studentsignup(Regno,Email,Password) values(?, ?, ?)");
		$stmt->bind_param("isss",$Regno, $Email, $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
	

	}
	
?>
