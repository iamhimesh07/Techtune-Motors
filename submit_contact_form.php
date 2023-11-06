<?php

    // taking input value from the form by using their for and name attribute, and storing it in the respective variable.
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	// Database connection
	$conn = new mysqli('localhost','root','','techtune-motors');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact_us_form(name, email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $message);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Form Submited successfully. we will get in touch with you shortly. Stay Safe by Get your car repaired timely.";
		$stmt->close();
		$conn->close();
	}

?>



