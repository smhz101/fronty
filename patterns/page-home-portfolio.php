<?php
/**
 * Title: Portfolio Homepage
 * Slug: fronty/page-home-portfolio
 * Categories: pages
 * Description: A visual-heavy homepage layout for portfolios and creatives.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:pattern {"slug":"fronty/hero-fullscreen-image"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
  <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
  <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">Selected Works</h2>
  <!-- /wp:heading -->

  <!-- wp:pattern {"slug":"fronty/gallery-masonry"} /-->
  
  <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
    <!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View All Projects</a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fronty/text-with-image"} /-->

<!-- wp:pattern {"slug":"fronty/cta-simple"} /-->
