<?php 

$image = get_field('banner_image');

if( !empty($image) ): ?>
  <div class="section no-pad-bot banner" style="background-image: url(<?php echo $image['url']; ?>);">
</div>

<?php endif; ?>

