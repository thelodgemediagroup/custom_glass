<?php
/*
Template Name: CGS Index Page
*/
?>

<?php get_header(); ?>

			<section id="slider" role="">

				<div id="slider-container" class="slider-main wrap clearfix">

					<div id="left_btn" class="pointer-left"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/left_btn.png"></div>
					<div id="slider-hero" class="slider-main">
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider1.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider2.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider3.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider4.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider5.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider6.jpg"></li>
						</ul>
					</div><!-- #slider-hero -->
					<div id="right_btn" class="pointer-right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/right_btn.png"></div>
					
				</div> <!-- #slider-container -->

			</secton><!-- end #slider -->

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="wrap" role="main">

						<header id="page-header">

							<h1>The Segments We Serve</h1>

						</header> <!-- #page-header -->

						<section id="index-content">

							<div class="page-list-container">

								<div class="page-list">

									<a href="/commercial-transportation/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/content/com_trans.jpg" /></a>

									<h3><a href="/commercial-transportation/">Commercial Transportation</a></h3>

									<p>From Class 8 to short haul trucks to commercial shipping vessels, Guardian offers glass solutions that help optimize fleet performance...<a href="/commercial-transportation/">Read More></a></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<a href="/public-transit/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/content/pub_trans.jpg" /></a>

									<h3><a href="/public-transit/">Public Transportation</a></h3>

									<p>For a rider or a driver, Guardian provides custom glass solutions that enhance comfort and improve safety...<a href="/public-transit/">Read More></a></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<a href="/lifestyle-vehicles/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/content/life_vehic.jpg" /></a>

									<h3><a href="/lifestyle-vehicles/">Lifestyle Vehicles</a></h3>

									<p>Sweeping one piece RV windshields, privacy marine glass and ATV glass systems are all part of Guardian’s Lifestyle Vehicle offerings...<a href="/lifestyle-vehicles/">Read More></a></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<a href="/construction-and-agriculture/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/content/con_ag.jpg" /></a>

									<h3><a href="/construction-and-agriculture/">Con/Ag</a></h3>

									<p>Guardian glass plays an important role in reducing NVH and enhancing occupant safety in equipment ranging from bulldozers to tractors...<a href="/construction-and-agriculture/">Read More></a></p>

								</div> <!-- .page-list -->														

								<div class="page-list">

									<a href="/safety-and-protection/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/content/safety_prot.jpg" /></a>

									<h3><a href="/safety-and-protection/">Safety and Protection</a></h3>

									<p>Police, fire, rescue and recovery vehicles rely on Guardian glass for its superior durability and OEM fit and finish...<a href="/safety-and-protection/">Read More></a></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<a href="/non-mobility/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/content/non_mobility.jpg" /></a>

									<h3><a href="/non-mobility/">Non-Mobility</a></h3>

									<p>From solar mirrors to washer and dryer lids to coin operated machines, Guardian provides glass solutions for various non-mobility applications...<a href="/non-mobility/">Read More></a></p>

								</div> <!-- .page-list -->														

							</div> <!-- .page-list-container -->	

						<section> <!-- #index-content -->

					</div> <!-- end #main -->

					<?php get_sidebar('index'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->					

<?php get_footer(); ?>