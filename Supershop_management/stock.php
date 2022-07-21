<?php
session_start();
include 'connection.php';
$conn=connect();

$query= "select * from products";
$result = mysqli_query($conn,$query);

?>

<html>
<head>

        <link rel="stylesheet" type="text/css" href="style1.css">
        <title> Cashier Details </title>
        <style>
  body {
    background-color: lightblue;
  }
  </style>

</style>
</head>
<body>
  <div  class ="A">
      <table border="1px" align="center" style="width:600px" color:"blue">

        <tr>
        <th colspan="4"  <h2>Stock</h2> </th>
         </tr>
         <tr>
          <!-- <th></th> -->
          <th>ProductName </th>
          <th>Quantity</th>
          <th>Price </th>
          <th>Category</th>

        </tr>

        <?php

        while($rows=mysqli_fetch_assoc($result))
        {
     ?>
        <tr>
          <td>  <?php echo $rows['name'] ?>  </td>


            <td>    <?php echo $rows['quantity'] ?>     </td>

             <td>    <?php echo $rows['price'] ?>     </td>

            <td>     <?php echo $rows['category'] ?>    </td>



        </tr>
      <?php
   }
   ?>


 </table>
        <li style="float: left;"><a href="dashboard.php" style="padding: 0px 20px 0px 0px;"><button type="button" autofocus>Home Page</button></a></li>

</body>
</html>
