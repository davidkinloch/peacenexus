<?php get_header(
/*
Template Name: Services Detail Page
*/
); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); 
    $leading_paragraph = get_field('leading_paragraph');
  ?>
     <div class="section no-margin banner banner-text" id="partnername-banner" >
        <div class="container">
          <div class="row">
            <div class="col s12">
              <a href="/regions" class="breadcrumb">SERVICE</a>
              <a href="<?php the_permalink(); ?>" class="breadcrumb"><?php the_title(); ?></a>
            </div>
          </div>
          <div class="row no-margin">
            <div class="col s12 m8 offset-m2">
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
              <div class="col s12 m8 offset-m2 cms-text">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'content/content_modules.php'; ?>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>