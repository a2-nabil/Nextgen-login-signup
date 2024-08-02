<?php
function a2n_assets()
{
    // Enqueue featured-course stylesheet
    wp_enqueue_style("top-course", get_stylesheet_directory_uri() . "/assets/css/featured-course.css", null, time());
}
add_action('wp_enqueue_scripts', 'a2n_assets');



// include featured course function
include_once get_stylesheet_directory() . '/inc/featured-course_function.php';