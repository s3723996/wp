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
//print_r ($_SESSION['cart'][0]["Title"]);

?>

<a href="products.php">
	<input type="button" value="BACK TO STORE">
</a>


<?php
//print_r ($_SESSION['cart']);
$cartLength = count($_SESSION['cart']);
$priceArray =array();
$i = 0;
for ($i; $i < $cartLength; $i++){
    $id = $_SESSION['cart'][$i]['ID'];
    $title = $_SESSION['cart'][$i]['Title'];
    $price = $_SESSION['cart'][$i]['Price'];

    array_push ($priceArray, $price);


echo <<<DISP
    <p>$title $$price</p>
DISP;
}
//print_r ($priceArray);
//function cartTotal($priceArray, $cartTotal) {
//    $cartTotal = array_sum($priceArray);
//    return $cartTotal;

$cartTotal = 0;
$cartTotal = number_format(array_sum($priceArray), 2, ".", " ");
echo <<<DISP

<p>TOTAL = $$cartTotal</p>
DISP;

?>

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
