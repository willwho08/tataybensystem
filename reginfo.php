<?php include('server.php');
		include('process.php');
	//if user does not have account
	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Information Registration</title>
		<link rel="stylesheet" type="text/css" href="styling.css">
		<div class="header_1">
		<h2>Registration Form</h2>
		</div>
			<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	</head>
	<body>
	<style>
		body{
			background-image:url(back.jpg);
			background-size: cover;
			background-attachment: fixed;
			}
	</style>
		<?php require_once 'process.php';?>
		<div class="row justify-content-center">
		<form action="reginfo.php" method="POST">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Lastname, Firstname MI." required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" placeholder="@gmail.com" required>
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="address" class="form-control" placeholder="Location" required>
			</div>
			<div class="form-group">
				<label>PhoneNumber</label>
				<input type="text" name="phonenumber" class="form-control" placeholder="092949*****" required>
			</div>
			<div class="form-group">
				<label>Gender</label><br/>
				<input type="radio" name="gender"  value ="Male"required/>Male<br/>
				<input type="radio" name="gender"  value ="Female" required/>Female<br/>
			</div>
			<div class="form-group">
				<label>Birthdate</label>
				<input type="date" name="birthdate" class="form-control" required>
			</div>
			<div class="form-group">
				<center><button type="submit" class="btn btn-primary" name="save">SAVE</button></center>		
			</div>
		</form>
		</div>
		<script>
			$(function(){
				Swal.fire({
					'title': 'Hello',
					'text': 'Kindly fill up all the information',
					'type': 'success'
				})
			});
		</script>
	</body>
	</html>