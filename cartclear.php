<?php
session_start();
unset($_SESSION['cart']);


echo <<<DISP
	<a href="products.php">
		<input type="button" value="BACK TO STORE">
	</a>
	<a href="cart.php">
		<input type="button" value="VIEW CART">
	</a>
DISP;
?>