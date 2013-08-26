<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<title><?php wp_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!-- Favicons -->
<link rel="shortcut icon" href="<?php echo bloginfo( 'template_url' );?>/assets/ico/favicon.png">
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' );?>/assets/ico/apple-touch-icon.png">

<!--[if IE]>
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/ico/metro-tile.png" />
<meta name="msapplication-TileColor" content="#00000" //>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



<header id="masthead" class="site-header" role="banner">
	<div class="container center">

		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>
		</nav><!-- .site-navigation .main-navigation -->
	</div>
	<div class="center">

		<div id="brand">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Display the blog name ?></a>
			</h1>
			<h4 class="site-description">
				<?php bloginfo( 'description' ); // Display the blog description, found in General Settings ?>
			</h4>
		</div><!-- /brand -->

		<div class="clear"></div>
	</div><!--/container -->

</header><!-- #masthead .site-header -->

<div class="main-fluid"><!-- start the page containter -->


<?php if ( !is_front_page() ) { get_template_part( 'breadcrumbs'); } ?>