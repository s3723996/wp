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
