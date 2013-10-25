<?php
 
// Force disable all modules by default
add_filter( 'jetpack_get_default_modules', '__return_empty_array' );

// Force Selecting Publicise
// add_filter( 'publicize_checkbox_default', '__return_false' );
 

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function client_jetpack_setup() {
        add_theme_support( 'infinite-scroll', array(
                'container' => 'main',
                'footer'    => 'page',
        ) );
}
add_action( 'after_setup_theme', 'client_jetpack_setup' );


