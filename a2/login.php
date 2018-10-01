<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>LOGIN</title>
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

    <!--    Form will get username and password inputs and sent to the page called upon by the PHP function-->
    <?php
    echo $_POST['username'];
    echo "<br>";
    echo $_POST['password']; ?>
        <div class="loginformbox">

            <form action="login.php" method="post">
                <label>Username</label><br><input type="text" name="username" autofocus/>
                <br><br>
                <label>Password</label><br><input type="password" name="password" />
                <br><br>
                <input type="submit" value="LOGIN">
            </form>
        </div>

</body>
<footer>
    &copy; Copyright 2018 PIECES by YJ, Saadiya Fourie [s3723996]
</footer>

</html>
