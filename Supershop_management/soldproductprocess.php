
<?php

//$conn = mysqli_connect('', '', '', '');

$conn = mysqli_connect('localhost', 'root', '', 'supershop');
//include_once 'database.php';
if(isset($_POST['save']))
//if($_SERVER['REQUEST_METHOD']=='POST')
{
	 //$cashier_id_f = $_POST['cashier_id'];
	 $product_id = $_POST['product_id'];
	 $product_name = $_POST['product_name'];
	 $quantity = $_POST['quantity'];
	 $price = $_POST['price'];
	 $category = $_POST['category'];

	 // $created_at = $_post['created_at'];





	 $sql = "INSERT INTO products (id,name, quantity, price, category)
	 VALUES ('$product_id','$product_name','$quantity', '$price', '$category')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
