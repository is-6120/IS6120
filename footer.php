<?php
/*
 * Footer for the IS6120 theme.
 */
?>
			</div>
			<!-- Site-Footer -->
			<footer class="page-footer font-small">
				<nav class="navbar navbar-expand-lg navbar-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footercontent" aria-controls="footercontent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse", id="footercontent">
						<?php wp_nav_menu(array(
							'theme_location' => 'footer',
							'menu_id' => 'footer-menu',
							'container' => false,
							'menu_class' => 'nav navbar-nav',
							'walker' => new Walker_Nav_Primary()
						)); ?>
					</div>
				</nav>
				<div class="footer-copyright text-center py-3">
					&copy; <?php bloginfo('name'); ?> - <?php echo date('Y'); ?>
				</div>
			</footer>
		</div>
    <?php wp_footer(); ?>
    </body>
</html>