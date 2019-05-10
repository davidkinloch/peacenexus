<?php get_header(); ?>
<?php if (have_posts()) : ?>

<div class="section banner banner-text" id="region-banner" >
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1><?php echo get_the_title(57);?></h1>
        <div class="text-column">
          <h2><?php echo get_field('leading_paragraph',57);?></h2>
          <p><?php echo get_the_content(57);?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="megawrap">
<div class="section countries">
  <div class="row">
    <?php while (have_posts()) : the_post(); ?>
      <div class="col s6 xl2 ">
        <div class="card">
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
<?php endif; ?>
<?php get_footer(); ?>