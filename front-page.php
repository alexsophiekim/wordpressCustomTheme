<?php get_header(); ?>
    <?php if(has_header_image()): ?>
        <div class="container-fluid p-0">
            <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">
                <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
    <?php else: ?>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if( have_posts() ): ?>
        <div class="container">
            <div class="row mt-3">
                <?php while( have_posts() ): the_post(); ?>
                    <div class="col-12 col-md-4 mb-3">
                        <?php get_template_part('templates/content', get_post_format()); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php
                $count_posts = wp_count_posts();
                $published_posts = $count_posts->publish;

                $default_posts_per_page = get_option( 'posts_per_page' );
            ?>
            <?php if ($published_posts > $default_posts_per_page):  ?>
                <?php $args = array(
                	'type'  => 'array'
                );
                $paginationLinks = paginate_links($args);
                ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php foreach($paginationLinks as $link): ?>
                            <li class="page-item">
                                <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <button class="btn btn-outline-primary">
                    <?php echo get_previous_posts_link();?>
                    <?php echo get_next_posts_link(); ?>
                </button>

                <!-- <?php echo paginate_links( ); ?> -->
                <!-- <?php next_post_link(); ?> -->

            <?php endif; ?>
        </div>
    <?php endif; ?>





<?php get_footer(); ?>
