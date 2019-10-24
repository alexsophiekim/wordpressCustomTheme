<?php
    /*
        Template Name: Searchbar Template
        Template Post Type: page, post
    */
 ?>

 <?php get_header(); ?>

 <div class="container-fluid">
     <div class="flex my-2">
         <form class="form-inline my-2 my-lg-0 justify-content-center">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
     </div>

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
