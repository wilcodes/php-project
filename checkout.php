<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php require "./getData.php"; ?>
<?php require "./renderItems.php"; ?>
<?php require "./sendData.php"; ?>
<?php require "./renderItemC.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="utf-8">
     <title> School Essentials</title>


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="./styles.css">


</head>

<body>

     <nav>
          <div>
               <a href="">
                    <img src="./assets/logo.png" alt="" class="nav-logo">
               </a>
          </div>

          <div class="linksBox">
               <ul>
                    <li><a href="./index.php"> Catalog </a> </li>
               </ul>
               <ul>
                    <li><a href="./checkout.php"> Checkout </a> </li>
               </ul>

          </div>

     </nav>


     <main>

          <h1>Select your Item</h1>

          <table class="table table-striped">
               <thead>
                    <tr>

                         <th scope="col">Item</th>
                         <th scope="col">Quantity</th>
                         <th scope="col">Price</th>
                    </tr>
               </thead>
               <tbody>


                    <?php

                    if (isset($_SESSION['cart'])) {

                         showItems($_SESSION['cart']);
                    }
                    ?>
                    <!-- <tr>
                         <th scope="row">1</th>
                         <td>Mark</td>
                         <td>Otto</td>
                         <td>@mdo</td>
                    </tr>
                    
                    <tr>
                         <th scope="row">2</th>
                         <td>Jacob</td>
                         <td>Thornton</td>
                         <td>@fat</td>
                    </tr>
                    <tr>
                         <th scope="row">3</th>
                         <td colspan="2">Larry the Bird</td>
                         <td>@twitter</td>
                    </tr> -->
               </tbody>

          </table>




     </main>


     <footer>

          <div class="mainLogoWrapper">
               <a href="./index.html">
                    <img src="./assets/logo.png" class="mainLogo" alt="" />
               </a>
          </div>

          <div class="iconsWrapper">
               <ion-icon name="logo-facebook" class="icons"></ion-icon>
               <ion-icon name="logo-twitter" class="icons"></ion-icon>
               <ion-icon name="logo-instagram" class="icons"></ion-icon>
          </div>

          <div>
               <p>School Essentials 2021. All rights reserved. </p>
          </div>

     </footer>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>