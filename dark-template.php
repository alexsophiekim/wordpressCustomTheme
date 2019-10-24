<?php
    /*
        Template Name: Dark Template
        Template Post Type: page, post
    */
 ?>
 <?php get_header(); ?>
 <div class="container-fluid text-white">
     <?php if( have_posts() ): ?>
         <?php while( have_posts() ): the_post(); ?>
             <div class="row" style="background-color:dimgrey;">
                 <div class="col-12">
                     <?php the_content(); ?>
                 </div>
             </div>

         <?php endwhile; ?>
     <?php endif; ?>
 </div>

 <?php get_footer(); ?>
