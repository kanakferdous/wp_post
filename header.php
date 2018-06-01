<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"><?php bloginfo("name"); ?></span>
      <span class="site-heading-lower"><?php bloginfo("description"); ?></span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <?php
            wp_nav_menu( 
                array(
                    'theme_location' => 'topmenu',
                    'menu_class' => 'navbar-nav',
                )
                );
            ?>
        </div>
      </div>
    </nav>
