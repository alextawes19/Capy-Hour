<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>

    <body class="background-color: teal darken-2">
        <center>
        <?php 
        session_start(); 
        
        $conn = mysqli_connect("localhost", "root", "", "capyhour");
        //check connection
        if($conn === false)
        {
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        
        //get current user and isntance
        $currentuser = $_SESSION['username'];
        $currentInstance = $_SESSION['instance'];

        //get correct prodID
        $prodid = $_REQUEST['prodID'];

        //query for order
        $sql = "INSERT INTO orders(custID, prodID, orderID) VALUES (
            (SELECT custID FROM CustomerAccount WHERE username='$currentuser'),
            $prodid,
            $currentInstance
            )";
        
        if (mysqli_query($conn, $sql)) {
            echo "<h2>Item successfully added to cart.</h2><br>
                  <h2>Please return to the home page.</h2>";
                ?>
                <a href="home.php" class="waves-effect waves-light btn"><i class="material-icons right">home</i>Home Page</a>
                <?php
        } else {
            echo "<h2> something went wrong. </h2>" . mysqli_error($conn);
        }
        ?>
        </center>
    </body>
</html>

