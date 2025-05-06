<?php
	$FullName = $_POST['FullName'];
	$Email = $_POST['Email'];
	$phone = $_POST['phone'];
	$dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $city = $_POST['city'];
	$street = $_POST['street'];
    $region = $_POST['region'];
    $lastdonated = $_POST['lastdonated'];
	
	// Database connection
	$conn = new mysqli('localhost','nroot','newroot','blooddonation');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into donor_details(Name, Email, [phone number], dob, gender, country, city, street, region, [last donated]) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiissss",$FullName,$Email, $phone, $dob, $gender, $country, $city, $street, $region, $lastdonated);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
