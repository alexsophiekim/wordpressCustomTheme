<?php get_header(); ?>

    <div class="container">
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ): the_post(); ?>
        <div class="row">
            <?php if (has_post_thumbnail()): ?>
                <div class="col-12">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            <div class="col-12 p-4">
                 <?php the_content(); ?>
            </div>
        </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
