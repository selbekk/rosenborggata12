<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('template_url'); ?>/css/main.min.css" rel="stylesheet" media="screen">

    <!-- Windows Phone 8 < GDR 3 fix -->
    <script>
    (function() {
        if ("-ms-user-select" in document.documentElement.style && navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement("style");
            msViewportStyle.appendChild(
                document.createTextNode("@-ms-viewport{width:auto!important}")
            );
            document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
        }
    })();
    </script>

    <!-- Wordpress -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="tab search-tab search-trigger">
        <div class="glyphicon glyphicon-search"></div>
    </div>
    <div class="tab nav-tab">MENY</div>

    <!-- Search overlay -->
        <div class="search-wrapper">
            <div class="search-field-wrapper">
                <?php get_search_form(); ?>
            </div>
        </div>


    <header class="container">
        <div class="page-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
            <p class="hidden-xs"><?php bloginfo( 'description' ); ?></p>
        </div>
        <nav class="nav-wrapper">
            <div class="nav-close">
                <div class="glyphicon glyphicon-remove-circle"></div>
            </div>
            <h3>Meny</h3>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav' ) ); ?>
        </nav>
    </header>

    <div id="main" class="container">