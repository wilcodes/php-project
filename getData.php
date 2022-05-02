<?php



// Function that gets a file and return associative array with values needed

function getData ($file){

     if (file_exists($file)) {
          $data = file($file);
     
          foreach ($data as $line) {
     
               $lineArray = explode(":", $line);
               $sku = trim($lineArray[0]);
     
               $CATALOG[$sku]['desc'] = trim($lineArray[1]);
               $CATALOG[$sku]['price'] = trim($lineArray[2]);
               $CATALOG[$sku]['url'] = trim($lineArray[3]);
              
          };
          return $CATALOG;
     } else {
          echo ("error within");
     };
     
     
};