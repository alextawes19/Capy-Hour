<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="custom.js"></script>

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
        <center><h1 style="font-family: arial black">Capybara NFTs</h1></center>
        <center><p style="font-family: arial black"><i>Own your capy artwork</i></p></center>

        <div class="row">
            <div class="col s2 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="capyNFT.png">
                        <span class="card-title">Ducky Friend</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Known to be natures natural extrovert. Own the "Ducky Friend" capybara NFT to show
                            you not only love capybaras, but other animals too.
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="1" name="prodID">
                            <input type="submit" class="btn purple accent-1" value="$100: Add to cart">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col s6 offset-s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="hackerCapy.png">
                        <span class="card-title">Hacker Capy</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Escape the matrix with the "Hacker Capy" capybara NFT. Show everyone that you
                            are the gamer, hacker, or badass that you tell everyone you are.
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="2" name="prodID">
                            <input type="submit" class="btn green accent-4" value="$250: Add to cart">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col s6 offset-s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="capyRick.png">
                        <span class="card-title">Capy Rick</span>
                    </div>
                    <div class="card-content">
                        <p>
                            I turned myself into a capybara Morty! I'M CAPY RICKKKKKKKKKK!
                        </p>
                    </div>
                    <div class="card-action">
                        <form action="placeOrder.php" method="post">
                            <input type="hidden" value="3" name="prodID">
                            <input type="submit" class="btn cyan lighten-3" value="$500: Add to cart">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>