<?php

function renderItems($items)
{

     foreach ($items as $value => $key) {
          $price = $key['price'];
          $description = $key['desc'];
          $url = $key['url'];
          
          echo ("
          <form >
<div class='card' style='width: auto; padding:4rem; '>
     <img src='$url' class='card-img' style='height:400px;width:auto; margin-bottom:3rem;'>
     <div class='card-body'>
          <h5 class='card-title'>$description</h5>
          <div class='input-group mb-3'>
               <span class='input-group-text'>Quantity</span>

               <input type='text' name='a_qty[" . $key . "]' class='form-control'
                    aria-label='Dollar amount (with dot and two decimal places)'>
          </div>
          <p> $price </p>

          <input type='submit' class='btn btn-primary' name='add' value='Add items to cart'></input>
     </div>
</div>
</form>
");
};
};