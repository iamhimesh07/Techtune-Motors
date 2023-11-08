<?php  
	include("includes/header.php"); 
	$pageTitle = "Form Submitted Successfully.";
?>

<?php

    // taking input value from the form by using their for and name attribute, and storing it in the respective variable.
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	// Database connection
	// $conn = new mysqli('localhost','root','','techtune-motors');
	// if($conn->connect_error){
	// 	echo "$conn->connect_error";
	// 	die("Connection Failed : ". $conn->connect_error);
	// } else {
	// 	$stmt = $conn->prepare("insert into contact_us_form(name, email, message) values(?, ?, ?)");
	// 	$stmt->bind_param("sss", $name, $email, $message);
	// 	$execval = $stmt->execute();
	// 	// echo $execval;
	// 	echo "Form Submited successfully. we will get in touch with you shortly. Stay Safe by Get your car repaired timely.";
	// 	$stmt->close();
	// 	$conn->close();
	// }

	$conn = new mysqli('localhost','root','','techtune-motors');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact_us_form(name, email, message) values(?, ?, ?)");
		$stmt->bind_param("sss",$name, $email, $message);
		$execval = $stmt->execute();
		// echo $execval;
		// echo "Form Submited successfully. we will get in touch with you shortly. Stay Safe by Get your car repaired timely.";
		$stmt->close();
		$conn->close();
	}

?>


<style>
	h1 {
            color: #333;
    }

	.s-page {
		height: 500px;
		display: flex;
		justify-content: center;
		flex-direction: column;
	}

</style>

<body>
<div class="container s-page">
        <h1>Form Submitted Successfully</h1>
</div>
</body>




<?php  include("includes/footer.php"); ?>
