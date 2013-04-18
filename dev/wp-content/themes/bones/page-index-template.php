<?php
/*
Template Name: CGS Index Page
*/
?>

<?php get_header(); ?>

			<section id="slider" role="">

				<div id="slider-container" class="slider-main wrap clearfix">

					<div id="slider-left" class="slider-main">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider_main_l.jpg"></div>
						<div class="pointer-left"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/left_btn.png"></div>
					</div><!-- #slider-left -->

					<div id="slider-hero" class="slider-main">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider1.jpg">
					</div><!-- #slider-hero -->

					<div id="slider-right" class="slider-main">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider_main_r.jpg"></div>
						<div class="pointer-right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/right_btn.png"></div>
					</div><!-- #slider-right -->

				</div> <!-- #slider-container -->

			</secton><!-- end #slider -->

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="wrap clearfix" role="main">

						<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; endif; ?> -->

						<header id="page-header">

							<h1>The Segments We Serve</h1>

						</header> <!-- #page-header -->

						<section id="index-content">

							<div class="page-list-container">

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/com_trans.jpg" />

									<h3>Commercial Transportation</h3>

									<p>Gimi, ni rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur maio...<a href="">Read More></a></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/pub_trans.jpg" />

									<h3>Public Transportation</h3>

									<p>Bimi, nlk rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur maio...<a href="">Read More></a></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/life_vehic.jpg" />

									<h3>Lifestyle Vehicles</h3>

									<p>Cimi, ni rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur maio...<a href="">Read More></a></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/con_ag.jpg" />

									<h3>Con/Ag</h3>

									<p>Dimi, ni rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur maio...<a href="">Read More></a></p>

								</div> <!-- .page-list -->														

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/safety_prot.jpg" />

									<h3>Safety and Protection</h3>

									<p>Eimi, ni rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur mcvb...<a href="">Read More></a></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/non_mobility.jpg" />

									<h3>Non-Mobility</h3>

									<p>Fimi, ni rem il imus excepellabo. Sbor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur mcvb...<a href="">Read More></a></p>

								</div> <!-- .page-list -->														

							</div> <!-- .page-list-container -->	

						<section> <!-- #index-content -->

					</div> <!-- end #main -->

					<?php get_sidebar('index'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->					

<?php get_footer(); ?>