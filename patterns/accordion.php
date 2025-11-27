<?php
/**
 * Title: Accordion
 * Slug: fronty/accordion
 * Categories: text
 * Description: Expandable accordion sections for content.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Course Curriculum</h2>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
    <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:details {"className":"is-style-default"} -->
    <details class="wp-block-details is-style-default"><summary>Module 1: Introduction to Design</summary><!-- wp:paragraph -->
    <p>Learn the fundamentals of design theory, color psychology, and typography. This module covers the essential building blocks of creating visually appealing interfaces.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:list -->
    <ul class="wp-block-list">
      <li>Understanding Color Theory</li>
      <li>Typography Basics</li>
      <li>Layout and Composition</li>
    </ul>
    <!-- /wp:list --></details>
    <!-- /wp:details -->
    
    <!-- wp:details {"className":"is-style-default"} -->
    <details class="wp-block-details is-style-default"><summary>Module 2: User Experience Principles</summary><!-- wp:paragraph -->
    <p>Dive deep into user-centered design. Understand how to conduct user research, create personas, and map user journeys.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:list -->
    <ul class="wp-block-list">
      <li>User Research Methods</li>
      <li>Creating Personas</li>
      <li>User Journey Mapping</li>
    </ul>
    <!-- /wp:list --></details>
    <!-- /wp:details -->
    
    <!-- wp:details {"className":"is-style-default"} -->
    <details class="wp-block-details is-style-default"><summary>Module 3: Prototyping and Testing</summary><!-- wp:paragraph -->
    <p>Learn how to create low and high-fidelity prototypes and conduct usability testing to validate your designs.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:list -->
    <ul class="wp-block-list">
      <li>Wireframing Tools</li>
      <li>Interactive Prototyping</li>
      <li>Usability Testing</li>
    </ul>
    <!-- /wp:list --></details>
    <!-- /wp:details -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
