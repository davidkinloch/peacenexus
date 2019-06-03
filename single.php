<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); 
    $leading_paragraph = get_field('leading_paragraph');
    $rightColumn = get_field('hero_right_text');
  ?>
     <div class="section no-margin banner banner-text" id="partnername-banner" >
        <div class="container">
          <div class="cta-block">
            <?php include 'content/content_categories.php'; ?>
          </div>
          <div class="row">
            <div class="col s12">
              <a href="/highlights" class="breadcrumb">HIGHLIGHTS</a>
              <a href="<?php the_permalink(); ?>" class="breadcrumb"><?php the_title(); ?></a>
            </div>
          </div>
          <div class="row">
            <?php if ( $rightColumn ): ?>
              <div class="col s12">
                <h1><?php the_title(); ?></h1>
              </div>
              <div class="col s12 m6">
                <h2><?php echo $leading_paragraph ?></h2>
                <?php the_content();?>
              </div>
              <div class="col s12 m6">
                <?php echo $rightColumn ?>  
              </div>
            <?php else: ?>
              <div class="col s12">
                <h1><?php the_title(); ?></h1>
                <div class="text-column">
                  <h2><?php echo $leading_paragraph ?></h2>
                  <?php the_content();?>
                </div>
              </div>
            <?php endif;?>
            
          </div>   
      </div>
    </div>
    <?php include 'content/content_banner.php'; ?>

    <div class="megawrap rellax" data-rellax-speed="5" data-rellax-zindex="1">
      <?php include 'content/content_modules.php'; ?>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>