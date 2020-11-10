<?php
  //setting the column variable to start at 2 so the first coupon is in column 2
  $colNum = 2;
  
  //print each coupon in the array
  for($index = 0; $index < count($productInfo); $index++){
    echo "
      <div class='product-card-grid' style='grid-column: {$colNum}; grid-row: 1;'>
          <p class='product-header-text'>
              <span>Fortisure</span>
              <span>{$productInfo[$index][0]}</span>
          </p>
          <img src='./View/Public/Images/Products/{$productInfo[$index][1]}.jpg'>
          <p class='product-card-desc'>{$productInfo[$index][2]}</p>
          <button class='btn-add-to-cart btn btn-success'>
              Add To Cart | <span>\${$productInfo[$index][3]}</span>
          </button>
      </div>
    ";
    //increment column num
    $colNum++;
  }
?>
