<?php

session_start();

// INTITIALISE CART VARIABLE
if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}



// GET product ID and store it in a array['cart']
array_push($_SESSION['cart'], $_GET['id']);
?>


<p>
    Product was successfully added to your cart.
    <a href="shopping-cart.php">View Shoppiong Cart</a>
</p>
