<?php get_header(
/*
Template Name: 2 Column
*/
); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); 
    $leading_paragraph = get_field('leading_paragraph');
    $sidebar = get_field('sidebar_content');
  ?>
     <div class="section half-margin banner banner-text" id="partnername-banner" >
        <div class="container">
          <div class="row no-margin">
            <div class="col s12 m12">
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
      
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12">
            <div class="row"> 
              <div class="col s12 m8 cms-text">
                <?php the_content(); ?>
              </div>
              <div class="col s12 m4 cms-text">
                <?php echo $sidebar ;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'content/content_modules.php'; ?>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>