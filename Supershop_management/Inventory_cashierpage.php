<?php
session_start();
//include 'navigation.php';
include 'connection.php';

$date= date('Y-m-d', strtotime('-7 days'));
$conn=connect();
$sql= "SELECT * from products WHERE updated_at>'$date'";
$prod=$conn->query($sql);
$sql= "SELECT COUNT(*) as products FROM products";
    $total_products= mysqli_fetch_assoc($conn->query($sql));

    $sql= "SELECT SUM(quantity) as total_bought FROM products";
    $total_bought= mysqli_fetch_assoc($conn->query($sql));

    $sql= "SELECT SUM(sold) as total_sold FROM products";
    $total_sold= mysqli_fetch_assoc($conn->query($sql));

    $stock_available= $total_bought['total_bought']-$total_sold['total_sold'];
?>


<html>
<head>
      <title> </title>
      <link rel="stylesheet" type="text/css" href="style1.css">
      <style>
body {
  background-color: lightblue;
}
</style>
</head>

<body>
  <table class="styled-table">
  <thead>
      <tr>
          <!-- <th>Name</th>
           <th>Points</th> -->
           <caption> <h1> Inventory </h1> </caption>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>Dom</td>
          <td>6000</td>
      </tr>
      <tr class="active-row">
          <td>Melissa</td>
          <td>5150</td>
      </tr>
      <!-- and so on... -->
  </tbody>
</table>
</body>
</html>
