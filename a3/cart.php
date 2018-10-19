<?php

session_name("YJ");
session_start();

include("productarray.php");

if (empty($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

echo "<h1>CART PAGE</h1>";

$_SESSION['cart'] ="";
// echo $_SESSION['cart'];// output: Array ( [0] => "id" )
$a_length = count($products);



//Loops through once to check id and push correct product to array
// while($i < $one ){
	if ($product1["ID"] == $_GET["id"]){

		array_push($_SESSION['cart'], $product1);
	}
	else if($product2["ID"] == $_GET['id']){

		array_push($_SESSION['cart'], $product2);
	}
	else if($product3["ID"] == $_GET['id'])
	{
		array_push($_SESSION['cart'], $product3);
	}

// ------------------- Array Calls Testing ------------------

for ($i = 0; $i < $a_length; $i++){
	if ($_SESSION['cart'][$i] == $products[$i]["ID"])
	{
		$id =$products[$i]["ID"];
		$title = $products[$i]["Title"];
		$price = number_format($products[$i]["Price"], 2, ".", " ");
		$desc = $products[$i]["Description"];
		$img = $products[$i]["Image"];

	}
}

$cartLength = count($_SESSION['cart']);

?>
	<br>
	<a href="products.php">
		<input type="button" value="BACK TO STORE">
	</a>
	<form action="checkout.php" method="post">
		<!-- <input type="button" value="CLEAR CART" name="clearCart">
		<input type="hidden" name="cart" value="<?php $_SESSION['cart'];?>">
		<input type="submit" name="<?php $userCart ?>"> -->
		<p><input type='submit' name="append" value='Append to cart'/><input type='submit' name='delete' value='Empty cart'></p>
	</form>
	<a href="checkout.php>
		<input type="button" value="CHECKOUT">
	</a>
<?php
include("footer.php");
?>






