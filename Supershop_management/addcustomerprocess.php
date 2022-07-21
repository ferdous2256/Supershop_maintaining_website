
<?php

//$conn = mysqli_connect('', '', '', '');

$conn = mysqli_connect('localhost', 'root', '', 'supershop');
//include_once 'database.php';
if(isset($_POST['save']))
//if($_SERVER['REQUEST_METHOD']=='POST')
{	 
	 //$cashier_id_f = $_POST['cashier_id'];
	 $customer_name = $_POST['customer_name'];
	 $mobile_number = $_POST['mobile_number'];
	 $address = $_POST['address'];
	 $email_id = $_POST['email_id'];
	 $total_point = $_POST['total_point'];


	 
	 
	 
	 $sql = "INSERT INTO customertable (customer_name, mobile_number, address, email_id, total_point) 
	 VALUES ('$customer_name','$mobile_number','$address', '$email_id', '$total_point')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>