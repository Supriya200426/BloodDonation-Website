<?php 
$link = mysqli_connect("localhost", "root", "", "blooddonation"); 

if ($link === false) { 
    die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 
		$name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$phonenumber =  $_REQUEST['phonenumber'];
		$cs =  $_REQUEST['cs'];
		$dc =  $_REQUEST['dc'];
		$iva =  $_REQUEST['iva'];
		$wt =  $_REQUEST['wt'];
		
$sql = "INSERT INTO donor details VALUES ('$name', '$email', '$phonenumber', '$cs', '$dc','$iva','$wt') "; 
    if (mysqli_query($link, $sql)) 
{ 
    echo "Records inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
        .mysqli_error($link); 
} 
mysqli_close($link); 
?>
