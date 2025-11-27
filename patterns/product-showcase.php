<?php
/**
 * Title: Product Showcase
 * Slug: fronty/product-showcase
 * Categories: featured
 * Description: A featured product showcase with image and details.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"neutral","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-neutral-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
  <!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
  <div class="wp-block-columns alignwide is-vertically-aligned-center">
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
      <figure class="wp-block-image size-large is-style-default"><img src="https://via.placeholder.com/600x600" alt="Product Showcase"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large"}}} -->
      <h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--xx-large)">Premium Headphones</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"fontSize":"large","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
      <p class="has-primary-color has-text-color has-large-font-size" style="font-weight:700">$299</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph -->
      <p>Experience sound like never before. Our premium headphones offer noise cancellation, 30-hour battery life, and supreme comfort.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:list {"className":"is-style-checkmarks"} -->
      <ul class="wp-block-list is-style-checkmarks">
        <li>Active Noise Cancellation</li>
        <li>30-Hour Battery Life</li>
        <li>Premium Leather Earcups</li>
      </ul>
      <!-- /wp:list -->
      
      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Buy Now</a></div>
        <!-- /wp:button -->
        
        <!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
