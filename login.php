<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styling.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>
<body>
	<style type="text/css">
		body{
			background-image:url(back.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
		<!--display validation errors here -->
			<?php include('errors.php'); ?>
		<center>
			<div class="form-group">
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</div>
		</center>
		<p>
			Not yet a Boarder? <a href="regAcc.php">Sign up!</a>
		</p>
	</form>
			<script>
				$(function(){
					Swal.fire({
						'title': 'Welcome to </br> Ben Boarding House Information and Monitoring System',
						'type': 'success'
					})
				});
			</script>
</body>
</html>