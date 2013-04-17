<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					
						<a href="<?php echo home_url(); ?>" rel="nofollow">
							<div id="logo"><img src="<?php echo get_template_directory_uri(); ?>/library/images/header/header_logo.png" /></div>
						</a>
					

					<div id="header-float-block">

						<div id="header-social-media">
							<a href="http://www.linkedin.com" title="LinkedIn"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/linkedin.png" /></a>
							<a href="http://www.twitter.com/guardianglass" title="Guardian Glass - Twitter"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/twitter.png" /></a>
							<a href="http://www.facebook.com/guardian.industries" title="Guardian Industries - Facebook"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/facebook.png" /></a>
							<a href="http://www.pintrest.com" title="Pintrest"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/pintrest.png" /></a>
							<a href="http://www.youtube.com" title="You Tube"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/youtube.png" /></a>
						</div> <!--# header-social-media -->

						<div id="header-search">
							<?php get_search_form(); ?>
						</div><!--# header-search -->

					</div><!--# header-float-block -->

					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->

			<section id="slider" role="">

				<div id="slider-container" class="wrap clearfix">

					<div id="slider-left">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider_main_l.jpg"></div>
						<div class="pointer-left"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/left_btn.png"></div>
					</div><!-- #slider-left -->

					<div id="slider-hero">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider1.jpg">
					</div><!-- #slider-hero -->

					<div id="slider-right">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider_main_r.jpg"></div>
						<div class="pointer-right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/right_btn.png"></div>
					</div><!-- #slider-right -->

				</div> <!-- #slider-container -->

			</secton><!-- end #slider -->