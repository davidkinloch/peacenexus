<?php 

$image = get_field('banner_image');

if( !empty($image) ): ?>
  <div class="section banner rellax-contained-wrapper no-pad-bot">
  <div class="rellax-contained" data-rellax-speed="4" data-rellax-percentage="0.5" style="background-image: url(<?php echo $image['url']; ?>);">
</div>
</div>

<?php endif; ?>

