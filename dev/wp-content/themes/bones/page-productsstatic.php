<?php
/*
Template Name: Products Static Header
*/
?>

<?php get_header(); ?>

			<section id="slider" role="">

				<div id="static-container" class="static-sub wrap clearfix">

					<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider_main_l.jpg"></div>

				
					<div id="static-hero" class="static-sub">
						<ul>	
						<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/products/products_slide.jpg"></li>
						</ul>
					</div><!-- #slider-hero -->


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