<?php
include("header.php");
echo <<<DISP
    <div class="loginformbox">
        <form action="login.php" method="post">
            <label>Username</label><br><input type="text" name="username" autofocus/>
            <br><br>
            <label>Password</label>
            <br>
                <input type="password" name="password">
            <br><br>
                <input type="submit" value="LOGIN">
                </form>
            </div>
DISP;
include("footer.php");
?>
