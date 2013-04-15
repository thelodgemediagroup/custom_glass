<?php
/*
Template Name: CGS Index Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="clearfix" role="main">


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
									 Cesequisin remodi des sunt as qur maio...Read More></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/pub_trans.jpg" />

									<h3>Public Transportation</h3>

									<p>Bimi, nlk rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur maio...Read More></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/life_vehic.jpg" />

									<h3>Lifestyle Vehicles</h3>

									<p>Cimi, ni rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur maio...Read More></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/con_ag.jpg" />

									<h3>Con/Ag</h3>

									<p>Dimi, ni rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur maio...Read More></p>

								</div> <!-- .page-list -->														

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/safety_prot.jpg" />

									<h3>Safety and Protection</h3>

									<p>Eimi, ni rem il imus excepellabo. Abor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur mcvb...Read More></p>

								</div> <!-- .page-list -->

								<div class="page-list">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/content/non_mobility.jpg" />

									<h3>Non-Mobility</h3>

									<p>Fimi, ni rem il imus excepellabo. Sbor sincid et quisita taescid eribus nonsequ otem ecereiur.
									 Cesequisin remodi des sunt as qur mcvb...Read More></p>

								</div> <!-- .page-list -->														

							</div> <!-- .page-list-container -->	

						<section> <!-- #index-content -->

					</div> <!-- end #main -->

					<?php get_sidebar('index'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->					

<?php get_footer(); ?>