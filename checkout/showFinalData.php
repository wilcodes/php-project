<?php

function totalBox($total)
{
     echo ("
     <form method='post' action='./checkout.php'>
     <div style='margin: 3rem auto; text-align:right; padding: 2.5rem;'>
     <div>
          <h3 style='font-size: 2.5rem;'> Total Price</h3>
     </div>
     <div>
          <h3> $$total </h3>
     </div>

     <div>
          <input type='hidden' name='state' value='destroy' />   
          <button type='button' class='btn btn-warning' name='update'>Update</button>
          <button type='submit' class='btn btn-danger' name='clear' >Clean Cart</button>
     </div>
     </div>
     </form>
     ");
};