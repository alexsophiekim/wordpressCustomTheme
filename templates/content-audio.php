<?php
if (has_blocks()) {
    $allBlocks = parse_blocks(get_the_content());
    for ($i=0; $i < count($allBlocks); $i++) {
        if ($allBlocks[$i]['blockName'] === 'core/audio' ) {
            $firstAudioBlock = $allBlocks[$i];
            break;
        }
    }
}
 ?>

<div class="card h-100 border border-success cardColour">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <div class="fullAudio">
            <?php echo apply_filters('the_content', render_block($firstAudioBlock)) ; ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-success btn-block">Listen to Audio</a>
    </div>
</div>
