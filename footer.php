  <footer class="page-footer blue">
    <div class="container">
      <div class="row noprint">
        <div class="col s12 m3">
           <ul>
            <li><span><span class="tel" itemprop="telephone">+41 22 365 1500</span></span></li>
            <li><a href="mailto:info@peacenexus.org" class="email" itemprop="email">info@peacenexus.org</a></li>
          </ul>
        </div>
        <div class="col s12 m3 no-print">
           <?php $defaults = array( 'theme_location'  => 'footer-links-left', 'container' => 'ul' ); wp_nav_menu( $defaults );?>  
        </div>
      </div>
      <a href="https://www.leidar.com" target="_blank" class="builtby no-print">Website by Leidar</a>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
            <div class="col s12">
              &copy; 2019 PeaceNexus Foundation <a class="no-print" href="<?php echo get_page_link(104); ?>">Privacy</a><a class="right no-print" href="#top"><img class="no-print" src="<?php bloginfo('template_url')?>/assets/src/up.svg" alt="Go to top of the page"></a>
            </div>
        </div>
      </div>
    </div>
  </footer>
</div><!-- wnd mega wrap-->
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