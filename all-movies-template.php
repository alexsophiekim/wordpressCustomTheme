<?php
    /*
        Template Name: All Movies Template
        Template Post Type: page
    */
 ?>

<?php get_header(); ?>

<div class="container">
    <div class="row my-3" >
        <div class="col">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                        <div class="card h-100">
                            <h2 class="card-header text-center"><?php the_title(); ?></h2>
                            <div class="card-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php
        $args = array(
            'post_type' => 'movie'
        );
        $allMovies = new WP_Query($args);
     ?>
     <?php if ($allMovies -> have_posts()): ?>
         <div class="row">
             <?php while( $allMovies->have_posts()): $allMovies -> the_post(); ?>
                 <div class="col-12 col-sm-3">
                     <div class="card p-3">
                         <h4><?php the_title(); ?></h4>
                         <p>Year Released: <?php echo get_post_meta(get_the_ID(),'1902_year',true) ?></p>
                         <p>Directors: <?php echo get_post_meta(get_the_ID(),'1902_directors',true) ?></p>
                         <p>Genre: <?php echo get_post_meta(get_the_ID(),'1902_genre',true) ?></p>
                     </div>
                 </div>
             <?php endwhile; ?>
         </div>
     <?php endif; ?>

</div>

<?php get_footer(); ?>
