<?php
/**
 * Title: Two Column Text
 * Slug: fronty/two-column-text
 * Categories: text
 * Description: Two column text layout for side-by-side content.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Our Mission</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>We believe in creating beautiful, functional websites that help businesses grow. Our mission is to provide the tools and resources needed to build exceptional digital experiences.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph -->
        <p>With a focus on simplicity and performance, we empower creators to bring their visions to life without the complexity of traditional development.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Our Vision</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>We envision a world where anyone can create professional websites without barriers. Technology should enable creativity, not limit it.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph -->
        <p>Through continuous innovation and community feedback, we're building the future of web design—one block at a time.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
