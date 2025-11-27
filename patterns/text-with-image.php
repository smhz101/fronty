<?php
/**
 * Title: Text with Image
 * Slug: fronty/text-with-image
 * Categories: text, featured
 * Description: Alternating text and image layout for content sections.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    <!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
      <!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800" alt="Team collaboration"/></figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Built for Collaboration</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>Work together seamlessly with your team. Our platform is designed to make collaboration easy and efficient.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:list -->
        <ul class="wp-block-list">
          <li>Real-time editing and updates</li>
          <li>Team member permissions</li>
          <li>Version control and history</li>
          <li>Comments and feedback tools</li>
        </ul>
        <!-- /wp:list -->
        
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button -->
          <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
