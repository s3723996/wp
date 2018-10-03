<?php session_start();


//STORE CART DATA IN ARRAYS IN A SESSION VARIABLE
function addToCart(){
    if(empty($_SESSION['prod'])){
    $_SESSION['prod'] = array();
    $_SESSION['size'] = array();
    $_SESSION['colour'] = array();
    $_SESSION['price'] = array();
    $_SESSION['qty'] = array();
    }

//  USE: array_push(); method to take posted variable name from button event
    array_push($_SESSION['prod'], $_POST['name']);
    array_push($_SESSION['qty'], $_POST['quantity']);


//    Gets the posted item and seperates size, name, and price from product input tag
    $details = explode("|", $_POST['item']);

    array_push($SESSION['size'], $details[0]);
    array_push($SESSION['colour'], $details[1]);
    array_push($SESSION['price'], $details[2]);
}
?>


      <?php

            $sql = "SELECT id, name, description, price FROM php_shop_products;";

            $result = mysql_query($sql);

            while(list($id, $name, $description, $price) = mysql_fetch_row($result)) {

                echo "<tr>";

				echo "<td>$name</td>";
				echo "<td>$description</td>";
				echo "<td>$price</td>";
				echo "<td><a href=\"cart.php?action=add&id=$id\">Add To Cart</a></td>";

			     echo "</tr>";
            }

        ?>
