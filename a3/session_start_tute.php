<?php

// saves session variable, using the session start remember the user name which is need to login. Very important for a login session!
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
</head>

<body>
    <h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Store</a></li>

        </ul>
    </h1>
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
</footer>

</html>
