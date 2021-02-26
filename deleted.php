<?php
$connection = mysqli_connect('localhost', 'root','');
$db = mysqli_select_db($connection, 'registration');

	if(isset($_POST['deletedata']))
	{
		$id = $_POST['delete_id'];
		
		$query = "DELETE FROM users WHERE id='$id' ";
		$query_run = mysqli_query($connection, $query);

		if($query_run)
		{
			echo '<script> alert ("Data Deleted"); </script>';
			header("Location:boarderAcc.php");
		}
		else
		{
			echo '<script> alert ("Data Not Deleted"); </script>';
		}

	}

?>