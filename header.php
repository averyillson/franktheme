<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Frank.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'frank' ); ?></a>

	<header id="masthead" class="site-header">
    <div class="container-fluid">
        <div class="row justify-content-between">

            <div class="col-3"><a href="/" ><div class="site-branding"><?php include( get_stylesheet_directory() . '/images/frank-branding-orange.svg' ); ?></div></a><!-- .site-branding --></div>

            <div class="col-2"><button id="site-navigation-toggle" type="button" class="btn btn-link">Menu</button></div>
            
        </div>

        <div class="nav-container">
            <nav id="site-navigation" class="main-navigation">
                <button id="site-navigation-close" type="button" class="btn btn-link">Close</button>

                <h2>Menu</h2>
                <div class="divider"></div>

                <div class="main-nav-panel">
                    <div class="nav-list">

                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', ) ); ?>

                    </div>
                </div>

                <div class="secondary-nav-panel">

                    <?php the_field('nav_info','option'); ?>

                </div>

                <div class="third-nav-panel">
                    <?php if (have_rows('social_links','option')): ?>

                    <ul class="social-links">
                        <?php $linknum==1; ?>
                        <?php while(have_rows('social_links','option')): the_row(); ?>
                        <style>.linknum<?php echo $linknum; ?> a:hover{color:<?php the_sub_field('hover_color'); ?> !important;}</style>
                        <li class="social-link linknum<?php echo $linknum; ?>"><a  href="<?php the_sub_field('social_media_url'); ?>"><?php the_sub_field('social_media_link_text'); ?></a></li>
                        <?php $linknum++; ?>
                        <?php endwhile; ?>
                    </ul>

                    <?php endif; ?>
                </div>
            </nav><!-- #site-navigation -->
        </div>

    </div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
