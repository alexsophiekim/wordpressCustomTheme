<div class="card h-100 border border-primary cardColour">
    <?php the_post_thumbnail('medium', ['class'=>'card-img-top']); ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block buttonColour">Read More</a>
    </div>
</div>
