<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); 
    $map = get_field('map');
    $map_text = get_field('post_map_text');
    $leading_paragraph = get_field('leading_paragraph');
  ?>
     <div class="section half-margin banner banner-text" id="region-specific-banner">
        <img class="map" src="<?php echo $map['url'] ?>" alt="<?php echo $map['alt'] ?>" >
        <div class="container">
          <div class="row">
            <div class="col s10">
              <a href="/services" class="breadcrumb">SERVICES</a>
              <a href="<?php the_permalink(); ?>" class="breadcrumb"><?php the_title(); ?></a>
            </div>
          </div>
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
      
    <div class="container">
      <div class="section no-margin">
        <div class="row">
          <div class="col s12">
            <div class="row"> 
              <div class="col s12 cms-text">
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