<?php
/*
Template Name: Adv Tech Static Header
*/
?>

<?php get_header(); ?>

			<section id="slider" role="">

				<div id="static-container" class="static-sub wrap clearfix">

					<div id="static-left">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/products/slider_l.jpg"></div>
					</div>
				
					<div id="static-hero" class="static-sub">
							
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/advanced_tech_slide.jpg">
						
					</div><!-- #slider-hero -->
				
					<div id="static-right">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/products/slider_r3.jpg"></div>
					</div>

				</div> <!-- #slider-container -->

			</secton><!-- end #slider -->

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main2" class="wrap" role="main">

						<section id="products-content">

							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<?php the_content(); ?>

							<?php endwhile; endif; ?>

						</section> <!-- #category-content -->

					</div> <!-- end #main -->

					<?php get_sidebar('subnav'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->					

<?php get_footer(); ?>						