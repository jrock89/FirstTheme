<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(''); ?></title>

    <!-- custom google font -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- HEADER  -->
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" name="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="<?php echo esc_url( home_url() ); ?>" class="navbar-brand">
              <?php echo get_bloginfo( 'name' ); ?>
            </a>
          </div>
          <!-- navbar header end -->

          <div class="collapse navbar-collapse">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
          </div>
          <!-- navrbar collapse end -->
        </div>
        <!-- container fluid end -->
      </nav>

      <!-- hero section -->
      <div class="container-fluid">
        <div class="row feature">
          <img src="<?php header_image(); ?>" alt="lake background" />

          <div class="feature-text col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
            <p>
              <?php featureText(); ?>
            </p>
          </div>
          <!-- feature text end -->
        </div>
        <!-- row end -->
      </div>
      <!-- fluid container end -->

    </header>
