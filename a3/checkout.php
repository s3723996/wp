<?php
session_start();

include("header.php");
include("productarray.php");

if (isset($_POST["append"])) {
 	array_push($_SESSION['cart'], $_POST);
}
else if (isset($_POST["delete"])){
	unset($_SESSION['cart']);
}

// print_r ($_POST);
print_r ($_SESSION['cart']);

?>

<a href="products.php">
	<input type="button" value="BACK TO STORE">
</a>

<form action="checkout.php" method="post">
		<div>
			<p>
				<input type='submit' name='delete' value='Empty cart'>
			</p>
		</div>
</form>
<a href="form.php">
	<button type="button">CHECKOUT</button>
</a>
<?php
include("footer.php");
?>
