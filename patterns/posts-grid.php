<?php
/**
 * Title: Posts Grid
 * Slug: fronty/posts-grid
 * Categories: posts
 * Description: Grid layout of recent posts with featured images.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Latest Posts</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Stay updated with our latest articles and insights</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
    <div class="wp-block-query alignwide">
      <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
        
        <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
        
        <!-- wp:post-excerpt {"moreText":"Read More","excerptLength":20} /-->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-group">
          <!-- wp:post-date {"fontSize":"x-small"} /-->
          <!-- wp:post-terms {"term":"category","fontSize":"x-small"} /-->
        </div>
        <!-- /wp:group -->
      <!-- /wp:post-template -->
      
      <!-- wp:query-no-results -->
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">No posts found.</p>
        <!-- /wp:paragraph -->
      <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
