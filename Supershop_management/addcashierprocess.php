
<?php

//$conn = mysqli_connect('', '', '', '');

$conn = mysqli_connect('localhost', 'root', '', 'supershop');
//include_once 'database.php';
if(isset($_POST['save']))
//if($_SERVER['REQUEST_METHOD']=='POST')
{	 
	 //$cashier_id_f = $_POST['cashier_id'];
	 $cashier_name_f = $_POST['cashier_name'];
	 $mobile_number_f = $_POST['mobile_number'];
	 $address_f = $_POST['address'];
	 $email_id_f = $_POST['email_id'];
	 $password_f = $_POST['password'];


	 
	 
	 
	 $sql = "INSERT INTO cashiertable (cashier_name, mobile_number, address, email_id, password) 
	 VALUES ('$cashier_name_f','$mobile_number_f','$address_f', '$email_id_f', '$password_f')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>