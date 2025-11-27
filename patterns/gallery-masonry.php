<?php
/**
 * Title: Gallery Masonry
 * Slug: fronty/gallery-masonry
 * Categories: gallery
 * Description: Masonry-style image gallery with varied image sizes.
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
    <h2 class="wp-block-heading has-text-align-center">Portfolio</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">A showcase of our work</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1618556450991-2f1af64e8191?w=800" alt=""/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1618556450994-a6a128ef0d9d?w=800" alt=""/></figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=800" alt=""/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1618004912476-29818d81ae2e?w=800" alt=""/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?w=800" alt=""/></figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1618556450783-a966d0e9e3f4?w=800" alt=""/></figure>
        <!-- /wp:image -->
        
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1618556450991-2f1af64e8191?w=800" alt=""/></figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
