<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>


<div class="header">
	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"> </a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"> </a></li>
				</ul>
			</div>
			<div class="top-bar-right">
			<div class="searchbox--frame">
				<form ation="/" method="get" id="searchform">
					<input class="searchBox" name="s" placeholder="Search...">
				</form>
			</div>
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>

			  <div class="navigationProducts">
					<a href="#"> View all products </a>
				<div>

					<div class="productColumn">
						<h2>Custom Exhibition Stands</h2>
						<ul>
							<li><a href="#">Custom</a></li>
							<li><a href="#">Custom hire</a></li>
						</ul>
					</div>
					<div class="productColumn">
						<h2>Modular Exhibition Stands</h2>
						<ul>
							<li><a href="#">Wave</a></li>
							<li><a href="#">Fabric</a></li>
						</ul>
					</div>
					<div class="productColumn">
						<h2>Portable Displays</h2>
						<ul>
							<li><a href="#">Ripple</a></li>
							<li><a href="#">Express pop-up</a></li>
						</ul>
					</div>
					<div class="productColumn">
						<h2>Counters and accessories</h2>
						<ul>
							<li><a href="#">ISObar</a></li>
						</ul>
					</div>
				</div>
			</div>


			</div>
		</nav>
	</header>
</div>

<?php get_template_part( 'template-parts/header-cta', 'headercta' ); ?>
