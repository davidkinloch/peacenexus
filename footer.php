
  <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col s12 m3">
           <ul>
            <li><span><span class="tel" itemprop="telephone">+41 22 365 1500</span></span></li>
            <li><a href="mailto:info@peacenexus.org" class="email" itemprop="email">info@peacenexus.org</a></li>
          </ul>
        </div>
        <div class="col s12 m3">
           <?php $defaults = array( 'theme_location'  => 'footer-links-left', 'container' => 'ul' ); wp_nav_menu( $defaults );?>  
        </div>
      </div>
      <a href="https://www.leidar.com" target="_blank" class="builtby">Website by Leidar</a>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
            <div class="col s12">
              &copy; 2019 PeaceNexus Foundation <a href="<?php echo get_page_link(102); ?>">Terms &amp; Conditions</a> <a href="<?php echo get_page_link(104); ?>">Privacy</a><a class="right" href="#top"><img src="<?php bloginfo('template_url')?>/assets/src/up.svg" alt=""></a>
            </div>
        </div>
      </div>
    </div>
  </footer>  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url')?>/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
   <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="<?php bloginfo('template_url')?>/js/build/production.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139146792-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-139146792-1');
  </script>
  <?php wp_footer(); ?> 
  </body>
</html>