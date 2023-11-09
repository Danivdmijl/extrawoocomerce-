<?php
add_action( 'wp_enqueue_scripts', 'dani_child_enqueue_styles' );
function dani_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
