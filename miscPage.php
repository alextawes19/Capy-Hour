<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Home</title>
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
        <center><h1 style="font-family: arial black">Misc. Capybara Merch </h1></center>
        <center><p style="font-family: arial black"><i>Capy merchandise</i></p></center>


        <div class="row">
            <div class="col s2 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="capyPlushy.png">
                        <span class="card-title">Capybara Plushy</span>
                    </div>
                    <div class="card-content">
                        <p>
                            The cutest little thing. Show your love for capybaras with this adorable
                            capybara plushy. 
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="7" name="prodID">
                            <input type="submit" class="btn brown lighten-1" value="$15: Add to cart">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col s6 offset-s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="gort.png">
                        <span class="card-title">Gort Tee</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Gort is my favorite capybara, just ignore his war crimes.
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="8" name="prodID">
                            <input type="submit" class="btn brown lighten-1" value="$25: Add to cart">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col s6 offset-s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="pullUp.jpg">
                        <span class="card-title">Ok I pull up</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Hop out at the after party!
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="9" name="prodID">
                            <input type="submit" class="btn brown lighten-1" value="$25: Add to cart">
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

</body>

</html>