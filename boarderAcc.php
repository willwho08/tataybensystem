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
			<title>User Accounts</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<script src="https://kit.fontawesome.com/a076d05399.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">	
  			<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">		
</head>
<body>
	<style type="text/css">
		body{
			background-image:url(back.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<div class="sidebar">
		<?php if (isset($_SESSION['success'])):?>
			<div class="error success"></div>
				<h3>
					<?php
						echo $_SESSION['success'];	
						unset($_SESSION['success']);
					?>
				</h3>
		<?php endif ?>
		<?php if (isset($_SESSION["username"])): ?>
			<header><p>Welcome<strong></br><i class="fas fa-user-circle"></i> <?php echo $_SESSION['username']; ?></strong></p></header>
			<?php endif ?>
		<ul>
			<li><a href="boardersInfo.php" <?php sleep(1);?>><i class="fas fa-address-card"></i>Boarder Information</a></li>
			<li><a href="boarderAcc.php"><i class="fa">&#xf0c0;</i>Boarder Account</a></li>
			<li><a href="#financesmodal" data-toggle="modal" data-target="#financesmodal"><i class="fas fa-hand-holding-usd"></i>Finances</a></li>
			<li><a href="#policymodal" data-toggle="modal" data-target="#policymodal"><i class="fas fa-info-circle"></i>Policy</a></li>
			<li><a href="#terms" data-toggle="modal" data-target="#termsmodal"><i class="fas fa-exclamation-triangle"></i>Terms & Conditions</a></li>
			<li><a href="#aboutmodal" data-toggle="modal" data-target="#aboutmodal"><i class="fas fa-question-circle"></i>About</a></li>
			<li><p><a href="boardersInfo.php?logout='1'" style="color: red;"><i class="fas fa-share-square"></i>Logout</a></p></li>
		</ul>
	</div>	

<!--FINANCES Modal-->

<div class="modal fade" id="financesmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2>FINANCES</h2>
      </div>
      <div class="modal-body">
       <div class="container-fluid">
		<div class="form-group">
		</div>
		<h2><center>Monthly Bills</center></h2>
			<?php
	$mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));
	$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
?>

	<table class="table table-bordered">
		<thead>
		<tr>
			<th><center><i class="fas fa-water"></i>Water Bill</center></th>
			<th><center><i class="fas fa-bolt"></i>Electric Bill</center></th>
			<th><center><i class="fas fa-home"></i>Rent Bill</center></th>	
			<th><center>Total</th>
		</tr>
		</thead>
		<?php
	($row = $result->fetch_assoc());
?>
	<tr>
		<td><center><?php echo $row['water_bill'];?></center></td>
		<td><center><?php echo $row['electric_bill'];?></center></td>
		<td><center><?php echo $row['rent_bill'];?></center></td>
		<td><center>₱2,700</td>	
	</tr>
	</table>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--End-->

<!--POLICY Modal-->
<div class="modal fade" id="policymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2>POLICY</h2>
      	</div>
      	<div class="modal-body">
       	<div class="container-fluid">
		<div class="form-group">
		</div>
		<center><h2>Boarding House Policy</h2></center>
		<b>
			<h3>DO'S</h3>
			<p><i class="fa fa-check-circle" style="color: green"></i>Always keep the restroom & kitchen clean.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>Unplug all the devices from the outlet when leaving the rooms.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>The Boarders are responsible for the behaviour/ conduct of their guests while on the property.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>Only people whose names appear on the contract may live at the premises.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>For everyone’s safety, it is important we know who is in the building overnight.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>All tenants must be respectful of other people’s property.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>The residents shall accept responsibility for their room and all its contents.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>Rooms are to be kept in a clean and tidy condition.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>All fittings, furnishings and chattels must be maintained in a good, sound condition.</p>
			<p><i class="fa fa-check-circle" style="color: green"></i>Boarders are liable for the repairs or replacement of any damage they cause.</p>
			<h3>DONT'S</h3>
			<p><i class="fa fa-times-circle" style="color: red"></i>Boarders should not delete or edit information of other boarders on the system,failure to follow this rule will result to eviction.</p>
			<p><i class="fa fa-times-circle" style="color: red"></i>No smoking inside the bedrooms.</p>
			<p><i class="fa fa-times-circle" style="color: red"></i>Pets are not allowed on the premises.</p>
			<p><i class="fa fa-times-circle" style="color: red"></i>No Guests are allowed in boarder’s rooms after 8pm and before 7am unless by prior arrangement.</p>
			<p><i class="fa fa-times-circle" style="color: red"></i>No parties or excessive noise at any time. All tenants are entitled to quiet enjoyment of their bedrooms.</p>
			<p><i class="fa fa-times-circle" style="color: red"></i>Tenants involved in fighting will be evicted.</p>
			<p><i class="fa fa-times-circle" style="color: red"></i>Harassment of any form to other boarders will not be tolerated and may result in immediate eviction.</p>
			<p><i class="fa fa-times-circle" style="color: red"></i>No private furniture be brought into the boarding house without written approval from the landlord. Only the supplied Mattresses, beds and furniture are permitted in the bedrooms are allowed.</p>
			<p><i class="fa fa-times-circle" style="color: red"></i>The boarders shall not paint, deface, or make any alterations to the rooms.</p>
		</b>
		</div>
      	</div>
     	<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	</div>
    </div>
  </div>
