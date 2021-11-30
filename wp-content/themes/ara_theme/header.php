<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Navigation -->
<div class="header-container">
    <div class="container-fluid">
        <header class="row header-inner">
            <div class="col-md-3">
            <h1 class="site-title">
            <a href="<?php esc_url(home_url('/'));?>"><?php bloginfo('name');?></a>
            </h1>
            </div>
            <div class="col-md-9">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                        'depth'             => 2,
                        'container'         => 'false',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()
                    ) );
                    ?>
                </nav><!-- .main-navigation -->
            </div>
        </header>
    </div>
</div>