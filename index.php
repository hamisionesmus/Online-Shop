<?php
  require_once './FUNCTIONS/components.php';
  require_once './FUNCTIONS/header.php';
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
      <?php
        myHeader("Bucket");
      ?>
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
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
        component(  "Laptop", "This is a laptop", 1000, "./IMAGES/product.jpg" );
       
      ?>
      </div>
      <!-- footer -->
      <div class="footer">
        <div class="footer-1">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="">Facebook</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">Facebook</a></li>
          </ul>
        </div>
        <div class="footer-2">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="">Facebook</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">Facebook</a></li>
          </ul>
        </div>
        <div class="footer-3">
          <h3>Quick Links</h3>
          <div class="form">
            <input type="email" placeholder="Enter your email" />
            <input type="text" placeholder="Message">
            <button class="btn">Send</button>
          </div>
          </form>
        </div>
      
    </div>
  </body>
</html>
