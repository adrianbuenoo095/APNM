<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apnm
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'apnm' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div id="brand-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php if ( is_front_page() ) { ?>
				  <img src="<?php bloginfo('stylesheet_directory');?>/images/logo.png">
				<?php } else { ?>
				  <img src="<?php bloginfo('stylesheet_directory');?>/images/pageLogo.png">
				<?php } ?>
				 </a>
				
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span class='menu-icon'></span>
				<span class='menu-icon'></span>
				<span class='menu-icon'></span>
				</button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .site-branding -->
		<div class="audioPlayer">
			<?php get_sidebar(); ?>
		</div>
		
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
