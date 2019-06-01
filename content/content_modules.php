<?php
      // check if the flexible content field has rows of data
      if( have_rows('content_modules') ): ?>
      
      <div class="container">

      <?php
        // loop through the rows of data
        while ( have_rows('content_modules') ) : the_row(); ?>

      

        <?php if( get_row_layout() == 'related_highlights__regions' ):
          $post_id_1 = get_sub_field('hightlight__region_1', false, false);
          $post_id_2 = get_sub_field('hightlight__region_2', false, false);
          $post_id_3 = get_sub_field('hightlight__region_3', false, false); 
          $title = get_sub_field('title');
          $description = get_sub_field('description'); 
        ?>

        <div class="section decked">
          <div class="row">
            <div class="col s12 center">
              <h2 class="blue-text"><?php echo $title ?></h2>
              <?php echo $description ?>
            </div>
          </div>
          <div class="row">

            <?php if($post_id_1): ?>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <a class="card-link waves-effect waves-block waves-light" href="<?php echo get_the_permalink($post_id_1); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($post_id_1) ;?>" class="responsive-img"  alt="<?php echo get_the_title($post_id_1); ?>">
                    <div class="card-content">
                      <h3 class="small"><?php echo get_the_title($post_id_1); ?></h3>
                      <p><?php echo get_field('leading_paragraph', $post_id_1); ?></p>
                      <span class="card-more">READ MORE</span>
                    </div>
                  </a>
                </div>
                <div class="card-action">
                  	<?php 
          						$currentPostId = $post_id_1;
          						include 'content_categories.php'; 
          					?>
                </div>
              </div>
            </div>
            <?php endif; ?>

            <?php if($post_id_2): ?>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <a class="card-link waves-effect waves-block waves-light"  href="<?php echo get_the_permalink($post_id_2); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($post_id_2) ;?>" class="responsive-img"  alt="<?php echo get_the_title($post_id_2); ?>">
                    <div class="card-content">
                      <h3 class="small"><?php echo get_the_title($post_id_2); ?></h3>
                      <p><?php echo get_field('leading_paragraph', $post_id_2); ?></p>
                      <span class="card-more">READ MORE</span>
                    </div>
                  </a>
                </div>
                <div class="card-action">
                  	<?php 
          						$currentPostId = $post_id_2;
          						include 'content_categories.php'; 
          					?>
                </div>
              </div>
            </div>
            <?php endif; ?>

            <?php if($post_id_3): ?>
            <div class="col s12 m6 l4 offset-m3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <a class="card-link waves-effect waves-block waves-light"  href="<?php echo get_the_permalink($post_id_3); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($post_id_3) ;?>" class="responsive-img"  alt="<?php echo get_the_title($post_id_3); ?>">
                    <div class="card-content">
                      <h3 class="small"><?php echo get_the_title($post_id_3); ?></h3>
                      <p><?php echo get_field('leading_paragraph', $post_id_3); ?></p>
                      <span class="card-more">READ MORE</span>
                    </div>
                  </a>
                </div>
                <div class="card-action">
                  	<?php 
            						$currentPostId = $post_id_3;
            						include 'content_categories.php'; 
            					?>
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
        



        <?php elseif( get_row_layout() == 'links' ): 
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $left = get_sub_field('left_block');
        $middle = get_sub_field('middle_block');
        $right = get_sub_field('right_block');
       ?>

        <div class="section links">
          <div class="row center">
            <div class="col s12">
              <h2 class="blue-text"><?php echo $title ?></h2>
              <?php echo $description ?>
            </div>
            <div class="col s6 m4 l4">
                <?php if( have_rows('left_block') ): while ( have_rows('left_block') ) : the_row(); ?>
                  <ul class="links__menu">
                  <?php if( have_rows('links') ): while ( have_rows('links') ) : the_row();  ?>     
                      <li>
                        <?php if ( get_sub_field('link_url') ): ?>
                          <a target="_blank" href="<?php echo get_sub_field('link_url');?>"><i class="material-icons">chevron_right</i><?php echo get_sub_field('link_label');?></a>
                        <?php else: ?>
                          <?php echo get_sub_field('link_label');?>
                        <?php endif;?>
                      </li>
                    <?php   endwhile; endif; ?>
                  </ul>
                <?php endwhile; endif; ?>
            </div>
            
            <div class="col s6 m4 l4">
              <?php if( have_rows('middle_block') ): while ( have_rows('middle_block') ) : the_row(); ?>
                <ul class="links__menu">
                <?php if( have_rows('links') ): while ( have_rows('links') ) : the_row();  ?>     
                    <li>
                      <?php if ( get_sub_field('link_url') ): ?>
                        <a target="_blank" href="<?php echo get_sub_field('link_url');?>"><i class="material-icons">chevron_right</i><?php echo get_sub_field('link_label');?></a>
                      <?php else: ?>
                        <?php echo get_sub_field('link_label');?>
                      <?php endif;?>
                    </li>
                  <?php   endwhile; endif; ?>
                </ul>
              <?php endwhile; endif; ?>
            </div>
            <div class="col s6 m4 l4 offset-s3">
              <?php if( have_rows('right_block') ): while ( have_rows('right_block') ) : the_row(); ?>
                <ul class="links__menu">
                <?php if( have_rows('links') ): while ( have_rows('links') ) : the_row();  ?>     
                    <li>
                      <?php if ( get_sub_field('link_url') ): ?>
                        <a target="_blank" href="<?php echo get_sub_field('link_url');?>"><i class="material-icons">chevron_right</i><?php echo get_sub_field('link_label');?></a>
                      <?php else: ?>
                        <?php echo get_sub_field('link_label');?>
                      <?php endif;?>
                    </li>
                  <?php   endwhile; endif; ?>
                </ul>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>

        <?php elseif( get_row_layout() == 'blockquote' ): 
          $quote = get_sub_field('quote');
          $cite = get_sub_field('cite'); 
        ?>

        <div class="section">
          <div class="row">
            <div class="col s12 center no-padding">
              <figure class="quote">
                <figcaption class="quote__text valign-wrapper">
                  <div class="row"> 
                    <div class="col s10 offset-s1" >
                      <i class="material-icons">format_quote</i>
                      <blockquote><?php echo $quote ;?></blockquote>
                      <p class="small"><?php echo $cite ;?></p>
                      <i class="material-icons">format_quote</i>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>

      <?php elseif( get_row_layout() == 'video' ): 
        $embed_code = get_sub_field('video_embed_code');
      ?>
      <div class="section video">
        <div class="row">
          <div class="col s12">
            <div class="video-container">
              <?php echo $embed_code ;?>
            </div>
          </div>
        </div>
      </div>

      <?php elseif( get_row_layout() == 'cms_content' ): 
        $embed_code = get_sub_field('add_wysiwyg');
      ?>
      <div class="section cms_content">
        <div class="row">
          <div class="col s12">
            <div class="cms-text">
              <?php echo $embed_code ;?>
            </div>
          </div>
        </div>
      </div>

      <?php elseif( get_row_layout() == 'blue_cms_content' ): 
        $embed_code = get_sub_field('add_wysiwyg');
      ?>
      <div class="section cms_content cms_content--blue">
        <div class="row">
          <div class="col s12">
            <div class="cms-text">
              <?php echo $embed_code ;?>
            </div>
          </div>
        </div>
      </div>

    <?php elseif( get_row_layout() == 'solo_grid' ): 
        if( have_rows('main') ): 
        while( have_rows('main') ): the_row(); 
        // vars
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $link = get_sub_field('link');
          $white = get_sub_field('white');
      ?>
      <div class="section jigsaw jigsaw--solo">
        <div class="row">
          <div class="col s12">
            <div class="card">
                <div class="card-image">
                  <img  class="responsive-img rollover__image"  alt="<?php echo $title ;?>" src="<?php echo $image; ?>">
                </div>
                <a href="<?php echo $link; ?>" class="card-content waves-effect waves-block waves-light">
                  <h3 class="card-title activator" <?php if($white): ?>style="color:#FFF"<?php endif;?>><?php echo $title ;?></h3>
                </a>
              </div>
          </div>
        </div>
      </div>
      <?php  endwhile; endif; ?>

      <?php elseif( get_row_layout() == 'grid' ): ?>
        <!-- Rollover Blocks -->
        <div class="section jigsaw">
          <div class="row">
            
              <?php if( have_rows('main_square') ): 
                while( have_rows('main_square') ): the_row(); 
                // vars
                  $image = get_sub_field('image');
                  $title = get_sub_field('title');
                  $link = get_sub_field('link');
                  $white = get_sub_field('white');
                  $border = get_sub_field('highlighted_border');
                ?>
              <div class="col s12 m12 l6 <?php if($border): ?>active<?php endif;?>">
                <div class="card">
                  <div class="card-image">
                    <img  class="responsive-img rollover__image"  alt="<?php echo $title ;?>" src="<?php echo $image; ?>">
                  </div>
                  <a href="<?php echo $link; ?>" class="card-content waves-effect waves-block waves-light">
                    <h3 class="card-title activator" <?php if($white): ?>style="color:#FFF"<?php endif;?>><?php echo $title ;?></h3>
                  </a>
                </div>
              </div>
              <?php  endwhile; endif; ?>

              <div class="col s12 m12 l6 ">
              <div class="row">
                  <?php if( have_rows('small_left_square') ): 
                  while( have_rows('small_left_square') ): the_row(); 
                  // vars
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $white = get_sub_field('white');
                    $border = get_sub_field('highlighted_border');
                  ?>
                  <div class="col s12 m6 <?php if($border): ?>active<?php endif;?>">
                    <div class="card">
                      <div class="card-image">
                        <img  class="responsive-img rollover__image"  alt="<?php echo $title ;?>" src="<?php echo $image; ?>">
                      </div>
                      <a href="<?php echo $link; ?>" class="card-content waves-effect waves-block waves-light">
                        <h3 class="card-title activator" <?php if($white): ?>style="color:#FFF"<?php endif;?>><?php echo $title ;?></h3>
                      </a>
                    </div>
                  </div>
                  <?php  endwhile; endif; ?>
          
                  <?php if( have_rows('small_right_square') ): 
                  while( have_rows('small_right_square') ): the_row(); 
                  // vars
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $white = get_sub_field('white');
                   $border = get_sub_field('highlighted_border');
                  ?>
                  <div class="col s12 m6 <?php if($border): ?>active<?php endif;?>">
                    <div class="card">
                      <div class="card-image">
                        <img  class="responsive-img rollover__image"  alt="<?php echo $title ;?>" src="<?php echo $image; ?>">
                      </div>
                      <a href="<?php echo $link; ?>" class="card-content waves-effect waves-block waves-light">
                        <h3 class="card-title activator" <?php if($white): ?>style="color:#FFF"<?php endif;?>><?php echo $title ;?></h3>
                      </a>
                    </div>
                  </div>
                  <?php  endwhile; endif; ?>
              </div>
              <div class="row">
                <?php if( have_rows('letterbox') ): 
                  while( have_rows('letterbox') ): the_row(); 
                  // vars
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $white = get_sub_field('white');
                    $border = get_sub_field('highlighted_border');
                  ?>
                  <div class="col s12 m12 <?php if($border): ?>active<?php endif;?>">
                    <div class="card">
                      <div class="card-image">
                        <img  class="responsive-img rollover__image"  alt="<?php echo $title ;?>" src="<?php echo $image; ?>">
                      </div>
                      <a href="<?php echo $link; ?>" class="card-content waves-effect waves-block waves-light">
                        <h3 class="card-title activator" <?php if($white): ?>style="color:#FFF"<?php endif;?>><?php echo $title ;?></h3>
                      </a>
                    </div>
                </div>
                <?php  endwhile; endif; ?>
              </div>
            </div>
          </div>
        </div>


      <?php endif; endwhile; ?>
      </div>
    <?php endif; ?>