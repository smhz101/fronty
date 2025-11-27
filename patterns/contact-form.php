<?php
/**
 * Title: Contact Form
 * Slug: fronty/contact-form
 * Categories: contact
 * Description: Simple contact form with name, email, and message fields.
 *
 * @package Fronty
 * @since 0.0.1
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Get In Touch</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Have a question? We'd love to hear from you.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:html -->
    <form class="contact-form" style="display: flex; flex-direction: column; gap: 1.5rem;">
      <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 250px;">
          <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Name</label>
          <input type="text" id="name" name="name" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;" />
        </div>
        <div style="flex: 1; min-width: 250px;">
          <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email</label>
          <input type="email" id="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;" />
        </div>
      </div>
      <div>
        <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Message</label>
        <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem; resize: vertical;"></textarea>
      </div>
      <button type="submit" class="wp-element-button" style="padding: 12px 32px; background: var(--wp--preset--color--primary); color: white; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer; align-self: flex-start;">Send Message</button>
    </form>
    <!-- /wp:html -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
