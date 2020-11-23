<?php 

    //no need to start session, already started in update cart

    //check to make sure cart isn't empty
    if(count($_SESSION['cart'])>0)
    {
        //get cart array
        $cartArray = $_SESSION['cart'];

        //variable for total
        $totalPrice=0;

        //loop through array and display each item
        for($index = 0; $index < count($cartArray); $index++)
        {
            //display item
            echo
                "            
                <h4>{$cartArray[$index]['name']}</h4>
                <img src='./View/Public/Images/Products/{$cartArray[$index]['img']}.png'
                style='max-height:100px;'>
                <p>Quantity {$cartArray[$index]['qty']} <br/> \${$cartArray[$index]['price']}</p>
                <hr/>
                ";
            
            //add to calculated price
            $totalPrice += $cartArray[$index]['price'] * $cartArray[$index]['qty'];
        }

        //display total price
        echo "<p style= 'float: right;'>Total: \${$totalPrice}</p>";
    }

    else
    {
        echo "<h2>The cart is empty.</h2>";
    }
?>