<?php
    /*
        Template Name: Searchbar Template
        Template Post Type: page, post
    */
 ?>

 <?php get_header(); ?>

 <div class="container">
     <div class="flex my-2">
         <form action="<?php echo home_url(); ?>" method="get">
             <div class="form-group">
                 <label for="">Search for posts</label>
                 <input type="hidden" name="post_type" value="post,movie">
                 <input name="s" value="<?php the_search_query(); ?>" type="text" class="form-control" placeholder="Search posts" >
             </div>
             <div class="form-group">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
             </div>
        </form>
     </div>

     <?php if( have_posts() ): ?>
         <?php while( have_posts() ): the_post(); ?>
             <div class="card my-2 h-100" >
                 <div class="card-body">
                     <?php the_content(); ?>
                 </div>
             </div>
         <?php endwhile; ?>
     <?php endif; ?>
 </div>

 <?php get_footer(); ?>
