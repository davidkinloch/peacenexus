<?php get_header(); ?>

<div class="section no-margin banner banner-text" id="partnername-banner" >
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h1>Serach Results for: <?php echo get_search_query(); ?></h1>
              <div class="text-column">
                <h2><?php echo $leading_paragraph ?></h2>
              </div>
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
                <div class="col s12 m10 offset-m1">
              
                <?php if ( have_posts() ) : ?>
                  <ul class="searchresults">
                  <?php while ( have_posts() ) : the_post(); 
                       $leading_paragraph = get_field('leading_paragraph');
                  ?>
                     <li>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo $leading_paragraph ;?></p>
                            <span class="readmore">Read more</span>
                          </a>
                      </li>
                  <?php endwhile; ?>
                  <ul>
                <?php else: ?>
                
                <p><?php _e('Sorry, no posts matched your search results.'); ?></p>

                <?php endif; ?>

                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php get_footer(); ?>