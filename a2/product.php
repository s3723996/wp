
<?php

// saves session variable, using the session start remember the user name which is need to login. Very important for a login session!
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>STORE</title>
</head>

<body>
    <header id="product_header">
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

    <!--    PRODUCT 1-->
    <div id="product_box">
        <div class="store_img">
            <?php echo "<img src='A2media/chain_earrings.png' class='storeimages'/>";?>
        </div>
        <div class="product_heading">
            <h2>
                <?php echo '<a href="product_1.php" class="store_link">PEARL LOOP EARRINGS</a>' ?>
            </h2>
            <h2>$30.00</h2>
        </div>

        <!--    PRODUCT 2-->
        <div class="store_img">
            <?php echo "<img src='A2media/rope_necklace.png' class='storeimages'/>";?>
        </div>
        <div class="product_heading">
            <h2>
                <?php echo '<a href="product_2.php" class="store_link">CHAIN NECKLACE</a>' ?>
            </h2>
            <h2>$60.00</h2>

        </div>

        <!--    PRODUCT 3-->
        <div class="store_img">
            <?php echo "<img src='A2media/buckle_belt.png' class='storeimages'/>";?>
        </div>
        <div class="product_heading">
            <h2>
                <?php echo '<a href="product_3.php" class="store_link" >BUCKLE BELT </a>'; ?>
            </h2>
            <h2>$120.00</h2>

        </div>
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
