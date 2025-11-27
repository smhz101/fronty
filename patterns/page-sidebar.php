<?php
/**
 * Title: Page with Sidebar
 * Slug: fronty/page-sidebar
 * Categories: pages
 * Description: Page layout with a right sidebar.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:post-title {"level":1,"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->
  
  <!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"70%"} -->
    <div class="wp-block-column" style="flex-basis:70%">
      <!-- wp:post-content /-->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"30%"} -->
    <div class="wp-block-column" style="flex-basis:30%">
      <!-- wp:group {"style":{"backgroundColor":"var:preset|color|neutral","spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
      <div class="wp-block-group" style="background-color:var(--wp--preset--color--neutral);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:heading {"level":4} -->
        <h4 class="wp-block-heading">About Us</h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">We are a creative agency dedicated to building digital products that matter.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
        <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:heading {"level":4} -->
        <h4 class="wp-block-heading">Categories</h4>
        <!-- /wp:heading -->
        
        <!-- wp:categories /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
