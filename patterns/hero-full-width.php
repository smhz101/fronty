<?php
/**
 * Title: Hero Full-Width
 * Slug: fronty/hero-full-width
 * Categories: featured
 * Description: Full-width hero section with background image and overlay text.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:cover {"url":"https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1600","dimRatio":50,"overlayColor":"contrast","minHeight":600,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1600" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center","level":1,"textColor":"base","fontSize":"extra-large"} -->
    <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-extra-large-font-size">Welcome to the Future</h1>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","textColor":"base"} -->
    <p class="has-text-align-center has-base-color has-text-color">Experience the power of modern web design with our intuitive block theme. Build faster, design better.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
    <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
      <!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
      <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button">Explore Now</a></div>
      <!-- /wp:button -->
      
      <!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
      <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button">Watch Demo</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
