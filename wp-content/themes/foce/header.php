<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <nav>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
            <div id="mySidenav" class="sidenav">
                <a id="closeBtn" href="#" class="close"></a>
                <div class="littleLogo">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/littleLogo.png'; ?> " alt="">
                </div>
                <ul>
                    <li><a href="#histoire">
                        <span class="text">Histoire</span>
                    </a></li>
                    <li><a href="#personnages">
                        <span class="text">Personnages</span>
                    </a></li>
                    <li><a href="#Lieu">
                        <span class="text">Lieu</span>
                    </a></li>
                    <li><a href="#Studio Koukaki">
                        <span class="text">Studio Koukaki</span>
                    </a></li>
                </ul>
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menuOrchid.png'; ?> " class="menuImg1" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menuSunflower.png'; ?> " class="menuImg2" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menuCat.png'; ?> " class="menuImg3" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menuFlower.png'; ?> " class="menuImg4" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menuRandomFlower.png'; ?> " class="menuImg5" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menuGroup.png'; ?> " class="menuImg6" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menuCat1.png'; ?> " class="menuImg7" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/menuHibiscusfooter.png'; ?> " class="menuImg8" alt="">
                <P class="legend">Studio Koukaki</p>
            </div>
            <div class="menu">    
                <h1 class="slogant">Fleurs d'oranger & chats errants</h1>
                <div id="toggleBtn" class="button">
                    <span class="burger-icon">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>
                </div>
                
            </div>
        </div>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
