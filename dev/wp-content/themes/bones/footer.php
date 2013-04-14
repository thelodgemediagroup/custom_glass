			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<div class="copyright">
						<p>Copyright &copy; <?php echo date('Y'); ?> Guardian Automotive Glass, All Rights Reserved.</p>
					</div>

					<div id="footer-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/footer/guardian_logo.png" />
					</div>

					<nav role="navigation">
						<?php bones_footer_links(); ?>
					</nav>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
