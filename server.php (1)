<?php
	session_start();
	$username = "";
	$email = "";
	$admin = "";
	$errors = array();
	

	//connect to db
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	//Register button clicked
	if (isset($_POST['register'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']); 
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		//form fields are filled properly

		if ($password_1 != $password_2) {
			array_push($errors, "Password does not match");
		}

		//if there are no errors,save user to db
		if (count($errors) == 0) {
			$password = md5($password_1);
			$sql = "INSERT INTO users (username, email, password) 
						VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] =  $username;
			header('location: reginfo.php'); //redirect to homepage
		}
	}

	//log user from login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']); 
		$password = mysqli_real_escape_string($db, $_POST['password']);

		

		if (count($errors) == 0){
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password= '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1){
				sleep(1);
				//login the user
				$_SESSION['username'] =  $username;
				header('location: boardersInfo.php'); //redirect to homepage
			}
			else{
				array_push($errors, "Invalid Account");
			}
		}
	}

	//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
?>