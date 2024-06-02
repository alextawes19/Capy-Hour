<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "capyhour");
//check connection
if($conn === false)
{
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

//get username and password
$uname = $_REQUEST['uname'];
$pword = $_REQUEST['pword'];

//query for matching username and password
$sql = "SELECT * FROM CustomerAccount WHERE username='$uname' AND password_='$pword'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $uname && $row['password_'] === $pword) {
        echo "Logged in!";
        
        //define session variables
        $_SESSION['username'] = $row['username'];
        $_SESSION['custID'] = $row['custID'];
        $thisID = $_SESSION['custID'];

        //insert new order instance with custID
        $insertInstance = "INSERT INTO orderinstance(custID) VALUES ('$thisID')";

        if(mysqli_query($conn, $insertInstance)) {
            echo "order started";
        }
        else {
            echo "<h2> something went wrong. </h2>";
        }
        
        //get most recent instance
        $result2 = mysqli_query($conn, "SELECT MAX(instance) AS max FROM orderinstance");
        $row2 = mysqli_fetch_assoc($result2);
        $_SESSION['instance'] = $row2['max'];
       
        //go to homepage
        header("Location: home.php");
        exit();

    }
    else {
        header("Location loginPage.php?error=Incorrect Username or Password");
        exit();
    }
}
else {
    header("Location: loginPage.php");
    exit();
}
?>