<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php if(has_nav_menu('top_navigation')): ?>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark barColour" role="navigation">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top_navigation" aria-controls="top_navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo get_bloginfo('name'); ?></a>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'top_navigation',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'top_navigation',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div>
            </nav>
        <?php endif; ?>
