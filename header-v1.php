<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vergy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header-v1">
		<div class="container-fluid">
			<div class="row boxin">
				<div class="col-12 col-sm-12 block-head">
					<div class="row top-head">
						<div class="col-4 col-sm-4">
							<div class="site-branding-v1">
								<?php
					            the_custom_logo();
					       ?>
								<?php
					        if (is_front_page() && is_home()) :
					            $vergy_description = get_bloginfo('description', 'display');
					      endif;
					      if ($vergy_description || is_customize_preview()) :
					      ?>
								<?php endif; ?>
							</div><!-- .site-branding -->
						</div><!-- .col-4 -->
<div class="col-8 col-sm-8 nav-menu">
	<!-- start -->
<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
</nav><!-- #site-navigation -->
		</div><!-- .col-8 -->
		</div><!-- .row top-head -->
		<div class="row fon-slider">
			<div class="col-12 col-sm-12 square">
			</div>	<!-- col-12 -->
		</div><!-- .row fon-slider -->
	<div class="row bottom-head">
		<div class="col-md-8 bread">
            <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
		</div>	<!-- .col-8 breadcrumbs -->
		<div class="col-6 col-md-4 input-search">
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div>
					<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
				</div>
			</form>
		</div>	<!-- .col-4 input-search -->
	</div><!-- .row bottom-head -->
	</div><!-- .col-12 .block-head -->
	</div><!-- .row -->
	<div class="line"></div>
	</div><!-- .container-fluid -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
