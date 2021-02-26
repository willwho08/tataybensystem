<?php
$connection = mysqli_connect('localhost', 'root','');
$db = mysqli_select_db($connection, 'registration');

	if(isset($_POST['updatedata']))
	{
		$id = $_POST['id'];

		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phonenumber = $_POST['phonenumber'];
		$gender = $_POST['gender'];
		$birthdate = $_POST['birthdate'];

		$query = "UPDATE data SET name='$name', email='$email', address='$address', phonenumber='$phonenumber', gender='$gender', birthdate='$birthdate' WHERE id='$id' ";
		$query_run = mysqli_query($connection, $query);

		if($query_run)
		{
			echo '<script> alert ("Data Updated"); </script>';
			header("Location:boardersInfo.php");
		}
		else
		{
			echo '<script> alert ("Data Not Updated"); </script>';
		}

	}

?>
