<?php
session_start();
//print_r ($_POST);

$product1 = array( 'ID' => 100,
                'price' => 30.0,
                'description' => "Loop Earrings");

$product2 = array( 'ID' => 200,
                'price' => 60.0,
                'description' => "Chain Necklace");
$product3 = array( 'ID' => 300,
                'price' => 120.0,
                'description' => "Buckle Belt");

function printProducts1($product1){
    print_r ($product1);
}

function printProduct2($product2){
    print_r ($product2);
}

function printProduct3($product3){
    print_r ($product3);
}

$inputError;
$message;


?>

    <html>

    <head>
        <script type="text/javascript" src="script.js"></script>
    </head>

    <body>
        <h1>Store</h1>
        <form action="page2.php" method="post">
            <h3>
                <?php echo ($product1['description']);?>
                <?php echo '$'. ($product1['price']);?>
            </h3>
            <input type="submit" onclick="page2.php" name="<?php echo ($product1['description']);?>" value='<?php echo "ADD TO CART" ?>'>
            <input type="hidden" id="<?php echo $product1['ID']; ?>" name="<?php echo ($product1['description']);?>" value='<?php print_r ($product1);?>'>
        </form>


        <form action="page2.php" method="post">
            <h3>
                <?php echo ($product2['description']);?>
                <?php echo '$'. ($product2['price']);?>
            </h3>

            <input type="button" onclick="page2.php" name="<?php echo ($product2['description']);?>" value='<?php echo "ADD TO CART"?>'>

            <input type="hidden" id="200" name="<?php echo ($product2['description']);?>" value='<?php print_r ($product2);?>'>
        </form>

        <form action="page2.php" method="post">
            <h3>
                <?php echo ($product3['description']);?>
                <?php echo '$'. ($product3['price']);?>
            </h3>

            <input type="submit" onclick="page2.php" name="<?php echo ($product3['description']);?>" value='<?php echo "ADD TO CART" ?>'>

            <input type="hidden" id="300" name="<?php echo ($product3['description']);?>" value='<?php print_r ($product3);?>'>
        </form>
    </body>

    </html>



    <!--
<form  action="page1.php" method="post">
    <input type="submit" name="ID" value="1">
</form>
-->




    <!--

    First we want to get the first row of the file, and create a product array for each product. Need to create 3 arrays(reflective of the amount of products) with 6 stored keys ID[0] OID[1] Title[2] Description[3] Option[4] Price[5] [0][1] = ID [1][1] = 1 [2][1] = 2 [3][1] = 3 [4][1] = 3 [5][1] = 3
-->
