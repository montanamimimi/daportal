<?php 

$images = $args['images'];
$counter = count($images);

?>

<div class="gallery-dots">
    <div class="image-container">

        <?php 
        
        foreach ($images as $key => $image) { ?>

            <div class="image-item <?php  echo ($key == 0) ? '' : 'image-item--hidden'; ?>" data-id="<?php echo $key; ?>">
                <img src="<?php echo $image['url']; ?>" alt="">
            </div>

        <?php } ?>

    </div>
    <div class="dots-container">
        <?php 
        
        foreach ($images as $key => $image) { ?>

            <div class="dot <?php  echo ($key == 0) ? 'dot--active' : ''; ?>" data-id="<?php echo $key; ?>"></div>

        <?php } ?>
    </div>
</div>