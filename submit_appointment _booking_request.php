<?php  ("includes/header.php")?>
<?php

    // taking input value from the form by using their for and name attribute, and storing it in the respective variable.
	$make_model = $_POST['make_model'];
	$year = $_POST['year'];
	$vin = $_POST['vin'];
	$license_plate = $_POST['license_plate'];
	$previous_mileage = $_POST['previous_mileage'];
	$customer_name = $_POST['customer_name'];
	$contact_info = $_POST['contact_info'];
	$customer_address = $_POST['customer_address'];
	$service_request = $_POST['service_request'];
	$service_history = $_POST['service_history'];
	$authorization = $_POST['authorization'];
	$estimated_cost = $_POST['estimated_cost'];
	$completion_date = $_POST['completion_date'];
	$payment_options = $_POST['payment_options'];


	// Database connection
	$conn = new mysqli('localhost','root','','techtune-motors');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into appointment_booking_request(make_model, year, vin, license_plate, previous_mileage, customer_name, contact_info, customer_address, service_request, service_history, authorization, estimated_cost, completion_date, payment_options) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssiisiiis", $make_model, $year, $vin, $license_plate,  $previous_mileage, $customer_name, $contact_info, $customer_address, $service_request, $service_history, $authorization, $estimated_cost, $completion_date, $payment_options);
		$execval = $stmt->execute();
		echo $execval;
		echo "Form Submited successfully. we will get in touch with you shortly. Stay Safe by Get your car repaired timely.";
		$stmt->close();
		$conn->close();
	}
?>