</div>

<!--End-->

<!--Term & Conditions Modal-->
<div class="modal fade" id="termsmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <center><h2>TERMS & CONDITION</h2></center>
      </div>
      <div class="modal-body">
       <div class="container-fluid">
		<div class="form-group">
		</div>
			<h3>RENT</h3>
					<p><b>⦿Pay the agreed rent on or before first week of the month.</b></p>
					<p><b>⦿All bills should be paid before or after the said week of payment,failure to do so may result to eviction.</b></p>
					<p><b>⦿Pay any applicable charges/rent directly into the boarding house owner.</b></p>
					<p><b>⦿Notify the owner if payment of bills will not be given on the given date of payment.</b></p>
					<p><b>⦿Failure to comply the payment may result to additional charges if owner not notified.</b></p>
			<h3>VACATING</h3>
					<p><b>⦿Notice to vacant to be given 2 week prior to leaving – failure to do so may mean you are charged a week’s rent</b></p>
					<p><b>⦿Make sure to clean the room when you vacate.  If the room is not clean and tidy you will be charged the cost to make it clean and tidy. You are responsible for the rent being paid until all keys and tags are returned.</b></p>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--End-->

<!--About Modal-->

<div class="modal fade" id="aboutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <center><h2>ABOUT</h2></center>
      </div>
      <div class="modal-body">
       <div class="container-fluid">
		<div class="form-group">
		</div>
			<p><b>This system is made for a boarding house owner.Following are the features of this system:</b></p>
			<p><b>➼Easy to use</b></p>
			<p><b>➼Friendly User Interface</b></p>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--End-->

<!--DELETE Modal-->

<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2>DELETE</h2>
      </div>
      <div class="modal-body">
       <div class="container-fluid">
		<form action="deleted.php" method="POST">
			<input type="hidden" name="delete_id" id="delete_id">
			<h4>Do you want to delete this Boarder User Account?</h4>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="submit" name="deletedata" class="btn btn-danger">YES</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--End-->


<?php
	$mysqli = new mysqli('localhost', 'root', '', 'registration') or die(mysqli_error($mysqli));
	$result = $mysqli->query("SELECT * FROM users") or die($mysqli->error);
?>

<div class="container">
	<table class="table table-bordered table-dark" cellspacing="0">
		<thead>
		<tr>
			<th><center><i class="fa fa-id-badge"></i>&nbsp;ID</center></th>
			<th><center>Useraname</center></th>
			<th><center>Password</center></th>
			<th><center>ACTION</center></th>	
		</tr>
		</thead>
		<?php
	while ($row = $result->fetch_assoc()):
?>
	<tr>
		<td><center><?php echo $row['id'];?></center></td>
		<td><center><?php echo $row['username'];?></center></td>
		<td><center><?php echo $row['password'];?></center></td>
		<td>
			<center>
			<button type="button" class="btn btn-danger deletebtn">DELETE USER
			</button>
		</center>
		</td>
		</td>		
	</tr>
<?php
	endwhile;
?>
	</table>
</div>
</div>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function () {
		$('.deletebtn').on('click', function() {
			$('#deletemodal').modal('show');

				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function() {
					return $(this).text();
				}).get();

				console.log(data);

			$('#delete_id').val(data[0]);

		});
	});
</script>