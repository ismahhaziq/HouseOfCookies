<?php
// Include database connection settings
include('C:\xampp\htdocs\HouseOfCookies\include\dbconn.php');

if(isset($_POST['signup'])){
	/* capture values from HTML form */
	$name = $_POST['name'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$phoneno = $_POST['phoneno'];
	$email = $_POST['email'];
	$user_name = $_POST['username'];
	$level_id = $_POST['level'];

	$sql0 = "SELECT username FROM user WHERE username = '$user_name'";
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: " . mysqli_error($dbconn));
	$row0 = mysqli_num_rows($query0);
	
	if($row0 != 0){
	header('Location: ../signup/indexrecordexist.html');
	//echo "Record is existed";
	}
	else{
	/* execute SQL INSERT command */
	$sql2 = "INSERT INTO user (username, password,name,address,phoneNo,email,level_id)
	VALUES ('" . $user_name . "', '" . $password . "', '" . $name . "', '" . $address . "', '" . $phoneno . "', '" . $email . "', '" . $level_id . "')";
	
	mysqli_query($dbconn, $sql2) or die ("Error: " . mysqli_error($dbconn));
	/* rediredt to respective page */
	header('Location: ../index.html');
	//echo "Data has been saved";
	}
}// close if isset()
	/* close db connection */
	mysqli_close($dbconn);
?>
