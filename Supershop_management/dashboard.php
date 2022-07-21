<?php
session_start();
include 'navigation.php';
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
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" >
</head>
<body style="background-color:grey;">
<div class="row" style="padding-top: 100px;">
    <div class="leftcolumn">
        <div class="row">
            <section style="padding-left: 20px; padding-right: 20px;">
                <div class="col-sm-3">
                    <div class="card card-green">
                        <h3>Total Products </h3>
                        <h2 style="color: #282828; text-align: center;"><?php echo $total_products['products'] ?></h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card card-yellow" >
                        <h3>Products Bought </h3>
                        <h2 style="color: #282828; text-align: center;"><?php echo $total_bought['total_bought'] ?></h2>
                    </div>
                </div>
                <div class="col-sm-3 " >
                    <div class="card card-blue" >
                        <h3>Products Sold </h3>
                        <h2 style="color: #282828; text-align: center;"><?php echo $total_sold['total_sold'] ?></h2>
                    </div>
                </div>
                <div class="col-sm-3" >
                    <div class="card card-red" >
                        <h3>Available Stock </h3>
                        <h2 style="color: #282828; text-align: center;"><?php echo $stock_available ?></h2>
                    </div>
                </div>
            </section>
        </div>
        <!-- <div class="card">
            <div class="table_container">
                <h1 style="text-align:center;">Products Table</h1>
                <div class="table-responsive pl-50">
                    <table class="table table-dark" id="table" data-toggle="table" data-search="true" data-filter-control="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                        <thead class="thead-light">
                        <tr>
                           <section style="padding-left: 20px; padding-right: 20px;">
                           <div class ="shuvo text-uppercase ">
                            <th >Product_Name</th>
                           </div>

                            <th > Bought</th>
                            <th >Sold</th>
                            <th >Available in Stock</th>
                        </tr>
                        </thead>
                        <tbody>
                      //  <?php
                            //if(mysqli_num_rows($prod)>0){
                                //while($row= mysqli_fetch_assoc($prod)){
                                    //$stock= $row['bought']-$row['sold'];
                                  //  echo "<tr>";
                                  //  echo " <td>".$row['name']."</td>";

                                //    echo " <td>".$row['quantity']."</td>";

                                  //  echo  " <td>".$row['quantity']."</td>";

                                    //echo " <td>".$stock."</td>";
                                //}
                          //  }

                      //  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </div>

</div>


</body>
</html>
