<?php get_header(
/*
Template Name: Team Page
*/
); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="section banner banner-text" id="team-banner" >
  <div class="container">
    <div class="row">
      <div class="col s12 m6">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_field('leading_paragraph'); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>

  </div>
</div>

<div class="container">

<?php
if( have_rows('team_section') ):
while( have_rows('team_section') ): the_row(); 
  $group_title = get_sub_field('group_title');
?>
    
      <div class="section teamgrid">

        <div class="row">
          <div class="col s12">
            <h2><?php echo $group_title; ?></h2>
          </div>
           <?php if( have_rows('team_bios') ):?>
            <div class="col s12 m6">
             <?php while ( have_rows('team_bios') ) : the_row(); 
              $image = get_sub_field('image');
              $name = get_sub_field('name');
              $position = get_sub_field('position');
              $synopsis = get_sub_field('synopsis');
              $description = get_sub_field('description');
            ?>
            
              <div class="row card" id="<?php $page_link = sanitize_title_for_query( $name ); echo str_replace(' ', '', $page_link); ?>">
                <div class="card-image col s12 l4">
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="responsive-img rollover__image">
                </div>
                <div class="col s12 l8">
                  <div class="card-content">
                    <h5 class="small"><?php echo $position ?></h5>
                    <h3 class="card-title"><?php echo $name ?></h3>
                    <?php echo $synopsis ?>
                    <div class="description">  
                      <?php echo $description ?>
                    </div>
                  </div>
                  <div class="card-action">
                    <a href="#" class="readmore btn btn-transparent"></a>
                  </div>
                </div>
              </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?> 
          <?php if( have_rows('team_bios_copy') ): ?>
          <div class="col s12 m6">
            <?php while ( have_rows('team_bios_copy') ) : the_row(); 
              $image = get_sub_field('image');
              $name = get_sub_field('name');
              $position = get_sub_field('position');
              $synopsis = get_sub_field('synopsis');
              $description = get_sub_field('description');
            ?>
            
              <div class="row card" id="<?php $page_link = sanitize_title_for_query( $name ); echo str_replace(' ', '', $page_link); ?>">
                <div class="card-image col s12 l4 waves-effect waves-block waves-light">
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="responsive-img rollover__image">
                </div>
                <div class="col s12 l8">
                  <div class="card-content">
                    <h5 class="small"><?php echo $position ?></h5>
                    <h3 class="card-title"><?php echo $name ?></h3>
                    <?php echo $synopsis ?>
                    <div class="description">  
                      <?php echo $description ?>
                    </div>
                  </div>
                  <div class="card-action">
                    <a href="#" class="readmore btn btn-transparent"></a>
                  </div>
                </div>
              </div>
            
            <?php endwhile;?>
          </div>
        <?php endif; ?> 
        </div>
      </div>
    
    
  <?php endwhile; endif; ?>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>