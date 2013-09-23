<?php

################################################################################
// Maximum allowed width of content
################################################################################
if (!isset($content_width)) {
    $content_width = 770; /* pixels */
}

################################################################################
// Add Rss feed support to Head section
################################################################################
add_theme_support( 'automatic-feed-links' );

################################################################################
// Add post format theme support, similar to Tumblr
################################################################################
// add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));

################################################################################
// Register Sidebars
################################################################################

    if (function_exists('register_sidebar')) {

	    register_sidebar(array(
    		'name' => __('Main Sidebar' ),
    		'id'   => 'main-sidebar',
    		'description'   => __( 'Widgets in this area will show in the default sidebar.' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));

    }

################################################################################
// Custom Menus
################################################################################

if ( function_exists( 'register_nav_menu' ) ) {
register_nav_menu( 'navigation', 'Main Navigation' );
register_nav_menu( 'footer-navigation', 'Footer Navigation' );
}

################################################################################
// Adding Post Thumbnails and Image Sizes
################################################################################

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 160, 120 ); // 160 pixels wide by 120 pixels high
}

if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'bootstrap-small', 260, 180 ); // 260 pixels wide by 180 pixels high
  add_image_size( 'bootstrap-medium', 360, 268 ); // 360 pixels wide by 268 pixels high
}

################################################################################
// Scripts & Styles
################################################################################

function client_scripts()  {

   if ( !is_admin() ) {

	/* CSS Stylesheets */

	// Bootstrap
	wp_register_style( 'bootstrap-cdn', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css', '', '3.0.0', 'all' );
	wp_enqueue_style('bootstrap-cdn');

	// Font Awesome
	wp_register_style( 'fontawesome-cdn', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css', '', '3.2.1', 'all' );
	wp_enqueue_style('fontawesome-cdn');

	// Google Fonts
	wp_register_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans', '', null, 'all' );
	wp_enqueue_style('google-fonts');

	// Main CSS
	wp_register_style( 'general', get_template_directory_uri() . '/assets/css/general.css', '', null, 'all' );
	wp_enqueue_style('general');

	/* Javascript */

	// jQuery
	wp_enqueue_script('jquery');

	// Bootstrap Javascript
	wp_register_script( 'bootstrap-cdn', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', 'jquery', '3.0.0', true  );
	wp_enqueue_script('bootstrap-cdn');

	// CUSTOM JS
	wp_register_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', 'jquery', null, true  );
	wp_enqueue_script('custom');

	}}

add_action( 'wp_enqueue_scripts', 'client_scripts' );

################################################################################
// Custom CSS for Wordpress Editor
################################################################################

	add_editor_style('/assets/css/editor-style.css');

################################################################################
// Custom Login Page Styles
################################################################################

	// Custom Login CSS
	function client_custom_login() {
		wp_register_style( 'custom-login', get_template_directory_uri() . '/assets/css/custom-login.css', true, 'all' );
		wp_enqueue_style( 'custom-login' );
		remove_filter( 'wp_admin_css','wp_admin_css' );
	}
	add_action('login_head', 'client_custom_login');

	// changing the login page URL
    function client_wp_login_url(){
    	return (home_url()); // Default Site URL
    }
    add_filter('login_headerurl', 'client_wp_login_url');

    // changing the login page URL hover text
    function client_wp_login_title(){
	    return (get_option('blogname'));  // Hides "Powered by WordPress"
    }
    add_filter('login_headertitle', 'client_wp_login_title');

