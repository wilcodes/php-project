<?php
function renderMessage($error)
{
     $modalTitle = "";
     $modalMessage = "";

     if (!$error) {

          $modalTitle = "Item added to the cart ";
          $modalMessage = "Select an option below to continue";
     } else {

          $modalTitle = "Error";
          $modalMessage = "Please try again, unexpected error";
     }

     echo ("
     <div class='backdrop'> </div>
     <div class='modal-dialog zIndex' >
     <div class='modal-content'>
     <div class='modal-header'>
       <h5 class='modal-title' id='exampleModalLabel'>$modalTitle</h5>
      <a href='./index.php'> <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button> </a>
     </div>
     <div class='modal-body'>
       $modalMessage
     </div>
     <div class='modal-footer'>
         
           <button type='button' class='btn btn-success' ><a href='./index.php'>  Keep Shopping </a></button>
           <button type='button' class='btn btn-dark' ><a href='../checkout/checkout.php'>  Checkout</a></button>
         </div>
         </div>
     ");
};