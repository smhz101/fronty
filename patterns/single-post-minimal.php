<?php
/**
 * Title: Single Post Minimal
 * Slug: fronty/single-post-minimal
 * Categories: posts
 * Description: Clean, text-focused single post layout.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
  <!-- wp:post-category {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontSize":"small"}}} /-->
  
  <!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|xx-large"}}} /-->
  
  <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
  <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-group">
    <!-- wp:post-author-name /-->
    <!-- wp:paragraph -->
    <p>·</p>
    <!-- /wp:paragraph -->
    <!-- wp:post-date /-->
  </div>
  <!-- /wp:group -->
  
  <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
  <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- wp:post-featured-image {"align":"wide"} /-->
  
  <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
  <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- wp:post-content /-->
</div>
<!-- /wp:group -->
