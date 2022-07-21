<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?>
</head>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-1 text-uppercase text-white"> ADD STAFF DETAILS </div>
		<div class="container row d-flex flex-row justify-content-center mb-1">
			<div class="admin-form shadow p-2 ">
					<form action="addstaffprocess.php" method="POST">
						<!--<div class="form-group">
							<label>Cashier ID</label>
							<input type="text" name="cashier_id" value="" class="form-control" autocomplete="off">
						</div>-->

						<div class="form-group">
							<label>Staff Name</label>
							<input type="text" name="staff_name" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Mobile Number</label>
							<input type="text" name="mobile_number" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="email_id" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>NID Nubmer</label>
							<input type="text" name="nid_number" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" autocomplete="off" name= "save" value="submit" >
						
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>