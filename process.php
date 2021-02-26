<?php

$mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phonenumber = $_POST['phonenumber'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];

	$mysqli->query("INSERT INTO data (name, email, address, phonenumber, gender, birthdate) VALUES('$name', '$email', '$address', '$phonenumber', '$gender', '$birthdate')") or die($mysqli->error);

				//login the user
				header('location: boardersInfo.php'); //redirect to homepage
				}
?>