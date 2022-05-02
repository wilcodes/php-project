<?php

function renderItems ($items){

      foreach ($items as $value => $key) {
          $price = $key['price'];
          $description = $key['desc'];
          $url = $key['url'];
          
          echo("
          <form action=''>
          <div class='card' style='width: auto;'>
               <img src='$url' class='card-img-top'>
               <div class='card-body'>
                    <h5 class='card-title'>$description</h5>
                    <p class='card-text'>Some quick example text to build on the card title and make up the
                         bulk of
                         the card's content.</p>
                         <p> $price </p>
                    <a href='#' class='btn btn-primary'>Add to cart</a>
               </div>
          </div>
     </form>
          ");
    };
     
     
};


?>