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
    <h2>CART PAGE</h2>

    <?php
    $_SESSION['username'] = "";
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
