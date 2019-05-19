<?php 

$image = get_field('banner_image');

if( !empty($image) ): ?>
  <div class="section no-pad-bot banner" style="background-image: url(<?php echo $image['url']; ?>); background-attachment: fixed; ">
</div>

<?php endif; ?>

