<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>



<!-- Flex Slider starts -->

<div class="container flex-main">
  <div class="row">
    <div class="span12">
            
            <div class="flex-image flexslider">
              <ul class="slides">
                  <!-- Each slide should be enclosed inside li tag. -->
                  
                  <!-- Slide #1 -->
                <li>
                  <!-- Image -->
                  <img src="img/photos/slider1.jpg" alt=""/>
                  <!-- Caption -->
                  <div class="flex-caption">
                     <!-- Title -->
                     <h3>Levi's T-Shirt - <span class="color">Just $49</span></h3>
                     <!-- Para -->
                     <p>Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. </p>
                     <div class="button">
                      <a href="single-item.html">Buy Now</a>
                     </div>
                  </div>
                </li>
                
                  <!-- Slide #2 -->
                <li>
                  <img src="img/photos/slider2.jpg" alt=""/>
                  <div class="flex-caption">
                     <!-- Title -->
                     <h3>Denim Jeans - <span class="color">Just $149</span></h3>
                     <!-- Para -->
                     <p>Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. </p>
                     <div class="button">
                      <a href="single-item.html">Buy Now</a>
                     </div>
                  </div>                  
                </li>
                
                <li>
                  <img src="img/photos/slider3.jpg" alt=""/>
                  <div class="flex-caption">
                     <!-- Title -->
                     <h3>Polo Shirts - <span class="color">Just $79</span></h3>
                     <!-- Para -->
                     <p>Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. </p>
                     <div class="button">
                      <a href="single-item.html">Buy Now</a>
                     </div>
                  </div>                  
                </li>
                
                <li>
                  <img src="img/photos/slider4.jpg" alt=""/>
                  <div class="flex-caption">
                     <!-- Title -->
                     <h3>Raymonds Suitings - <span class="color">Just $449</span></h3>
                     <!-- Para -->
                     <p>Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. </p>
                     <div class="button">
                      <a href="single-item.html">Buy Now</a>
                     </div>
                  </div>                  
                </li>
                
              </ul>
            </div>

    </div>
  </div>
</div>

<!-- Flex slider ends -->


<div class="promo">
  <div class="container">
    <div class="row">

      <!-- Red color promo box -->
      <div class="span4">
        <!-- rcolor =  Red color -->
        <div class="pbox rcolor">
          <div class="pcol-left">
            <!-- Image -->
            <a href="items.html"><img src="img/photos/promo-1.png" alt=""></a>
          </div>
          <div class="pcol-right">
            <!-- Title -->
            <p class="pmed"><a href="items.html">HTC One</a></p>
            <!-- Para -->
            <p class="psmall"><a href="items.html">Buy HTC Phones just for $250. Cheap. Dont miss this offer. Keep it checking for more.</a></p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>


      <!-- Blue color promo box -->
      <div class="span4">
        <!-- bcolor =  Blue color -->
        <div class="pbox bcolor">
          <div class="pcol-left">
            <a href="items.html"><img src="img/photos/promo-2.png" alt=""></a>
          </div>
          <div class="pcol-right">
            <p class="pmed"><a href="items.html">Blackberry</a></p>
            <p class="psmall"><a href="items.html">Buy Blackberry phones just for $250. Dont miss this offer. Keep it checking for more.</a></p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <!-- Green color promo box -->
      <div class="span4">
        <!-- gcolor =  Green Color -->
        <div class="pbox gcolor">
          <div class="pcol-left">
            <a href="items.html"><img src="img/photos/promo-3.png" alt=""></a>
          </div>
          <div class="pcol-right">
            <p class="pmed"><a href="items.html">Nokia Lumia</a></p>
            <p class="psmall"><a href="items.html">Buy Nokia Lumia Phones just for $200. Dont miss  offer. Keep it checking for more.</a></p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Promo box ends -->



<!-- JS -->

<script src="js/jquery.prettyPhoto.js"></script> <!-- Pretty Photo -->
<script src="js/filter.js"></script> <!-- Filter for support page -->

<script src="js/jquery.flexslider-min.js"></script> <!-- Flex slider -->

<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script> <!-- Carousel for recent posts -->
<script src="js/custom.js"></script> <!-- Custom codes -->