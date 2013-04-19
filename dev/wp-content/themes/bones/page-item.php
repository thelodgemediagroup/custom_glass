<?php
/*
Template Name: Item Template
*/
?>
<?php get_header(); ?>

			<section id="slider" role="">

				<div id="slider-container" class="slider-sub wrap clearfix">

					<div id="slider-left" class="slider-sub">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ag_glass/slider/slider_l.jpg"></div>
						<div class="pointer-left"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/left_btn.png"></div>
					</div><!-- #slider-left -->

					<div id="slider-hero" class="slider-sub">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/ag_glass/slider/slider_main.jpg">
					</div><!-- #slider-hero -->

					<div id="slider-right" class="slider-sub">
						<div class="slider-bkgnd"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ag_glass/slider/slider_r.jpg"></div>
						<div class="pointer-right"><img src="<?php echo get_template_directory_uri(); ?>/library/images/slider/right_btn.png"></div>
					</div><!-- #slider-right -->

				</div> <!-- #slider-container -->

			</secton><!-- end #slider -->

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main2" class="wrap" role="main">

						<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; endif; ?> -->

						<section id="item-content">

							<div class="item-container">

								<header id="page-header">

									<h1>Solutions For All Your <?php wp_title(''); ?> Needs</h1>

									<p class="header-tag">Thfgfbv fgbvhgn hjguyio mbnjhk sdfertdfg fghrty qwart rty.</p>

								</header> <!-- #page-header -->

								<div class="featured-container">

									<div class="featured-visual">

										<img src="<?php echo get_template_directory_uri(); ?>/library/images/ag_glass/video.jpg" />

										<p>Vimi, ni rem il imus excepellabo. Aborcid ta taesid eribus nonsequotem ecereiuunt a. 
											<a href="" title="">Play Video></a></p>

									</div> <!-- .featured-visual -->

									<div class="featured-info">

										<h3>Con/Ag Glass Solutions</h3>

										<ul>

											<li>Laminated Glass (bent or flat)

												<ul>
													<li>- UV Protection Glass</li>
													<li>- Sound Dampening/Acoustic Glass</li>
												</ul>
											</li>

											<li>Tempered Glass (bent or flat)</li>
											<li>Infrared Reflective Coated Glass</li>
											<li>Heated Glass (wiggle wire or heat grid)</li>
											<li>Insulated Glass</li>
											<li>Branded Glass/Custom Frit.</li>

										</ul>

									</div> <!-- .featured-info -->

								</div> <!-- .featured-container -->

								<div class="item">

									<img src="<?php echo get_template_directory_uri(); ?>/library/images/ag_glass/tractor.jpg" />

									<h3>Development Capabilities</h3>

									<ul>
										<li>Tempered Glass (bent or flat)</li>
										<li>Infrared Reflective Coated Glass</li>
										<li>Heated Glass (wiggle wire or heat grid)</li>
										<li>Insulated Glass</li>
										<li>Branded Glass/Custom Frit.</li>
									</ul>

								</div> <!-- .item -->

							</div> <!-- .item-container -->

						</section> <!-- #item-content -->

					</div> <!-- end #main -->

					<?php get_sidebar('subnav'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->					

<?php get_footer(); ?>																							