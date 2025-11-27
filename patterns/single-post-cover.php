<?php
/**
 * Title: Single Post with Cover
 * Slug: fronty/single-post-cover
 * Categories: posts
 * Description: Single post layout with a large cover image.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:cover {"url":"https://via.placeholder.com/1200x600","dimRatio":50,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" src="https://via.placeholder.com/1200x600" alt="Post Cover" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
  <!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|xxx-large"}}} /-->
  
  <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-group">
    <!-- wp:post-date {"textColor":"base"} /-->
    <!-- wp:post-author {"textColor":"base"} /-->
  </div>
  <!-- /wp:group -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:post-content /-->
  
  <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
  <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|neutral","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--neutral);border-top-width:1px;padding-top:var(--wp--preset--spacing--40)">
    <!-- wp:post-terms {"term":"category","prefix":"Categories: "} /-->
    <!-- wp:post-terms {"term":"post_tag","prefix":"Tags: "} /-->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
