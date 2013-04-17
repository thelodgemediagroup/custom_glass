<?php
/*
Template Name: Category Template
*/
?>
<?php $page_title_append = 'Glass Solutions'; ?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="wrap clearfix" role="main">

						<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; endif; ?> -->

						<header id="page-header">

							<h1><?php wp_title(''); ?> <?php echo $page_title_append; ?></h1>

						</header> <!-- #page-header -->

					</div> <!-- end #main -->

					<?php get_sidebar('subnav'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->					

<?php get_footer(); ?>						