
<?php

//$conn = mysqli_connect('', '', '', '');

$conn = mysqli_connect('localhost', 'root', '', 'supershop');
//include_once 'database.php';
if(isset($_POST['save']))
//if($_SERVER['REQUEST_METHOD']=='POST')
{	 
	 //$cashier_id_f = $_POST['cashier_id'];
	 $staff_name = $_POST['staff_name'];
	 $mobile_number = $_POST['mobile_number'];
	 $address = $_POST['address'];
	 $email_id = $_POST['email_id'];
	 $nid_number = $_POST['nid_number'];


	 
	 
	 
	 $sql = "INSERT INTO stafftable (staff_name, mobile_number, address, email_id, nid_number) 
	 VALUES ('$staff_name','$mobile_number','$address', '$email_id', '$nid_number')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>