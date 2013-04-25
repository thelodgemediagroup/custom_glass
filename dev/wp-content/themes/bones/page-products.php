<?php
/*
Template Name: Products Template
*/
?>

<?php get_header(); ?>

			<section id="slider" role="">

				<div id="slider-container" class="slider-sub wrap clearfix">

					<!--<div id="slider-left" class="slider-main image-fade"></div>--><!-- #slider-left -->
						<!--<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider_main_l.jpg"></div>
						<div id="left_btn" class="pointer-left"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/left_btn.png"></div> -->
					
					<div id="left_btn" class="pointer-left"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/left_btn.png"></div>
					<div id="slider-hero" class="slider-sub">
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider1.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/products/products_slide.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider2.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider3.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider4.jpg"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider5.jpg"></li>
						</ul>
					</div><!-- #slider-hero -->
					<div id="right_btn" class="pointer-right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/right_btn.png"></div>

					<!--<div id="slider-right" class="slider-main image-fade"></div>--><!-- #slider-right -->
						<!--<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/slider_main_r.jpg"></div>
						<div id="right_btn" class="pointer-right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/right_btn.png"></div>-->
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