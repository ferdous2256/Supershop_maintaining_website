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
		<div class="heading text-center mb-1 text-uppercase text-white"> ADD CASHIER PAGE </div>
		<div class="container row d-flex flex-row justify-content-center mb-1">
			<div class="admin-form shadow p-2 ">
					<form action="addcashierprocess.php" method="POST">
						<!--<div class="form-group">
							<label>Cashier ID</label>
							<input type="text" name="cashier_id" value="" class="form-control" autocomplete="off">
						</div>-->

						<div class="form-group">
							<label>Cashier Name</label>
							<input type="text" name="cashier_name" value="" class="form-control" autocomplete="off">
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
							<label>Password</label>
							<input type="text" name="password" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" autocomplete="off" name= "save" value="submit" >
						
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>