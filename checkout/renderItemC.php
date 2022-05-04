<?php
// This Function returns the values of the items selected by the user on a table
function showItems($items)
{

     if (isset($items)) {

          foreach ($items as $key => $value) {

               // echo ($key . '</br>');
               // echo ($value['items']);
               $quantity = 1;
               if ($value['items']) {
                    $quantity = $value['items'];
               };

               $name = $value['article'];

               $price = $value['price'];
               // Transforming string into a number
               // $float_quantity = floatval($quantity);
               // $float_price = floatval($price);
               $float_quantity = number_format((float)$quantity, 2, '.', '');
               $float_price =  number_format((float)$price, 2, '.', '');
               //Multiply the values and assign it to total
               $total = $float_quantity * $float_price;
               $total = number_format((float)$total, 2, '.', '');
               echo ("
     
               <tr>
               <td>$name</td>
               <td>
               <input size=4  type=text  name='$name' value='$quantity'>
               </td>
               <td>$$price</td>
               <td>$$total</td>
                </tr>
     ");
          };
     };
};




function getTotal($items)
{
     $total = 0;
     foreach ($items as $key => $value) {
          $quantity = 1;
          if ($value['items']) {
               $quantity = $value['items'];
          };

          $name = $value['article'];


          $price = $value['price'];
          //Transforming string into a number
          $float_quantity = (float)$quantity;
          $float_price = (float)$price;
          //Multiply the values and assign it to total
          $innerTotal = $float_quantity * $float_price;
          $total += $innerTotal;
          $total = number_format((float)$total, 2, '.', '');
     };
     return $total;
};