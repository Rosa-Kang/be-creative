<?php
/**
 * The header for our theme.
 *
 * @package White_Canvas_Design_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
    <?php get_template_part( 'template-parts/header/header-scripts' ); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
          <div class="main-navigation-container container content-wrapper py-0">
            
            <div class="mobile-menu-wrapper">
              <?php get_template_part( 'template-parts/logo/logo' ); ?>
              <button id="toggle" aria-label="Menu">
                <div class="menu-icon"></div>
                <div class="menu-icon"></div>
                <div class="menu-icon"></div>
              </button>
            </div>

            <div class="desktop-menu-wrapper">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
              <div class="social-menu-wrapper has-background-primary">
                <div class="container content-wrapper py-0">
                  <div class="contact-menu">
                    <!-- TODO: fill me in, if needed -->
                  </div>
                  <div class="secondary-menu">
                    <?php wp_nav_menu( array( 'menu' => 'Social Menu' ) ); ?>
                    <?php get_template_part( 'template-parts/icon/icons-social' ); ?>
                  </div>
                </div>
              </div> 
            </div>

            <div class="dimmed"></div>

            <div id="popout" class="popout-menu-wrapper">
              <div class="popout-menu py-6 px-5">
                <button id="close-popout" aria-label="Close Menu">
                  <?php get_template_part( 'template-parts/icon/icon-close' ); ?>
                </button>
                <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_id' => 'mobile-menu', 'container-class' => 'mobile-menu-container' ) ); ?>
                <div class="social-menu-wrapper mb-6">
                  <?php wp_nav_menu( array( 'menu' => 'Social Mobile Menu' ) ); ?>
                </div>
              </div>
            </div>
          </div><!-- .main-navigation-container -->
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">