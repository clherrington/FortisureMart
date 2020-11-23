<?php

    //update what's in cart
    include "./update-cart.php";

    //print the new info to the cart modal
    include './modal-display.php';

    //display number of items in the cart
    //declaring total variable
    $itemCount = 0;

    //loop to see how many items are in the cart
    for($index = 0; $index < count($_SESSION['cart']); $index++)
    {
        //add the items quantity 
        $itemCount += $_SESSION['cart'][$index]['qty'];
    }

    //display the qty to cart
    echo "<script> document.getElementById('items-in-cart').innerHTML = {$itemCount};</script>"
?>