<?php
session_start();

include("productarray.php");

include("header.php");

echo <<<DISP
<a href="checkout.php">
		<input type="button" value="VIEW CART">
</a>
DISP;
// ---------------PRODUCT  ARRAY ---------------
foreach ($products as $k => $v){
	$id = $v['ID'];
	$title = $v['Title'];
	$price = $v['Price'];
	$desc = $v['Description'];
	$img = $v['Image'];
	echo<<<DISP
	<div>
		<a href="product.php?id=$id">
		<img src=$img class="prod_img">
		<br>
		<span>$title</span>
		<br>

		</a>
		<span>\$$price</span>
	</div>
DISP;
}
?>

</body>
</html>

<?php
include("footer.php");
?>



