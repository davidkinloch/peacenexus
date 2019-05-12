<?php include 'header.php'; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
  $leading_paragraph = get_field('leading_paragraph');
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
  
?>
<div class="section no-pad-bot no-margin banner" id="index-banner" style="background-image: url(<?php echo $featured_img_url ?>);">
  <div class="container valign-wrapper">
    <div class="row center">
      <div class="col s12 m8 offset-m2 light-blue">
        <div class="banner-center"> 
          <h1 class="white-text"><?php the_title();?></h1>
          <h2 class="white-text"><?php echo $leading_paragraph ;?></h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="megawrap rellax" data-rellax-speed="9" data-rellax-zindex="1">
<div class="container">
  <?php include 'content/content_modules.php'; ?>
</div><!-- end of container -->

<?php endwhile; endif; ?>
<?php include 'footer.php'; ?>