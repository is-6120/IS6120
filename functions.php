<?php 

/* ===========================
 * Functions for IS6120 theme.
 * ===========================
 */

// Custom Login Screen
function is6120_login_logo() { ?>
    <style type="text/css">
        body.login{
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/login/bg.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			background-size: cover;
		}
		#login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/login/site-login-logo.png);
			height:140px;
			width:140px;
			background-size: 140px 140px;
			background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'is6120_login_logo' );

function is6120_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'is6120_logo_url' );

function is6120_logo_url_title() {
    return 'Miss Chen&rsquo;s Cake';
}
add_filter( 'login_headertitle', 'is6120_logo_url_title' );

function is6120_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/login/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'is6120_stylesheet' );

// Scripts & Styles
function is6120_resources() {
    wp_enqueue_style('is6120', get_template_directory_uri() . '/css/is6120.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fa_style', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_script('is6120_js', get_template_directory_uri() . '/js/is6120.js', array(), '1.0.0', true);
	wp_enqueue_script('bootstrap_js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrap_jquery', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts', 'is6120_resources');

// Theme Support
function is6120_theme() {
	// Add custom logo support
	$defaults = array(
        'height'      => 120,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
	
	// Add navigation menu support
	register_nav_menus(array(
		'header' => __('Header Menu'),
		'side' => __('Side Menu'),
		'social' => __('Social Menu'),
		'footer' => __('Footer Menu'),
	));
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'is6120_theme');
/*
// Custom Background
add_theme_support('custom-background');
add_theme_support('custom-header');
*/

// Changes the custom logo class to bootstrap class
function custom_logo_bs( $html ) {
	$html = str_replace('custom-logo-link', 'navbar-brand', $html);
	return $html;
}
add_filter('get_custom_logo', 'custom_logo_bs', 10);

// Remove head generator
function is6120_remove_version() {
	return '';
}
add_filter('the_generator', 'is6120_remove_version');

// Include other files //
require get_template_directory() . '/inc/walker.php';
?>