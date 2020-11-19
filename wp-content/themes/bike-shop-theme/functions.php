<?php
// Bike Shop Theme Functions.php

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}

function create_custom_posttypes() {

    $labels = array(
        'menu_name'=>'Bikes',
        'name'=>'Bicycles',
        'singular_name'=>'Bicycle'
    );
    
    $args = array(
        'labels'=> $labels,
        'public'=> true,
        'supports'=> array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive'=> true
    );

    register_post_type( 'bikes', $args ); 
}
add_action( 'init', 'create_custom_posttypes' );

?>