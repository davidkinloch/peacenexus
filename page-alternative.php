<?php get_header(
/*
Template Name: Page Alternative
*/
); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); 
    $leading_paragraph = get_field('leading_paragraph');
  ?>
     <div class="section no-margin banner banner-text" id="partnername-banner" >
        <div class="container">
          <div class="row no-margin">
            <div class="col s12">
              <?php if ($leading_paragraph): ?>
                <h1><?php the_title(); ?></h1>
                <h2><?php echo $leading_paragraph ;?></h2>
              <?php else : ?>
                <h1 class="no-margin"><?php the_title(); ?></h1>
              <?php endif; ?>
            </div>
          </div>
      </div>
    </div>
    
    <div class="megawrap">

    <?php include 'content/content_modules.php'; ?>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>