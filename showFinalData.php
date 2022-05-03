<?php

function totalBox($total)
{
     echo ("
     <div style='margin: 3rem auto; text-align:right; padding: 2.5rem;'>
     <div>
          <h3 style='font-size: 2.5rem;'> Total Price</h3>
     </div>
     <div>
          <h3> $$total </h3>
     </div>

     <div>
          <button type='button' class='btn btn-warning'>Checkout</button>
          <button type='button' class='btn btn-danger'>Clean Cart</button>
     </div>
</div>
     ");
};