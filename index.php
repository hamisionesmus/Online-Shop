<?php
  require_once './FUNCTIONS/components.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/style.css" />
    <title>Online Shopping</title>
  </head>
  <body>
    <!-- container -->
    <div class="container">
      <!-- header -->
      <div class="header">
        <h3>Shop</h3>
        <div class="search">
          <input type="text" placeholder="search product" />
          <button classs="btn-search"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
</svg>
</button>
        </div>
        <h3>Bucket</h3>
      </div>
      <!-- section -->
      <div class="section">
      <?php
        component("Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg");
        component( "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
       
      ?>
      </div>
      
    </div>
  </body>
</html>
