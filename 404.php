<?php get_header(); ?>
     <div class="section no-margin banner banner-text" id="partnername-banner" >
        <div class="container">
          <div class="row">
            <div class="col s12 center">
              <h1>4 oh 4</h1>
              <h2>Sorry this page cannnot be found...</h2>
            </div>
          </div>
      </div>
    </div>
    
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12">
            <div class="row"> 
              <div class="col s12 m8 offset-m2">
                <p>Try looking for another option:</p>
                <ul>
                  <?php  wp_nav_menu_no_ul(); ?>
                </ul>
                <?php $defaults = array( 'theme_location'  => 'footer-links-left', 'container' => 'ul' ); wp_nav_menu( $defaults );?>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  
<?php get_footer(); ?>