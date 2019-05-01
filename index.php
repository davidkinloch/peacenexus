<?php get_header(); ?>
<?php if (have_posts()) : ?>
<div class="section banner banner-text" id="highlights-banner" >
  <div class="container">
    <div class="row">
      <div class="col s12 m10">
        <h1><?php echo get_the_title(83);?></h1>
        <h2><?php echo get_field('leading_paragraph',83);?></h2>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="section filter">
    <div class="row filter-btns">
      <div class="col s12 m10">
        <a class="btn btn-secondary btn-transparent waves-effect waves-light" href="#">Central Asia <i class="material-icons right">clear</i></a>
        <a class="btn btn-secondary btn-transparent waves-effect waves-light" href="#">South East Asia <i class="material-icons right">clear</i></a>
        <a class="btn btn-secondary btn-transparent waves-effect waves-light" href="#">Western Balkans <i class="material-icons right">clear</i></a>
        <a class="btn btn-secondary waves-effect waves-light" href="#">West Africa <i class="material-icons right">add</i></a>
        <a class="btn btn-secondary waves-effect waves-light" href="#">International <i class="material-icons right">add</i></a>
      </div>
    </div>
    <div class="row filter-btns">
      <div class="col s12 m10 l9">
        <a class="btn btn-primary btn-transparent waves-effect waves-light" href="#">Organisational Development <i class="material-icons right">clear</i></a>
        <a class="btn btn-primary btn-transparent waves-effect waves-light" href="#">Conflict Sensitivity <i class="material-icons right ">clear</i></a>
        <a class="btn btn-primary waves-effect waves-light" href="#">Inclusive Dialogue With Business <i class="material-icons right">add</i></a>
      </div>
      <div class="col s12 l3">
        <a class='dropdown-trigger btn btn-large btn-filter' href='#' data-target='dropdown-highlight'><i class="material-icons right">keyboard_arrow_down</i> Latest Highlights</a>
        <!-- Dropdown Structure -->
        <ul id='dropdown-highlight' class='dropdown-content'>
          <li><a href="#!">Latest Highlights</a></li>
          <li><a href="#!">Highlights A-Z</a></li>
        </ul>
      </div>
    </div>

    <div class="row decked">
      <?php while (have_posts()) : the_post(); ?>
        <div class="col s6 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="responsive-img"  alt="<?php the_title(); ?>">
              <div class="card-content">
                <h3 class="small"><?php the_title(); ?></h3>
                <p><?php the_field('leading_paragraph'); ?></p>
                <a href="<?php the_permalink(); ?>">READ MORE</a>
              </div>
            </div>
            <div class="card-action">
              <?php include 'content/content_categories.php'; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?> 
    </div>
    <div class="row">
      <div class="col s12 center">
        <a class="btn btn-transparent waves-effect waves-dark btn-loadmore">Load More Highlights</a>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>
<?php get_footer(); ?>