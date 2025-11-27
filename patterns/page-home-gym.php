<?php
/**
 * Title: Gym Homepage
 * Slug: fronty/page-home-gym
 * Categories: pages
 * Description: A high-energy homepage layout for gyms and fitness centers.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:pattern {"slug":"fronty/hero-fullscreen-video"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
  <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
  <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">Train With The Best</h2>
  <!-- /wp:heading -->
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-shadow"} -->
      <figure class="wp-block-image size-large is-style-shadow"><img src="https://via.placeholder.com/800x600" alt="Weight Training" style="aspect-ratio:16/9;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
      <h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30)">Strength Training</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Build muscle and increase power with our state-of-the-art equipment.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-shadow"} -->
      <figure class="wp-block-image size-large is-style-shadow"><img src="https://via.placeholder.com/800x600" alt="Cardio" style="aspect-ratio:16/9;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
      <h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30)">Cardio & HIIT</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Burn calories and improve endurance with our high-intensity classes.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-shadow"} -->
      <figure class="wp-block-image size-large is-style-shadow"><img src="https://via.placeholder.com/800x600" alt="Yoga" style="aspect-ratio:16/9;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
      <h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30)">Yoga & Recovery</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p>Find balance and flexibility with our expert-led yoga sessions.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fronty/stats-bar"} /-->

<!-- wp:pattern {"slug":"fronty/pricing-table"} /-->

<!-- wp:pattern {"slug":"fronty/cta-background"} /-->
