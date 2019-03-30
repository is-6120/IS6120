<?php
/* ============================
 * Header for the IS6120 theme.
 * ============================
 */
?>

<!DOCTYTPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
		<!-- Site-Header -->
		<div class="container">
			<header class="page-header">
				<!-- Header Navigation -->
				<nav class="navbar navbar-expand-lg navbar-light">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} ?>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headercontent" aria-controls="headercontent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse", id="headercontent">
						<?php wp_nav_menu(array(
							'theme_location' => 'header',
							'menu_id' => 'header-menu',
							'container' => false,
							'menu_class' => 'nav navbar-nav',
							'walker' => new Walker_Nav_Primary()
						)); ?>
					</div>
					<div class="collapse navbar-collapse float-right", id="headercontent">
						<?php get_search_form(); ?>
					</div>
				</nav>
			</header>
			
		<!-- Site-Content -->
			<div class="container">