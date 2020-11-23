<?php 

    // start session
    session_start();

    // if a cart session to hold items does not exist
    if(!isset($_SESSION['cart']))
    {
        // create session to be used
        $_SESSION['cart']= array();
    }

    //if a cart has just been clicked add item to cart
    if(isset($_POST['code']))
    {
        // get info out of post
        $prodCode = $_POST['code'];
        $prodName = $_POST['name'];
        $prodImg = $_POST['img'];
        $prodPrice = $_POST['price'];

        //get cart array
        $cartArray = $_SESSION['cart'];

        //variable for the storage index, set to the next open index by default
        $storeIndex = count($cartArray);

        //loop through the cart to see if the item has already been picked
        for($index = 0; $index < count($cartArray); $index++)
        {
            //if the item is already stored
            if($cartArray[$index]['code'] == $prodCode)
            {
                $storeIndex = $index;
            }
        }
        // if this item has not been stored, we want to make a spot for it 
        if(!isset($cartArray[$storeIndex]['code']))
        {
            //store the item info
            $cartArray[$storeIndex]['code'] = $prodCode;
            $cartArray[$storeIndex]['name'] = $prodName;
            $cartArray[$storeIndex]['img'] = $prodImg;
            $cartArray[$storeIndex]['price'] = $prodPrice;

            //set quantity to 1
            $cartArray[$storeIndex]['qty'] = 1;


        }
        else
        {
            //just add 1 to the quantity
            $cartArray[$storeIndex]['qty'] +=1;
        }

        //add cartarray to the cart session
        $_SESSION['cart'] = $cartArray;

        //clear the post for the next input
        $_POST = array();
    }
?>