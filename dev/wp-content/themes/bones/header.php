<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta name="description" content="Guardian’s Custom Glass Solutions meets the glass needs of diverse transportation segments such as commercial &amp; public transportation, construction &amp; agriculture, safety &amp; protection, lifestyle vehicles and more">
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
							<a href="http://www.linkedin.com/company/guardian-industries/" title="LinkedIn"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/linkedin.png" /></a>
							<a href="http://www.twitter.com/guardianglass" title="Guardian Glass - Twitter"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/twitter.png" /></a>
							<a href="http://www.facebook.com/guardian.industries" title="Guardian Industries - Facebook"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/facebook.png" /></a>
							<a href="http://www.pintrest.com/guardianglass/" title="Pintrest"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/pintrest.png" /></a>
							<a href="http://www.youtube.com/guardianindustriestv/" title="You Tube"><img src="<?php echo get_template_directory_uri(); ?>/library/images/buttons/youtube.png" /></a>
						</div> <!--# header-social-media -->

						<div id="header-search">
							<?php get_search_form(); ?>
						</div><!--# header-search -->

					</div><!--# header-float-block -->

					<nav role="navigation">
						<div id="nav-container">
							<?php bones_main_nav(); ?>
							<?php main_nav_mobile(); ?>
						</div><!--# nav-container -->
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->