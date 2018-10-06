<?php

//print_r ($_POST);

$product1 = array( 'ID' => 100,
                'price' => 30.0,
                'description' => "Earrings");

function printProduct1($product1){
    print_r ($product1);
}


$inputError;
$message;


?>

<h1>Store</h1>
<form action="page2.php" method="post">
    <p>Loop Earrings
    <input type="submit" onclick="page2.php" name="Loop Earrings" value='<?php echo "ADD TO CART" ?>'><p>Chain Necklace
    <input type="submit" onclick="page2.php" name="Loop Earrings" value='<?php echo "ADD TO CART" ?>'><p>Buckle Belt
    <input type="submit" onclick="page2.php" name="Loop Earrings" value='<?php echo "ADD TO CART" ?>'>
</form>



<!--
<form  action="page1.php" method="post">
    <input type="submit" name="ID" value="1">
</form>
-->




<!--

    First we want to get the first row of the file, and create a product array for each product. Need to create 3 arrays(reflective of the amount of products) with 6 stored keys ID[0] OID[1] Title[2] Description[3] Option[4] Price[5] [0][1] = ID [1][1] = 1 [2][1] = 2 [3][1] = 3 [4][1] = 3 [5][1] = 3
-->
