<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="script.js"></script>



    <title>LOGIN</title>
</head>

<body id="login_body">
    <header>
        <div class="logo" id="inner">
            <a href="index.html">
            <img src="media/Logo.png" class="desktop"/>
            <img src="media/Logo.png" class="mobile"/>
            </a>
        </div>
    </header>


    <div class="nav_bar">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="product.html">STORE</a></li>
            <li><a href="lookbook.html">SS'19</a></li>
            <li><a href="login.html">LOGIN</a></li>
        </ul><br>
    </div><br>

    <!--
    <div>
        <form action="/action_page.php">
            <br>Username:<br>
            <input type="text" name="username" required>
            <br>Password:<br>
            <input type="password" name="password"  required>
            <br><br>
            <input type="submit" value="SIGN IN">
        </form>
    </div>
-->

    <!--
    <div>
        <label>Email</label><br>
        <input type="email" name="customer[email]" id="CustomerEmail" autocorrect="off" autocapitalize="off" autofocus="">
    </div><br>

    <div>
        <label>Password</label><br>
        <input type="password" value="">
    </div>

    <div>
        <input type="submit" class="button" value="Sign In">
    </div>
-->
    <div class="loginformbox">
        <form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" id="customer_login" accept-charset="UTF-8" onsubmit="return checkLogin();">
            <input type="hidden" name="form_type" value="customer_login">
            <input type="hidden" name="utf8" value="✓">

            <div>
                <label for="CustomerEmail" class="label--hidden">Email</label><br>
                <input type="email" name="customer[email]" id="CustomerEmail" autocorrect="off" autocapitalize="off" autofocus="">
            </div>

            <div>
                <br><label for="CustomerPassword" class="label--hidden">Password</label><br>
                <input type="password" value="" name="customer[password]" id="CustomerPassword">
            </div>

            <div>
                <input type="submit" class="button" value="Sign In">
            </div><br>

            <a href="" id="recover-password-link" class="secondary-form-button">Forgotten your password?</a>
        </form>
    </div>


</body>

<footer>
    &copy; Copyright 2018 PIECES by YJ, Saadiya Fourie [s3723996]


</footer>

</html>

