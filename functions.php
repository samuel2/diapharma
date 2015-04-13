<?php

function Diapharma_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'Diapharma_resources');


// Get top ancestor
function get_top_ancestor_id() {

    global $post;

    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }

    return $post->ID;
}

// Does page have children?
function has_children() {

    global $post;

    $pages = get_pages('child_of=' . $post->ID);

    return count($pages);
}

//Theme setup
function managedImage_setup() {

    // Navigation Menus
    register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));


    //Add feautured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('barnner-image', 920, 210, array('left', 'top'));
}


// Search from
function get_search_from() {
    
}

add_action('after_setup_theme','managedImage_setup');
