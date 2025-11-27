<?php
/**
 * Title: Shop Grid
 * Slug: fronty/shop-grid
 * Categories: featured
 * Description: A grid layout for displaying products.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
  <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--40)">Featured Products</h2>
  <!-- /wp:heading -->
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
      <figure class="wp-block-image size-full is-style-default"><img src="https://via.placeholder.com/400x400" alt="Product" style="aspect-ratio:1;object-fit:cover"/></figure>
      <!-- /wp:image -->
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)">
        <!-- wp:heading {"level":4,"fontSize":"medium"} -->
        <h4 class="wp-block-heading has-medium-font-size">Classic Watch</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
        <p style="font-weight:700">$199</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:button {"width":100,"className":"is-style-outline"} -->
      <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Add to Cart</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
      <figure class="wp-block-image size-full is-style-default"><img src="https://via.placeholder.com/400x400" alt="Product" style="aspect-ratio:1;object-fit:cover"/></figure>
      <!-- /wp:image -->
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)">
        <!-- wp:heading {"level":4,"fontSize":"medium"} -->
        <h4 class="wp-block-heading has-medium-font-size">Leather Bag</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
        <p style="font-weight:700">$149</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:button {"width":100,"className":"is-style-outline"} -->
      <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Add to Cart</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
      <figure class="wp-block-image size-full is-style-default"><img src="https://via.placeholder.com/400x400" alt="Product" style="aspect-ratio:1;object-fit:cover"/></figure>
      <!-- /wp:image -->
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)">
        <!-- wp:heading {"level":4,"fontSize":"medium"} -->
        <h4 class="wp-block-heading has-medium-font-size">Sunglasses</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
        <p style="font-weight:700">$89</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      
      <!-- wp:button {"width":100,"className":"is-style-outline"} -->
      <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Add to Cart</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
