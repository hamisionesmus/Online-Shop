<?php
function component($productname, $productdescription, $productprice, $productimage ){
  $element = "
  <div class=\"product\"> 
    <div class=\"$productimage\">
      <img src=\"./IMAGES/laptop.jpg \" />
    </div>
    <div class=\"product-details\">
    <p class=\"product-name\">$productname</p>
      <p class=\"product-description\">
        $productdescription
      </p>
    
    <div class=\"product-price\">
      <small><s>$1250</s> </small>
      <span>$ $productprice</span>
      <button class=\"btn\">Add to Cart</button>
    </div>
    </div>
  </div>";
  echo $element;
}