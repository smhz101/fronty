<?php
/**
 * Title: Contact with Info
 * Slug: fronty/contact-with-info
 * Categories: contact
 * Description: Contact form with contact details side-by-side.
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
    <h2 class="wp-block-heading has-text-align-center">Contact Us</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">We're here to help and answer any questions you might have</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column {"width":"40%"} -->
      <div class="wp-block-column" style="flex-basis:40%">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Get in Touch</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph -->
        <p>Feel free to reach out to us through any of the following channels:</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
        <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group">
          <!-- wp:paragraph -->
          <p><strong>📧 Email</strong><br>hello@example.com</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:paragraph -->
          <p><strong>📞 Phone</strong><br>(123) 456-7890</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:paragraph -->
          <p><strong>📍 Address</strong><br>123 Main Street<br>New York, NY 10001</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
        <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","className":"is-style-logos-only"} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only">
          <!-- wp:social-link {"url":"#","service":"facebook"} /-->
          <!-- wp:social-link {"url":"#","service":"twitter"} /-->
          <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
          <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        </ul>
        <!-- /wp:social-links -->
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column {"width":"60%"} -->
      <div class="wp-block-column" style="flex-basis:60%">
        <!-- wp:html -->
        <form class="contact-form" style="display: flex; flex-direction: column; gap: 1.25rem;">
          <div>
            <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Name</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;" />
          </div>
          <div>
            <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;" />
          </div>
          <div>
            <label for="subject" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Subject</label>
            <input type="text" id="subject" name="subject" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;" />
          </div>
          <div>
            <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Message</label>
            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; resize: vertical;"></textarea>
          </div>
          <button type="submit" class="wp-element-button" style="padding: 12px 32px; background: var(--wp--preset--color--primary); color: white; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer; align-self: flex-start;">Send Message</button>
        </form>
        <!-- /wp:html -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
