<?php
/*
Template Name: Category Template
*/
?>
<?php $page_title_append = 'Glass Solutions'; ?>
<?php get_header(); ?>

			<section id="slider" role="">

				<div id="slider-container" class="slider-sub wrap clearfix">

					<div id="slider-left" class="slider-sub">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/con_ag/slider/slider_l.jpg"></div>
						<div class="pointer-left"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/left_btn.png"></div>
					</div><!-- #slider-left -->

					<div id="slider-hero" class="slider-sub">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/con_ag/slider/slider_main.jpg">
					</div><!-- #slider-hero -->

					<div id="slider-right" class="slider-sub">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/con_ag/slider/slider_r.jpg"></div>
						<div class="pointer-right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/right_btn.png"></div>
					</div><!-- #slider-right -->

				</div> <!-- #slider-container -->

			</secton><!-- end #slider -->

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main2" class="wrap clearfix" role="main">

						<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; endif; ?> -->

						<section id="category-content">

							<div class="category-container">

								<header id="page-header">

									<h1><?php wp_title(''); ?> <?php echo $page_title_append; ?></h1>

								</header> <!-- #page-header -->

								<div class="category">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/con_ag/agriculture.jpg" />

									<h3>Agriculture</h3>

									<p>Aimi, ni rem il imus excepellabo. Abor sincid et quisita taescideribus nonsequotem ecereiur. Cunt as qur maio...
										<a href="" title="">Read More></a></p>

								</div> <!-- .category -->

								<div class="category">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/con_ag/construction.jpg" />

									<h3>Construction</h3>

									<p>Cimi, ni rem il imus excepellabo. Abor sincid et quisita taescideribus nonsequotem ecereiur. Cunt as qur maio...
										<a href="" title="">Read More></a></p>

								</div> <!-- .category -->

								<div class="category">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/con_ag/mining.jpg" />

									<h3>Mining</h3>

									<p>Mimi, ni rem il imus excepellabo. Abor sincid et quisita taescideribus nonsequotem ecereiur. Cunt as qur maio...
										<a href="" title="">Read More></a></p>

								</div> <!-- .category -->																

								<div class="category">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/con_ag/forestry.jpg" />

									<h3>Forestry</h3>

									<p>Fimi, ni rem il imus excepellabo. Abor sincid et quisita taescideribus nonsequotem ecereiur. Cunt as qur maio...
										<a href="" title="">Read More></a></p>

								</div> <!-- .category -->								

							</div> <!-- .category-container -->

						</section> <!-- #category-content -->

					</div> <!-- end #main -->

					<?php get_sidebar('subnav'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->					

<?php get_footer(); ?>						