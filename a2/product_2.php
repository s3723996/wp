<?php

// saves session variable, using the session start remember the user name which is need to login. Very important for a login session!
    session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>'N-O-O' NECKLACE</title>
    </head>

    <body>
        <header>
            <div class="logo">
                <a href="index.php">
            <?php echo '<img src="A2media/Logo.png" id="mobile"/>';?>

            <?php echo '<img src="A2media/Logo.png" id="desktop"/>';?>

            </a>
            </div>

        </header>



        <div class="nav_bar">
            <ul id="navul">
                <li><a href="index.php">HOME</a></li>
                <li><a href="product.php">STORE</a></li>
                <li><a href="lookbook.php">SS'19</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
        </div><br>

        <div>
            <a href="<?php echo 'product.php'; ?>"> &lt BACK TO STORE
        </a>
        </div>

        <div class="lookbook_image">
            <?php echo '<img src="A2media/rope_necklace.png"/>';?>
            <h2>$60.00</h2>
        </div>

        <div>
            <p>LIMITED EDITION, PIECE FROM THE SS19 ‘NOT-ONLY-ONE’ COLLECTION CHAIN NECKLACE. ORIGINALLY PRODUCED FOR THE MELBOURNE DESIGNERS MARKET. DETAILS: * CUSTOM CHAIN MID * LOCALLY SOURCED MATERIALS * ONE-OFF PIECE WORLDWIDE SHIPPING AVAILABLE. PLEASE ALLOW 3-5 WORKING DAYS FOR PROCESSING PRIOR TO SHIPMENT. FOR OUR REFUND &amp; EXCHANGE POLICY PLEASE VISIT OUR TERMS &amp; CONDITIONS PAGE</p>
        </div>
        <?php
    $_SESSION['username'] = " ";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])){
        echo " You are not logged in";
    }
    else {
        echo " You are logged in";
    }
    ?>
    </body>
    <footer>
        &copy; Copyright 2018 PIECES by YJ, Saadiya Fourie [s3723996]
    </footer>

    </html>
