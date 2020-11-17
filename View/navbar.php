<!-- Navigation Bar - Inline styles -->
  <div class='navbar-grid'>
      <button class='btn-shop btn btn-primary'
              onclick="location.href='?'">
      Shop</button>
              
      <h1 class='fortisuremart-logo'>
          <span style='color: #3B3A6D;'>Fortisure</span><span style='color: #9F1224;'>Mart</span>
      </h1>
          
      <div class='cart-container'>
      
        <?php 
        
          //total variable
          $itemCount = 0;

          //loopj to see how many items are in the cart
          for($index = 0; $index < count($_SESSION['cart']); $index++)
          {
            //add item's quantity
            $itemCount += $_SESSION['cart'][$index]['qty'];
          }

          //display how many items are in the cart
          echo "<sub class='items-in-cart'>{$itemCount}</sub>"
        
        ?>
      
      </div>

      <img class='shopping-cart-img' src='./View/Public/Images/shopping-cart.png' data-toggle="modal" data-target="#modal-users-cart">
</div>
<!-- Navigation Bar -->

  <!-- cart model -->
    <div class="modal fade" id="modal-users-cart" role="dialog">
        <div class="modal-dialog">
        <!-- Modal Content-->
          <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                  <!--title -->
                  <h4 class="modal-title">Your Cart</h4>

                  <!--Closing 'X' button -->
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <!-- Modal Header -->
          
            <!-- Body -->
                <div class="modal-body">
                  <?php 
                    include './Controller/modal-display.php';
                  ?>
                </div>
            <!-- Body -->
            
            <!-- Footer -->
                <div class="modal-footer">
                  <!-- Second close button -->
                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                
                  <!-- Form -->
                      <form action="" method="post">
                            <label for="nameInput">First Name</label>
                            <input id="nameInput" name="cartCustomerName" style='width: 150px;'>

                            <label for="idInput">ID</label>
                            <input id='idInput' name="cartCustomerId" style='width:45px; margin-right:50px;'>

                            

                            <button type='submit' class='btn btn-primary'>Purchase</button>
                      </form>
                  <!-- Form -->
                </div>

            <!-- Footer -->
          </div>
        <!-- Modal Content-->
        </div>
    </div>  
<!-- cart model -->