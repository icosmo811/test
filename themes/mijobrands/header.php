<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mijobrands
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="https://kit.fontawesome.com/9348f8c4fb.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header id="header">
        <?php if (!is_404()): ?>
            <div class="contenedor">
                <div class="header">
                    <div class="header_logo">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    </div>

                    <div class="header_search">
                        <i class="fas fa-search"></i>
                        <?php get_search_form(); ?>
                    </div>

                    <div class="header_nav">
                        <?php templatePart_navigation_nav(); ?>            
                    </div>

                    <span id="menu_responsive">
                        <i class="fas fa-bars"></i>
                    </span>
                </div>
            </div>

            <div class="menu_responsive_items">
                <h3>MENU <span><i id="menu_responsive_close" class="fas fa-window-close"></i></span></h3>
                <?php templatePart_navigation_nav(); ?>            
            </div>
        <?php endif ?>
    </header>