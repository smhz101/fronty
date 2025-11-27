<?php
/**
 * Title: Posts List
 * Slug: fronty/posts-list
 * Categories: posts
 * Description: Vertical list of posts with featured images and excerpts.
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
    <h2 class="wp-block-heading has-text-align-center">Recent Articles</h2>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:query {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
    <div class="wp-block-query alignwide">
      <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center">
          <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
          <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
            <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
          </div>
          <!-- /wp:column -->
          
          <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
          <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
            <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
            
            <!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":30} /-->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group">
              <!-- wp:post-date {"fontSize":"x-small"} /-->
              <!-- wp:post-author {"showAvatar":false,"fontSize":"x-small"} /-->
              <!-- wp:post-terms {"term":"category","fontSize":"x-small"} /-->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        
        <!-- wp:separator {"backgroundColor":"neutral"} -->
        <hr class="wp-block-separator has-text-color has-neutral-background-color has-background"/>
        <!-- /wp:separator -->
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
