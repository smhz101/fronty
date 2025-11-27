<?php
/**
 * Title: Restaurant Menu Page
 * Slug: fronty/page-restaurant-menu
 * Categories: pages
 * Description: A structured menu layout for restaurants.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"neutral-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-neutral-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
  <!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
  <h1 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)">Our Menu</h1>
  <!-- /wp:heading -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"italic"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"primary"} -->
      <h2 class="wp-block-heading has-primary-color has-text-color" style="font-style:italic;margin-bottom:var(--wp--preset--spacing--40)">Starters</h2>
      <!-- /wp:heading -->
      
      <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
        <h4 class="wp-block-heading" style="font-weight:700">Bruschetta</h4>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
        <p style="font-weight:700">$12</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"neutral-600"} -->
      <p class="has-neutral-600-color has-text-color" style="margin-top:0">Grilled bread rubbed with garlic and topped with olive oil and salt.</p>
      <!-- /wp:paragraph -->
      <!-- wp:separator {"className":"is-style-dots"} -->
      <hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
      <!-- /wp:separator -->

      <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
        <h4 class="wp-block-heading" style="font-weight:700">Calamari</h4>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
        <p style="font-weight:700">$16</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"neutral-600"} -->
      <p class="has-neutral-600-color has-text-color" style="margin-top:0">Fried squid rings served with marinara sauce.</p>
      <!-- /wp:paragraph -->
      <!-- wp:separator {"className":"is-style-dots"} -->
      <hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
      <!-- /wp:separator -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"italic"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"primary"} -->
      <h2 class="wp-block-heading has-primary-color has-text-color" style="font-style:italic;margin-bottom:var(--wp--preset--spacing--40)">Main Courses</h2>
      <!-- /wp:heading -->
      
      <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
        <h4 class="wp-block-heading" style="font-weight:700">Grilled Salmon</h4>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
        <p style="font-weight:700">$28</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"neutral-600"} -->
      <p class="has-neutral-600-color has-text-color" style="margin-top:0">Fresh Atlantic salmon served with roasted vegetables.</p>
      <!-- /wp:paragraph -->
      <!-- wp:separator {"className":"is-style-dots"} -->
      <hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
      <!-- /wp:separator -->

      <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)">
        <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
        <h4 class="wp-block-heading" style="font-weight:700">Ribeye Steak</h4>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
        <p style="font-weight:700">$34</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"neutral-600"} -->
      <p class="has-neutral-600-color has-text-color" style="margin-top:0">12oz ribeye cooked to perfection, served with mashed potatoes.</p>
      <!-- /wp:paragraph -->
      <!-- wp:separator {"className":"is-style-dots"} -->
      <hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
      <!-- /wp:separator -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
