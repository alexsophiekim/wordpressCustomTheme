    <!DOCTYPE html>
    <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title></title>
            <?php wp_head(); ?>
        </head>
        <body>
            <?php if(has_nav_menu('top_navigation')): ?>
                <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                  <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top_navigation" aria-controls="top_navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Navbar</a>
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

                <div class="container">
                    <div class="row">
                        <?php if(has_nav_menu('side_navigation')): ?>
                            <div class="col-12 col-md-3">
                                <div class="card h-100 mb-2 mt-2 p-2">
                                    <?php wp_nav_menu(array('theme-location' => 'side_navigation')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col">
                            <?php if( have_posts() ): ?>
                                <?php while( have_posts() ): the_post(); ?>
                                    <div class="card mb-3" >
                                        <h5 class="card-header"><?php the_title(); ?></h5>
                                        <div class="card-body">
                                            <div class="row">
                                                <?php if(has_post_thumbnail()): ?>
                                                    <?php if(is_home()): ?>
                                                        <div class="col-12 col-md-3">
                                                            <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="col-12 text-center mb-5">
                                                            <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <div class="col">
                                                    <div>
                                                        <?php if(is_home()): ?>
                                                            <?php the_excerpt(); ?>
                                                        <?php else: ?>
                                                            <?php the_content(); ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if(!is_single()): ?>
                                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


            <?php if(has_nav_menu('footer_navigation')): ?>
            <footer>
                <nav class="navbar fixed-bottom bg-dark tex-white">
                    <?php
                    wp_nav_menu( array( 'theme_location' => 'footer_navigation' ) );
                    ?>
                </nav>
            </footer>
        <?php endif; ?>

        <?php wp_footer(); ?>
     </body>
    </html>
