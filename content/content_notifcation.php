<?php if( get_field('notification_bar_enabled') ): ?>
  <div class="notification row hide-on-med-and-down">
    <span class="center col s12"><?php the_field('content'); ?></span>
  </div>
<?php endif; ?>