<?php 
	session_start();

	include("productarray.php");

	$prod_img = array("ear.jpg", "necklace.jpg", "belt.jpg");

include("header.php");

// START OF HTML ODC
echo <<<DISP
<body>
DISP;

// ---------------PRODUCT TABLE ARRAY PLAY---------------



// ---------------PRODUCT  ARRAY PLAY---------------Å
foreach ($products as $k => $v){
	$id = $v['ID'];
	$title = $v['Title'];
	$price = $v['Price'];
	$desc = $v['Description'];
	$img = $v['Image'];
	echo<<<DISP
	<div>
		<a href="product.php?id=$id">
		<span>$title</span>
		<span>$desc</span>
		<span>\$$price</span>
		<br><img src=$img class="prod_img">
		</a>
	</div>

DISP;
}









// ---------------IMAGE ARRAY PLAY---------------
// $img1 = $gallery[0]["imgsrc"];
// $img1 = $prod_img[0];
// $img2 = $prod_img[1];
// $img3 = $prod_img[2];
// echo <<<DISP
// 	<div>
// 	<img src=$img1 class="prod_img">
// 	<img src=$img2 class="prod_img">
// 	<img src=$img3 class="prod_img">
// 	</div>
// DISP;


// END OF BODY
echo <<<DISP
</body>
</html>
DISP;
include("footer.php");
// END OF HTML DOC





?>


