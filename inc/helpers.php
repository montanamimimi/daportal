<?php 

function daportal_get_stages($slug) {
    $args = array(
        'post_type' => 'step',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $slug,
            ),
        ),
        'orderby' => 'date',
        'order' => 'ASC',
    );

    $posts = get_posts($args);

    return $posts;
}