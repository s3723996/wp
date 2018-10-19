<?php
session_start();

include("productarray.php");


//initialise session cart variable
if(empty($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

// Function that displays the correct product based on "ID" in url
// if the ID is equal to product $i display page contents

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
include("header.php");
?>
	<body>
	<a href="products.php">
		<input type="button" value="BACK TO STORE">
	</a>
	<a href="checkout.php">
		<input type="button" value="VIEW CART">
	</a>
	<form action="checkout.php" method="post">
		<h3><?php echo $title ?></h3>
		<div>
			<br>
			<span><img src="<?php echo $img?>" class="prod_img"/></span>
			<br>
			<h3>$<?php echo $price ?></h3>
			<br>
			<p><?php echo $desc?></p>
			<br>
			<select name="<?php echo $name?>[qty]">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<p>
				<input type='submit' name='append' value='ADD TO CART'/>
			</p>
				<input type="hidden" name="ID" value="<?php echo $id ?>">
				<input type="hidden" name="Title" value="<?php echo $title ?>">
				<input type="hidden" name="Price" value="<?php echo $price ?>">
		</div>
	</form>
	</body>
<?php
include("footer.php");
?>





