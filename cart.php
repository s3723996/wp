<?php 

session_name("YJ");
session_start();

include("productarray.php");

if (empty($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
echo "<h1>CART PAGE</h1>";
// $action = (isset($_GET['action'])) ? $_GET['action']: "";
// switch($action)
//     {
//     	case "clearcart":
//             $_SESSION['cart'] = "";
//             break;
//     }
array_push($_SESSION['cart'], $_GET['id']);

// $_SESSION['cart'] ="";	
// echo $_SESSION['cart'];// output: Array ( [0] => "id" )
$a_length = count($products);

// print_r ($_SESSION['cart']);
// echo "<br>";
// print_r ($_SESSION['cart'][0]);
// echo "<br>";
$sumArray = array();


foreach ($_SESSION['cart'] as $k => $v){
	// echo $v;
	for($i = 0; $i < $a_length; $i++){
		$sumArray = array();
		$price = number_format($products[$i]["Price"], 2, ".", " ");
		$title = $products[$i]["Title"];
		

		if ($v == $products[$i]["ID"]){
			array_push($sumArray,$price);
echo <<<DISP
	<span>$title</span>
	<span>\$$price</span>
	<br>
DISP;
		}
	}
}



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



// for ($i = 0; $i < $a_length; $i++){
// 	if ($_GET['id'] == $products[$i]["ID"]){

// 	$id =$products[$i]["ID"];
// 	$title = $products[$i]["Title"];
// 	$price = number_format($products[$i]["Price"], 2, ".", " ");
// 	$desc = $products[$i]["Description"];
// 	$img = $products[$i]["Image"];
// 	}
// }

echo <<<DISP

	<br>
	<a href="products.php">
		<input type="button" value="BACK TO STORE">
	</a>
	<a href="cartclear.php">
		<input type="button" value="CLEAR CART">
	</a>

DISP;







?>