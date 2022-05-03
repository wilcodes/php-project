<?php
//   foreach ($_SESSION['cart'] as $value => $key) {

//      foreach ($key as $keyC => $valueC) {

//           echo ($valueC . '<br/>');
//           echo (" <span> $keyC  </span> <br/>");
//      }
// };
function showItems($items)
{

     if (isset($items)) {
          foreach ($items as $key => $value) {
               $name = $value['article'];
               $quantity = $value['items'];
               $price = $value['price'];

               echo ("
                              <tr>
                            
                              <td>$name</td>
                              <td>$quantity</td>
                              <td>$price</td>
                               </tr>
                    ");
          };
     };
};