<?php session_start(); ?>

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
        <center><h1 style="font-family: arial black">Welcome to Capy Hour, <?php echo $_SESSION['username']; ?>!</h1></center>
        <center><p style="font-family: arial black"><i>Here for all of your capybara merch needs</i></p></center>

        <div class="row">
            <div class="col s2 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="capyNFT.png">
                        <span class="card-title">Capybara NFTs</span>
                    </div>
                    <div class="card-content">
                        <p>You claim to be a capybara fan, but don't own a capybara NFT? 
                            Show your passion for natures largest rodent by owning a 
                            top of the line capy NFT</p>
                    </div>
                    <div class="card-action">
                        <a href="nftPage.php">Capy NFTs</a>
                    </div>
                </div>
            </div>

            <div class="col s6 offset-s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="capyCostume.jpg">
                        <span class="card-title">Capybara Costumes</span>
                    </div>
                    <div class="card-content">
                        <p>A costume for your capybara will only make you love them even more.
                           From batman to a hamburger, our selection of capy costumes will have you 
                           wondering if capybaras really are a higher species than ourselves.</p>
                    </div>
                    <div class="card-action">
                        <a href="costumePage.php">Capy Costumes</a>
                    </div>
                </div>
            </div>

            <div class="col s6 offset-s6 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="capyPlush.PNG">
                        <span class="card-title">Misc. Capy Items</span>
                    </div>
                    <div class="card-content">
                        <p>Don't have anything specific in mind but know you want to show your capy love? Head over to
                            the miscellaneous capybara merchandise section for a random assortment of capy items</p>
                    </div>
                    <div class="card-action">
                        <a href="miscPage.php">Capy Merch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>