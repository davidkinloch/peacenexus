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
  <!-- KILL
  <div class="row">
    <div class="col s12">
        <a class='dropdown-trigger btn btn-large btn-filter' href='#' data-target='dropdown-team'><i class="material-icons right">keyboard_arrow_down</i> Filter by Department</a>
        
        <ul id='dropdown-team' class='dropdown-content'>
          <li><a href="#!">Directors</a></li>
          <li><a href="#!">Project Management</a></li>
          <li><a href="#!">Consultants</a></li>
          <li><a href="#!">Marketing</a></li>
          <li><a href="#!">Finance &amp; Supprt</a></li>
          <li><a href="#!">View All</a></li>
        </ul>
      </div>
  </div>
  -->

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
           <?php if( have_rows('team_bios') ): while ( have_rows('team_bios') ) : the_row(); 
            $image = get_sub_field('image');
            $name = get_sub_field('name');
            $position = get_sub_field('position');
            $description = get_sub_field('description');
          ?>
            <div class="col s12 m6">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="responsive-img rollover__image">
                </div>
                <div class="card-content">
                  <h5 class="small"><?php echo $position ?></h5>
                  <h3 class="card-title"><?php echo $name ?></h3>
                  <?php echo $description ?>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?> 
        </div>
      </div>
    
    
  <?php endwhile; endif; ?>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>