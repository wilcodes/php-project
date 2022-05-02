<?php require "./getData.php"; ?>
<?php require "./renderItems.php"; ?>
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
                    <li><a href=""> Catalog </a> </li>
               </ul>
               <ul>
                    <li><a href=""> Checkout </a> </li>
               </ul>

          </div>

     </nav>


     <main>

          <h1>Select your Item</h1>
          <?php
    $catalogFile = "./catalog.dat";

    $items = getData($catalogFile);

    renderItems($items);


    // foreach ($items as $value => $key) {

    //   echo ($value . ":");
    //   echo ('<br/>');
    //   echo ($key['price']);
    //   echo ('<br/>');
    //   echo ($key['desc']);
    //   echo ('<br/>');
    //   echo ($key['url']);
    // };

    ?>

          <!-- <form action="">
               <div class="card" style="width: auto;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the
                              bulk of
                              the card's content.</p>
                         <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
               </div>
          </form>
 -->



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