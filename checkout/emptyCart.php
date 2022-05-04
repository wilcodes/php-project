<?php
function renderMessage()
{

     echo ("
     <div class='backdrop'> </div>
     <div class='modal-dialog zIndex' >
     <div class='modal-content'>
     <div class='modal-header'>
       <h5 class='modal-title' id='exampleModalLabel'>Your cart is empty</h5>
      <a href='../catalog/index.php'> <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button> </a>
     </div>
     <div class='modal-body'>
       Go to the catalog page and choose some items and shop!
     </div>
     <div class='modal-footer'>
         
           <button type='button' class='btn btn-success' ><a href='../catalog/index.php'> Catalog </a></button>
         </div>
         </div>
     ");
};