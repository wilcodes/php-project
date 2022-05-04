<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php require "./getData.php"; ?>
<?php require "./renderItems.php"; ?>
<?php require "./modalMessage.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="utf-8">
     <title> School Essentials</title>


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="../styles.css">


</head>

<body>

     <nav>
          <div>
               <a href="">
                    <img src="../assets/logo.png" alt="" class="nav-logo">
               </a>
          </div>

          <div class="linksBox">
               <ul>
                    <li><a href="./index.php"> Catalog </a> </li>
               </ul>
               <ul>
                    <li><a href="../checkout/checkout.php"> Checkout </a> </li>
               </ul>

          </div>

     </nav>


     <main>

          <h1>Select your Item</h1>



          <?php

          // assigning file to variable
          $catalogFile = "../catalog.dat";


          //Calling get data function to separate and organize our data from catalog.dat
          $items = getData($catalogFile);


          // Passing the array into a function that returns our items
          renderItems($items);

          if ($_SERVER["REQUEST_METHOD"] == "POST") {

               if ($_POST) {

                    $arrayTest = $_POST;

                    // foreach ($arrayTest as $value => $key) {
                    //      echo (" <span> $value  </span> <br/>");
                    //      echo ($key . '<br/>');
                    // };


                    if (!$_SESSION['cart']) {
                         $_SESSION['cart'] = array();
                    }
                    //Creating a key variable to assign into the associative session array
                    $key = $arrayTest['id'];

                    //Checking if the session with the given key exists
                    if (isset($_SESSION[$key])) {

                         //If it exist, add quantities
                         $_SESSION['cart'][$key]['items'] = $_SESSION['cart'][$key]['items'];
                    } else {
                         //If it does not exist, create array
                         $_SESSION['cart'][$key] = $arrayTest;
                    };

                    renderMessage(false);

                    // foreach ($_SESSION['cart'][3] as $value => $key) {
                    //      echo (" <span> $value  </span> <br/>");
                    //      echo ($key . '<br/>');
                    // };
               } else {
                    renderMessage(true);
               }
          }
          ?>




     </main>


     <footer>

          <div class=" mainLogoWrapper">
               <a href="./index.php">
                    <img src="../assets/logo.png" class="mainLogo" alt="" />
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