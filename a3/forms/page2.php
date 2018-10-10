<?php

session_start();
print_r ($_POST);

//foreach($_POST as $k =>$v){
//    print_r ($_POST{$v})    ;
//}


?>


<form action="page1.php" method="post">
    <input type="submit" onclick="page1.php" name="Back" value='<?php echo "BACK TO STORE" ?>'>
</form>

<h1>CART</h1>
<form action="page3.php" method="post">
    <input type="submit" onclick="page3.php" name='checkout' value='<?php echo "Checkout" ?>'>
</form>
<form action="page1.php" method="post">
<input type="submit" onclick="page1.php" name='clear' value='<?php echo "Clear Cart" ?>'>
<!-- input a function that clears the session data -->

<input type="hidden" >
</form>
