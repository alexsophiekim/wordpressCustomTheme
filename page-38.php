<?php get_header(); ?>

<div class="container-fluid">
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
            <div class="card my-2 h-100" >
                <h2 class="card-header text-center"><?php the_title(); ?></h2>
                <div class="card-body">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
