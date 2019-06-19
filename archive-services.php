<?php get_header(); ?>

<?php if (have_posts()) : 
  $rightColumn = get_field('hero_right_text', 92);
?>
<div class="section banner banner-text" id="region-banner" >
  <div class="container">
    <div class="row">
      <?php if ( $rightColumn ): ?>
          <div class="col s12">
            <h1><?php echo get_the_title(92); ?></h1>
          </div>
          <div class="col s12 m6">
            <h2><?php echo get_field('leading_paragraph',92);?></h2>
          </div>
          <div class="col s12 m6">
            <?php echo $rightColumn ?>
          </div>
        <?php else: ?>
          <div class="col s12">
            <h1><?php echo get_the_title(92);?></h1>
            <div class="text-column">
              <h2><?php echo get_field('leading_paragraph',92);?></h2>
            </div>
          </div>
        <?php endif;?>
    </div>
  </div>
</div>

<div class="megawrap">
<div class="container">
  <div class="section countries">
    <div class="row">
      <?php $postCount = 1; while (have_posts()) : $postCount++;  the_post(); 
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
        $white = get_field('white');
      ?>
        <div class="col s12 m6 l4 <?php if($postCount == 4) { ?>offset-m3<?php } ?>">
          <div class="card <?php if($white): ?>card--white<?php endif;?>" style="background-image: url(<?php echo $featured_img_url ?>);">
            <a class="card-link waves-effect waves-light" href="<?php the_permalink();?>"> 
              <div class="card-content">
                <h3 class="card-title"><?php the_title();?></h3>
      
                <span class="btn btn-transparent waves-effect waves-light">Learn More</span>
              </div>
            </a>
          </div>
        </div>
     <?php endwhile; ?> 
    </div>
  </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>