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
      <?php
        component("Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg");
        component( "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
       
      ?>
      
    </div>
  </body>
</html>
