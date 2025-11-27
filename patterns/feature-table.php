<?php
/**
 * Title: Feature Table
 * Slug: fronty/feature-table
 * Categories: text
 * Description: Comparison table for features across different plans.
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
    <h2 class="wp-block-heading has-text-align-center">Compare Plans</h2>
    <!-- /wp:heading -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:table {"hasFixedLayout":true,"className":"is-style-stripes"} -->
    <figure class="wp-block-table has-fixed-layout is-style-stripes"><table><thead><tr><th>Feature</th><th>Basic</th><th>Pro</th><th>Enterprise</th></tr></thead><tbody><tr><td>Unlimited Projects</td><td>❌</td><td>✅</td><td>✅</td></tr><tr><td>Custom Domain</td><td>✅</td><td>✅</td><td>✅</td></tr><tr><td>24/7 Support</td><td>❌</td><td>✅</td><td>✅</td></tr><tr><td>Analytics Dashboard</td><td>Basic</td><td>Advanced</td><td>Custom</td></tr><tr><td>Team Members</td><td>1</td><td>5</td><td>Unlimited</td></tr><tr><td>API Access</td><td>❌</td><td>❌</td><td>✅</td></tr><tr><td>White Labeling</td><td>❌</td><td>❌</td><td>✅</td></tr></tbody></table></figure>
    <!-- /wp:table -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
