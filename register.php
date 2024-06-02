<!DOCTYPE html>
<html>

<head>
    <title> Registration Status </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body class="background-color: teal darken-2">
    <center>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "capyhour");

    //check connection
    if($conn === false)
    {
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }

    //get input data
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email_'];
    $username = $_REQUEST['user_name'];
    $password = $_REQUEST['password'];

    //insert data into customerInfo and CustomerAccount tables
    $sql = "INSERT INTO customerInfo(firstName, lastName, email) VALUES ('$first_name','$last_name', '$email')";
    $sql2 = "INSERT INTO CustomerAccount(username, password_, custID) VALUES ('$username', '$password', (SELECT custID FROM customerInfo WHERE email='$email'))";
    

    if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
        echo "<h2>Your account has been created please return to the login page.</h2><br>";
        ?>
        <a href="loginPage.php" class="waves-effect waves-light btn"><i class="material-icons right">person</i>Login Page</a>
        <?php
    } else{
        echo "something went wrong."
            . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);
    ?>
    </center>
</body>

</html>