<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php require "./renderItemC.php"; ?>
<?php require "./emptyCart.php";  ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     if (isset($_POST['clear'])) {
          $_SESSION = array();
          session_destroy();
     }
};

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     if (isset($_POST['update'])) {

          foreach ($_POST as $key => $value) {

               foreach ($_SESSION['cart'] as $keyS => $valueS) {
                    if ($keyS == $key) {
                         $_SESSION['cart'][$key]['items'] = $value;
                    }
               };
          }
     }
};

?>
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
                    <li><a href="../catalog/index.php"> Catalog </a> </li>
               </ul>
               <ul>
                    <li><a href="./checkout.php"> Checkout </a> </li>
               </ul>

          </div>

     </nav>


     <main>

          <h1>Verify the information and proceed</h1>
          <form method='post' action='./checkout.php'>
               <table class="table table-striped">
                    <thead>
                         <tr>

                              <th scope="col">Item</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Price</th>
                              <th scope="col">Total</th>
                         </tr>
                    </thead>
                    <tbody>


                         <?php

                         if (isset($_SESSION['cart'])) {
                              showItems($_SESSION['cart']);
                         };
                         ?>


                    </tbody>
               </table>


               <div style='margin: 3rem auto; text-align:right; padding: 2.5rem;'>
                    <div>
                         <h3 style='font-size: 2.5rem;'> Total Price</h3>
                    </div>
                    <div>
                         <h3>$
                              <?php
                              if (isset($_SESSION['cart'])) {

                                   echo (getTotal($_SESSION['cart']));
                              } else {
                                   echo ('0.00');
                              }
                              ?>
                         </h3>
                    </div>

                    <div>

                         <button type='submit' class='btn btn-warning' name='update'>Update</button>
                         <button type='submit' class='btn btn-danger' name='clear'>Clean Cart</button>
                    </div>
               </div>

          </form>

          <?php
          if (isset($_SESSION['cart'])) {

               $globalTotal = getTotal($_SESSION['cart']);
          } else {
               renderMessage();
          }




          ?>



     </main>


     <footer class="footer">

          <div class="mainLogoWrapper">
               <a href="./index.html">
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