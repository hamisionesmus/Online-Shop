<?php
function component($productname, $productprice, $productimage, $productid ){
  $element = "
  <div class=\"product\"> 
  <form action=\"index.php\" method=\"post\">
    <div class=\"$productimage\">
      <img src=\"./IMAGES/laptop.jpg \" />
    </div>
    <div class=\"product-details\">
    <p class=\"product-name\">$productname</p>
      <p class=\"product-description\">
      
      </p>
    
    <div class=\"product-price\">
      <small><s>$1250</s> </small>
      <span>$ $productprice</span>
      <button type=\"submit\"class=\"btn\"name=\"add\">Add to Cart</button>
      <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
    </div>
    </div>
    </form>
  </div>";
  echo $element;
}