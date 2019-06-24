<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
  $leading_paragraph = get_field('leading_paragraph');
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
  
?>
<div class="section no-pad-bot banner" id="index-banner" style="background-image: url(<?php echo $featured_img_url ?>);">
</div>
<div class="section no-pad-bot">
  <div class="container ">
    <div class="row no-margin center">
      <div class="col s12 m8 offset-m2">
        <h1 class="blue-text"><?php the_title();?></h1>
        <h2 class="blue-text no-margin"><?php echo $leading_paragraph ;?></h2>
      </div>
    </div>
  </div>
</div>
<div class="megawrap">

<?php include 'content/content_modules.php'; ?>


<?php endwhile; endif; ?>
<?php get_footer(); ?>