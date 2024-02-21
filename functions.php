<?php

// Variables

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));
include(get_theme_file_path('/includes/setup.php'));


// Hooks
add_action('wp_enqueue_scripts','u_enque');
add_action('wp_head','u_head',5);
// loading editor styles
add_action('after_setup_theme','u_setup_theme');

