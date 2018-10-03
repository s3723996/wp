<?php

session_start();
if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
?>
<p>
    Product was successfully added to your cart.
    <a href="shopping-cart.php">View Shoppiong Cart</a>
</p>
