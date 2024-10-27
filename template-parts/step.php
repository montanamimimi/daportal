<?php 

$post = $args['post'];
$gallery = get_field('gallery', $post->ID);
?>

<div class="step" data-id="<?php echo $args['id']; ?>">
    <div class="number <?php echo $gallery ? '' : 'number--long'; ?>"><?php echo '0' . $args['id']+1; ?></div>
    <div class="images <?php echo $gallery ? '' : 'images--padding'; ?>">
        <h3><?php echo $post->post_title; ?></h3>

        <div class="mob-only">
            <p><?php  echo $post->post_content; ?></p> 
        </div>
        <?php         
            
            if ($gallery) {
                get_template_part('template-parts/gallery', 'dots', array(
                    'images' => $gallery,
                ));
            }
            
        ?>

        <div class="mob-only">
            <?php 
            
            if ($args['order']) {
                echo '<div class="btn btn--large btn--violet mt-4" style="width:80%;">Заказать</div>';
            }
            ?>
        </div>
    </div>
    <div class="description <?php echo $gallery ? 'description--padding' : ''; ?>">
        <p><?php  echo $post->post_content; ?></p> 
        <?php 
        
        if ($args['order']) {
            echo '<div class="btn btn--large btn--violet mt-4" style="width:80%;">Заказать</div>';
        }
        ?>
    </div>
</div>