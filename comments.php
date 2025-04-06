<?php
if (post_password_required()) {
  return;
}
?>
<div>
  <?php if (have_comments()) : ?>
    <h3><?php comments_number(__('No Comments', 'thriveguitar'), __('One Comment', 'thriveguitar'), __('% Comments', 'thriveguitar')); ?></h3>
    <ol>
      <?php wp_list_comments(); ?>
    </ol>
  <?php endif; ?>
  <?php comment_form(); ?>
</div>