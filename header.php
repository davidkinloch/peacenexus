<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PeaceNexus</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url')?>/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url')?>/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url')?>/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo('template_url')?>/site.webmanifest">
        <link rel="mask-icon" href="<?php bloginfo('template_url')?>/safari-pinned-tab.svg" color="#004480">
        <meta name="msapplication-TileColor" content="#004480">
        <meta name="theme-color" content="#004480">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/css/print.css"  media="print"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header scrollspy" id="top">
          <nav role="navigation">
            <div class="nav-wrapper container">
              <a id="logo-container" href="/" class="brand-logo"><img src="<?php bloginfo('template_url')?>/assets/src/LogoPN10.svg" alt=""></a>
              <ul class="main-nav right hide-on-med-and-down no-print">
                <?php wp_nav_menu_no_ul(); ?>
                <li class="item-search">
                  <form action="/" method="get">
                    <div class="input-field">
                      <input type="search" name="s" id="search" value="<?php the_search_query(); ?>"  required>
                      <label class="label-icon" for="search"><i class="material-icons material-icons--search">search</i></label>
                      <i class="material-icons search-close">close</i>
                    </div>
                  </form>
                </li>
                <li class="lang-switch">
                  <form>
                    <div class="input-field">
                      <select>
                        <option value="https://peacenexus.org" selected="">EN</option>
                          <option value="https://fr.peacenexus.org">FR</option>
                          <option value="https://ru.peacenexus.org">RU</option>
                      </select>
                    </div>
                  </form>
                </li>
                <li class="right"><a href="/call-for-proposals" class="btn btn-large btn-tertiary waves-effect waves-light">Call For Proposals</a></li>
              </ul>

              <ul id="nav-mobile" class="sidenav no-print">
                  <?php  wp_nav_menu_no_ul(); ?>
                  <li class="sidenav-search">
                    <form action="/" method="get">
                      <div class="input-field">
                        <input type="search" name="s" id="search" value="<?php the_search_query(); ?>"  required>
                        <label class="label-icon" for="search"><i class="material-icons material-icons--search">search</i></label>
                        <i class="material-icons search-close">close</i>
                      </div>
                    </form>
                  </li>
                  <li class="lang-switch">
                    <form>
                      <div class="input-field">
                        <select>
                          <option value="https://peacenexus.org" selected="">EN</option>
                          <option value="https://fr.peacenexus.org">FR</option>
                          <option value="https://ru.peacenexus.org">RU</option>
                        </select>
                        
                      </div>
                    </form>
                  </li>
                  <li><a href="/call-for-proposals" class="btn btn-tertiary waves-effect waves-light">Call For Proposals</a></li>
                </ul>
              <a href="#" data-target="nav-mobile" class="sidenav-trigger no-print"><i class="material-icons">menu</i></a>
            </div>
          </nav>
          <?php include 'content/content_notifcation.php'; ?>
        </header>

       
        




