<div class="">
    <label for="">When: </label>
    <input type="date" name="event_date" required pattern="\d{2}-\d{2}-\d{4}" value="<?php echo get_post_meta(get_the_ID(),'event_date',true);?>">
</div>
<div class="">
    <label for="">Event description: </label>
    <input type="text" name="event_title" value="<?php echo get_post_meta(get_the_ID(),'event_title',true);?>">
</div>
<div class="">
    <label for="">Host name: </label>
    <input type="text" name="event_host" value="<?php echo get_post_meta(get_the_ID(),'event_host',true);?>">
</div>
