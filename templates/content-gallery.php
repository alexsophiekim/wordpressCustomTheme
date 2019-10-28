<div class="card h-100 border border-danger">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <div class="">
            <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-block">View Gallery</a>
    </div>
</div>
