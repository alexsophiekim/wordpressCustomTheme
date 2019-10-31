<?php
if (has_blocks()) {
    $allBlocks = parse_blocks(get_the_content());
    for ($i=0; $i < count($allBlocks); $i++) {
        if ($allBlocks[$i]['blockName'] === 'core/image' ) {
            $firstImageBlock = $allBlocks[$i];
            break;
        }
    }
}
 ?>

<div class="card h-100 border border-info cardColour">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <div class="img-fluid">
            <?php echo apply_filters('the_content', render_block($firstImageBlock)) ; ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block">View Image</a>
    </div>
</div>
