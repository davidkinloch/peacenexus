<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); 
    $map = get_field('map');
    $map_text = get_field('post_map_text');
    $leading_paragraph = get_field('leading_paragraph');
    $rightColumn = get_field('hero_right_text');
  ?>
     <div class="section banner banner-text" id="region-specific-banner">
        <img class="map" src="<?php echo $map['url'] ?>" alt="<?php echo $map['alt'] ?>" >
        <div class="container">
          <div class="row">
            <div class="col s12">
              <a href="/regions" class="breadcrumb">REGIONS</a>
              <a href="<?php the_permalink(); ?>" class="breadcrumb"><?php the_title(); ?></a>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m12 l6">
              <h1><?php the_title(); ?></h1>
                <h2><?php echo $leading_paragraph ?></h2>
                <?php the_content();?>
            </div>
          </div>
          <div class="row">
            <?php if ( $rightColumn ): ?>
              <div class="col s12 m6">
                <?php echo $map_text ?>
              </div>
              <div class="col s12 m6">
                <?php echo $rightColumn ?>
              </div>
            <?php else: ?>
              <div class="col s12">
                 <div class="text-column">
                    <?php echo $map_text ?>
                 </div>
              </div>
            <?php endif;?>
          </div>
        </div>
      </div>

    <div class="megawrap">
      <?php include 'content/content_modules.php'; ?>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>