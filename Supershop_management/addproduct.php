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
		<div class="heading text-center mb-1 text-uppercase text-white"> ADD PRODUCT DETATLS </div>
		<div class="container row d-flex flex-row justify-content-center mb-1">
			<div class="admin-form shadow p-2 ">
					<form action="addproductprocess.php" method="POST">
						<!-- <div class="form-group">
							<label>ID</label>
							<input type="text" name="product_id" value="" class="form-control" autocomplete="off">
						</div> -->

						<div class="form-group">
							<label>Product Name</label>
							<input type="text" name="product_name" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Quantity</label>
							<input type="text" name="quantity" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Price</label>
							<input type="text" name="price" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Category</label>
							<input type="text" name="category" value="" class="form-control" autocomplete="off">
						</div>

						<!-- <div class="form-group">
							<label>Created at</label>
							<input type="text" name="created_at" value="" class="form-control" autocomplete="off">
						</div> -->

						<input type="submit" autocomplete="off" name= "save" value="submit" >

				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>
