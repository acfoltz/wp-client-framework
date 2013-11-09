<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php wp_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="shortcut icon" href="<?php echo bloginfo( 'template_url' );?>/assets/ico/favicon.png">
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' );?>/assets/ico/apple-touch-icon.png">

<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/ico/metro-tile.png" />
<meta name="msapplication-TileColor" content="#00000" //>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


			<!-- header -->
			<header class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php /* Navigation */ ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->


<?php if ( !is_front_page() ) { get_template_part( 'breadcrumbs'); } ?>
