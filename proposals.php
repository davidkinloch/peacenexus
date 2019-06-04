<?php get_header(
/*
Template Name: Calls For Proposal
*/
); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(
  $leading_paragraph = get_field('leading_paragraph')
); ?>

<div class="section banner banner-text" id="proposals-banner" >
  <div class="container">
    
    <div class="row">
      <div class="col s12 m6">
        <h1><?php the_title(); ?></h1>
        <h2><?php echo get_field('callout'); ?></h2>
      </div>
      <div class="col s12 m6">
        <h2><?php echo $leading_paragraph ;?></h2>
      </div>
    </div>
  </div>
</div>

<div class="megawrap">
<div class="container">
  <div class="section tabs-focus">
    <div class="row">
      <ul id="tabs-focus" class="tabs">
        <li class="tab col s3">
          <a class="active" href="#focus-1">
            <span>1</span>
            <h3>1. What We Support</h3>
          </a>
        </li>
        <li class="tab col s3">
          <a href="#focus-2">
            <span>2</span>
            <h3>2. Are You Eligible?</h3>
          </a>
        </li>
        <li class="tab col s3">
          <a href="#focus-3">
            <span>3</span>
            <h3>3. How to Prepare</h3>
          </a>
        </li>
        <li class="tab col s3">
          <a href="#focus-4">
            <span>4</span>
            <h3>4. Apply Here</h3>
          </a>
        </li>
      </ul>
    </div>

    <?php

    if( have_rows('step_1') ):

      while( have_rows('step_1') ): the_row();

        $og = get_sub_field('organisational_development');
        $cs = get_sub_field('conflict_sensitivity');
        $id = get_sub_field('inclusive_dialogue');
    ?>

    <div class="row tab-content">
      <div id="focus-1" class="col s12">
        <div class="row">
          <div class="col s12 hide-on-large-only no-margin">
            <h3 class="blue-text">What We Support</h3>
          </div>
          <div class="col s12 m4">
            <?php echo $og['text']; ?>
            <?php if($og['cta_link']) :?>  
              <a href="<?php echo $og['cta_link']; ?>" class="btn btn-transparent btn-large"><?php echo $og['cta_label']; ?></a>
            <?php endif; ?>
          </div>
          <div class="col s12 m4">
            <?php echo $cs['text']; ?>
            <?php if($cs['cta_link']) :?> 
              <a href="<?php echo $cs['cta_link']; ?>" class="btn btn-transparent btn-large"><?php echo $cs['cta_label']; ?></a>
            <?php endif; ?>
          </div>
          <div class="col s12 m4">
            <?php echo $id['text']; ?>
            <?php if($id['cta_link']) :?> 
              <a href="<?php echo $id['cta_link']; ?>" class="btn btn-transparent btn-large"><?php echo $id['cta_label']; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    
      <?php endwhile; endif; ?>
      
      <?php
        $step_2 = get_field('step_2');
        $step_3 = get_field('step_3');
      ?>
      <div id="focus-2" class="col s12">
        <div class="row">
         <div class="col s12 m6 l6 offset-l3">
            <h3 class="hide-on-large-only blue-text">How to Prepare</h3>
            <?php echo $step_2['main_text']; ?>
          </div>
        </div>
      </div>

      <div id="focus-3" class="col s12">
        <div class="row"> 
         <div class="col s12 m6 l6 offset-l3">
            <h3 class="hide-on-large-only blue-text">Apply Here</h3>
            <?php echo $step_3['main_text']; ?>
          </div>
        </div>
      </div>

      <?php
      if( have_rows('step_4') ):

        while( have_rows('step_4') ): the_row();

          $main_text = get_sub_field('main_text');
          $og = get_sub_field('organisational_development');
          $cs = get_sub_field('conflict_sensitivity');
          $id = get_sub_field('inclusive_dialogue');
      ?>
      <div id="focus-4" class="col s12">
        <div class="row">
          <div class="col s12 l6">
            <h3 class="hide-on-large-only blue-text">Apply Here</h3>
            <?php echo $main_text; ?>
          </div>

          <div class="col s12 l6">
            <div class="row">
              <div class="col s12">
                <div class="tab-content__final">
                  <h5>Organisational Development</h5>
                  <div class="cta-block">
                    <?php if($og['cta_link_2']) :?>   
                      <a href="<?php echo $og['cta_link_2']; ?>" class="btn btn-transparent waves-effect waves-light"><?php echo $og['cta_label_2']; ?></a>
                    <?php endif; ?>
                    <?php if($og['cta_link']) :?>
                      <a href="<?php echo $og['cta_link']; ?>" class="btn  waves-effect waves-light"><?php echo $og['cta_label']; ?></a>
                    <?php endif; ?>
                  </div>
                  <h5>Conflict Sensitivity</h5>
                  <div class="cta-block">
                    <?php if($cs['cta_link_2']) :?> 
                      <a href="<?php echo $cs['cta_link_2']; ?>" class="btn btn-transparent waves-effect waves-light"><?php echo $cs['cta_label_2']; ?></a>
                    <?php endif; ?>
                    <?php if($cs['cta_link']) :?> 
                      <a href="<?php echo $cs['cta_link']; ?>" class="btn  waves-effect waves-light"><?php echo $cs['cta_label']; ?></a>
                    <?php endif; ?>
                  </div>
                  <h5>Inclusive Dialogue with Business</h5>
                  <div class="cta-block">
                    <?php if($id['cta_link_2']) :?> 
                      <a href="<?php echo $id['cta_link_2']; ?>" class="btn btn-transparent waves-effect waves-light"><?php echo $id['cta_label_2']; ?></a>
                    <?php endif; ?>
                    <?php if($id['cta_link']) :?> 
                      <a href="<?php echo $id['cta_link']; ?>" class="btn  waves-effect waves-light"><?php echo $id['cta_label']; ?></a>
                    <?php endif; ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>

    </div>
  </div>
</div>
</div>

<?php include 'content/content_modules.php'; ?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>