<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Registration</title>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
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
		<h2>Account Register</h2>
	</div>
	<form method="post" action="regAcc.php">
		<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $username;?>" placeholder="username" required>
		</div>
		<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $email;?>" placeholder="@gmail.com"required>
		</div>
		<div class="form-group">
				<label>Password</label>
				<input type="password" name="password_1" class="form-control" required>
		</div>
		<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="password_2" class="form-control" required>
		</div>
		<!--display validation errors here -->
		<?php include('errors.php'); ?>
		<center>
		<div class="form-group">
			<button type="submit" name="register" class="btn btn-primary">Register</button>
		</div>
		</center>
		<p>
			Already a Boarder? <a href="login.php">Sign in!</a>
		</p>
	</form>
		<script>
			$(function(){
				Swal.fire({
					'title': 'Hello',
					'text': 'Kindly fill up to register your account',
					'type': 'success'
				})
			});
		</script>
</body>
</html>
