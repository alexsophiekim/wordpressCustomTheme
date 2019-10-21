<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body>

        <div class="container">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="card mb-3" >
                      <div class="row no-gutters">
                        <div class="col-md-3">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <?php if(has_post_thumbnail): ?>
                                    <?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid']); ?>

                            <?php endif; ?>
                        </div>
                        <div class="col-md-9">
                          <div class="card-body">
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
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    <?php wp_footer(); ?>
</body>
</html>
