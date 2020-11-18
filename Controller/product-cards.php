<?php

Function makeProductCard($prodCode, $prodName, $prodImg, $prodType, $prodDesc, $prodPrice, $colNum){


    echo "
      <div class='product-card-grid' style='grid-column: {$colNum}; grid-row: 1;'>
          <p class='product-header-text'>
              <span>Fortisure</span>
              <span>{$prodType}</span>
          </p>
          <img src='./View/Public/Images/Products/{$prodImg}.png'>
          <p class='product-card-desc'>{$prodName}.<br>{$prodDesc}</p>
          
          
            <input name='code' value='{$prodCode}' hidden/>
            <input name='name' value='{$prodName}' hidden/>
            <input name='img' value='{$prodImg}' hidden/>
            <input name='price' value='{$prodPrice}' hidden/>
            
            <button type='submit' class='btn-add-to-cart btn btn-success' onclick=\"ajaxCard('$prodCode', '$prodName', '$prodImg', '$prodPrice')\">
              Add To Cart | <span>\${$prodPrice}</span>
            </button>
          


      </div>
    ";

  }
?>
