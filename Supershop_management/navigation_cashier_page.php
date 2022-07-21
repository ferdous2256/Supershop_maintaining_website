<?php
  //  $user= $_SESSION['user'];
  //  $userid= $_SESSION['userid'];
?>


<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=10" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/inventory.css">
        <link rel="stylesheet" type="text/css" href="css/navigation.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar-inverse">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" style="color: white;">
                    <!-- <li><a class="active" href="#">Home Page</a></li>
                    <li><a href="addProduct.php">Products</a></li>
                    <li><a href="#">View cashier Details</a></li>
                    <li><a href="addcustomer.php">Customers</a></li> -->
                    <li><a href="stock.php">Product Inventory</a></li>
                    <li><a href="#">Bill</a></li>
                    <li><a href="addcustomer.php">Add Customer</a></li>
                    <li><a href="#"> Notice </a> </li>


                    <li style="float: right;"><a href="cashierlogout.php" style="padding: 0px 20px 0px 0px;"><button class="btn btn-danger navbar-btn pull-right">Logout</button></a></li>
                    <!-- <li class="pull-right"><a href="#">Logged in as <b class="user"><?php echo $user; ?></b></a></li> -->

                </ul>
            </div>
        </nav>
    </body>
</html>
