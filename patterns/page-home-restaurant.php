<?php
/**
 * Title: Restaurant Homepage
 * Slug: fronty/page-home-restaurant
 * Categories: pages
 * Description: An appetizing homepage layout for restaurants and cafes.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:cover {"url":"https://via.placeholder.com/1920x1080","dimRatio":40,"overlayColor":"contrast","minHeight":100,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" src="https://via.placeholder.com/1920x1080" alt="Restaurant Interior" data-object-fit="cover"/>
  <div class="wp-block-cover__inner-container">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
      <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(3rem, 5vw, 6rem)","fontStyle":"italic","fontWeight":"700"}},"textColor":"base"} -->
      <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:clamp(3rem, 5vw, 6rem);font-style:italic;font-weight:700">Taste the Extraordinary</h1>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"align":"center","fontSize":"large","textColor":"neutral-200"} -->
      <p class="has-text-align-center has-neutral-200-color has-text-color has-large-font-size">Fine dining in the heart of the city. Experience culinary perfection.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:button {"className":"is-style-fill","backgroundColor":"primary","textColor":"base"} -->
        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button">Book a Table</a></div>
        <!-- /wp:button -->
        <!-- wp:button {"className":"is-style-outline","textColor":"base","style":{"border":{"color":"var:preset|color|base"}}} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" style="border-color:var(--wp--preset--color--base)">View Menu</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:heading {"level":2} -->
      <h2 class="wp-block-heading">Our Story</h2>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Founded in 2010, we bring farm-to-table freshness to every dish. Our chefs are passionate about creating unforgettable dining experiences using locally sourced ingredients.</p>
      <!-- /wp:paragraph -->
      <!-- wp:image {"scale":"cover","linkDestination":"none","className":"is-style-rounded"} -->
      <figure class="wp-block-image is-style-rounded"><img src="https://via.placeholder.com/600x400" alt="Chef" style="object-fit:cover"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:image {"aspectRatio":"3/4","scale":"cover","linkDestination":"none","className":"is-style-shadow"} -->
      <figure class="wp-block-image is-style-shadow"><img src="https://via.placeholder.com/600x800" alt="Dish" style="aspect-ratio:3/4;object-fit:cover"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fronty/testimonials-grid"} /-->

<!-- wp:pattern {"slug":"fronty/contact-info"} /-->
