<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "capyhour");

    //check connection
    if($conn === false)
    {
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Cart</title>
</head>

<body class="brown">

    <nav>
        <div class="nav-wrapper teal darken-2">
            <a href="home.php" class="brand-logo"><img src="FirstGort.png" width="75" height="75"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="home.php">Home</a></li>
                <li><a href="nftPage.php">NFTs</a></li>
                <li><a href="costumePage.php">Costumes</a></li>
                <li><a href="miscPage.php">Merch</a></li>
                <li><a href="cartPage.php">Cart</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <center><h1 style="font-family: arial black">Your Cart</h1></center>

        <?php 
            //easy to use session variables
            $totAndButton = FALSE;
            $custid = $_SESSION['custID'];
            $instanceID = $_SESSION['instance'];

            //obtaining the products of what is ordered with only the instanceID
            $sql = "SELECT prodName, prodPrice 
            FROM orders JOIN items ON orders.prodID = items.prodID
            WHERE orderID = $instanceID
            ";
            $result = mysqli_query($conn, $sql);

            //query for the sum of the product prices
            $sumPrice = "SELECT SUM(prodPrice) AS totPrice 
            FROM orders JOIN items ON orders.prodID = items.prodID
            WHERE orderID = $instanceID"
            ;
            $priceResult = mysqli_query($conn, $sumPrice);
            $priceRow = mysqli_fetch_assoc($priceResult);
            $totalPrice = $priceRow['totPrice'];
        

            //display the current order
            while ($row = mysqli_fetch_assoc($result)) {
                $totAndButton = TRUE;
                ?> <center><h2><?php echo $row['prodName'];?>   $<?php echo $row['prodPrice'];?></h2></center> <?php
            }

            //display total and checkout button only if something has been ordered
            if($totAndButton === TRUE) {
                ?>
                <center><h2>Order Total: $<?php echo $totalPrice; ?> </center>
            
                <br><center><button class="waves-effect waves-light btn" onclick="orderAlert()">Place Order</button></center>

                <script>
                    function orderAlert() {
                    alert("Order Placed!");
                    window.location.href = "logout.php";
                    }
                </script>
                <?php
            } 
        ?>
    </div>

</body>

</html>