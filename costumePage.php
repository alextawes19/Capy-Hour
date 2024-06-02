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
        <center><h1 style="font-family: arial black">Capybara Costumes</h1></center>
        <center><p style="font-family: arial black"><i>Drip your capy out</i></p></center>

        <div class="row">
            <div class="col s2 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="capyCostume.jpg">
                        <span class="card-title">Chill Capy</span>
                    </div>
                    <div class="card-content">
                        <p>
                            I didn't know he was chill like that! Capybaras are naturally chill, as I'm sure yours is too.
                            Drip your capy out with the "Chill Capy" costume.
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="4" name="prodID">
                            <input type="submit" class="btn blue darken-4" value="$50: Add to cart">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col s6 offset-s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="batCostume.jpg">
                        <span class="card-title">Bat Capy</span>
                    </div>
                    <div class="card-content">
                        <p>
                            I'm vengeance.
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="5" name="prodID">
                            <input type="submit" class="btn black" value="$55: Add to cart">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col s6 offset-s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="burgerCapy.png">
                        <span class="card-title">Burger Capy</span>
                    </div>
                    <div class="card-content">
                        <p>
                            I love food, you love food, capybaras love food, we all love food. Drip your
                            capy out in the "Burger Capy" costume today. 
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="6" name="prodID">
                            <input type="submit" class="btn amber lighten-3" value="$40: Add to cart">
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

</body>

</html>