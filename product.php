<?php
session_start();

include("productarray.php");


//initialise session cart variable
if(empty($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

// Function that displays the correct product based on "ID" in url
// if the ID is equal to product $i display page contents

// print_r ($products[0]);
$a_length = count($products);

for ($i = 0; $i < $a_length; $i++){
	if ($_GET['id'] == $products[$i]["ID"]){

	$id =$products[$i]["ID"];
	$title = $products[$i]["Title"];
	$price = number_format($products[$i]["Price"], 2, ".", " ");
	$desc = $products[$i]["Description"];
	$img = $products[$i]["Image"];
	}
}
echo <<<DISP


	<body>
	<a href="products.php">
		<input type="button" value="BACK TO STORE">
	</a>
	<h3>$title</h3>
	<div>
	<br>
	<span><img src="$img" class="prod_img"/></span>
	<br>
	<h3>\$$price</h3>
	<br>
	<p>$desc</p>
	<br>
	<a href="cart.php?id=$id">
		<input type="button" value="ADD TO CART">
	</a>
	<a href="cart.php">
		<input type="button" value="VIEW CART">
	</a>
	</div>


	</body>
	</footer>
	<htlm>

DISP;

// else if ($_GET['id']==)

// print_r ($_GET['id']);

// if ($){
// 	$_GET['ID'];
// }
//loop through the url and display
// name, img, desc, add to cart button, back to products button


 ?>





