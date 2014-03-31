<?php /*

Genesys Theme
-------------

header.php

Header template file	

*/

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />

		<title><?php (wp_title('', false) != '') ? wp_title('&#8226;', true, 'right') : ''; ?><?php bloginfo('name'); ?></title>

		<!-- Meta -->
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Links -->
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<!-- Stylesheets -->
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php /* <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700" type="text/css" /> */ ?>

		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

		<?php
		// Javascript

		// pull in the jQuery
		wp_enqueue_script('jquery');

		// pull in the site js
		wp_enqueue_script('genesys_js', get_template_directory_uri() . '/js/genesys-script.js', 'jquery');

		// comment script
		if (is_singular() && get_option('thread_comments')) :
			wp_enqueue_script('comment-reply');
		endif;
		?>

		<?php 
		// Wordpress header content

		wp_head(); ?>

	</head>
	<body<?php echo (is_admin_bar_showing()) ? ' class="admin-bar"' : ''; ?>>

		<div id="control">
			
			<?php get_template_part('drawer'); ?>

			<div id="page">
				<div id="wrapper">
					<header id="site-header">
						<div class="grid">
							<div class="g12 text-center">
								<?php $title_tag = (!is_single()) ? 'h1' : 'div'; ?>
								<<?php echo $title_tag; ?> id="site-title"><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></<?php echo $title_tag; ?>>
								<div id="drawer-link-holder">
									<a href="#drawer" id="drawer-toggle-link"><i class="fa fa-bars"></i> <span class="text">Menu</span></a>
								</div>
							</div>
						</div>
					</header>

					<nav id="primary">
						<div class="grid">
							<div class="g12">
								<?php
									$menu_args = array(
										'theme_location' => 'primary',
										'container' => false,
										'menu_class' => 'menu',
									);
								?>
								<?php wp_nav_menu($menu_args); ?>
							</div>
						</div>
					</nav>
					