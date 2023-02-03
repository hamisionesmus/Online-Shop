<?php
function component(){
  $element = "
  <div class=\"product\"> 
    <div class=\"product-image\">
      <img src=\"./IMAGES/laptop.jpg \" />
    </div>
    <div class=\"product-details\">
    <p class=\"product-name\">Product 1</p>
      <p class=\"product-description\">
        laptop
      </p>
    
    <div class=\"product-price\">
      <span>$100</span>
      <button class=\"btn\">Add to Cart</button>
    </div>
    </div>
  </div>";
  echo $element;
}