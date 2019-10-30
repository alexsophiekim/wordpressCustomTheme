
<?php error_reporting(E_ALL);  ?>
<?php get_header(); ?>

<div class="container ">
    <div class="row">
        <?php if(has_nav_menu('side_navigation')): ?>
            <div class="col-12 col-md-3 ">
                <div class="card h-100 mb-2 mt-2 p-2">
                    <?php wp_nav_menu(array(
                        'theme-location' => 'side_navigation',
                        'menu_class' => 'list-group list-group-flush',
                        'container' => '',
                        'menu_id' => 'sideNav'
                    )); ?>
                </div>
            </div>
            <?php endif; ?>
        <div class="col h-100">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="card h-100 m-2" >
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <div class="card-body">
                            <div class="row">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php if(!is_singular()): ?>
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
                                        <?php if(!is_singular()): ?>
                                            <?php the_excerpt(); ?>
                                        <?php else: ?>
                                            <?php the_content(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(!is_singular()): ?>
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
<?php get_footer(); ?>
