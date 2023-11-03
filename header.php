<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chabadworks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--fav icon-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory');?>/assets/images/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
	
    
    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css" >
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/woocommerce.css?v=36">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/responsive.css" >
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	<!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'chabadworks' ); ?></a>

<?php
// Start of the section area with dynamic class names
?>
<section class="<?php 
    if (is_front_page()) {
        echo 'banner-area pt-1';
    } elseif (is_account_page()) {
        echo 'your-custom-class-for-account-pages';
    } elseif (is_cart()) {
        echo 'your-custom-class-for-cart-page';  // <-- Add your custom class here
    } else {
        echo 'pt-1 inner-banner-area';
    }
?>">

<?php 
    $is_login_page = function_exists('is_account_page') && is_account_page() && !is_user_logged_in();

    if (is_account_page() && is_user_logged_in()) :  
?>
        <!-- Separate Header for My Account pages -->
        <header class="bg-guyabano border-primary border-bottom-2">
            <div class="d-flex justify-content-between">
                <div class="main-title ps-19">
                    <?php
                        if (function_exists('is_woocommerce') && is_account_page()) {
                            $my_account_title = get_my_account_endpoint_title();
                            echo '<h1 class="my-account-title font-xl text-raisinblack fw-600 py-3 montserrat m-0">' . esc_html($my_account_title) . '</h1>';
                        }
                    ?>  
                </div>
                <nav id="site-navigation" class="main-navigation w-auto d-flex align-items-center text-uppercase text-poppins">
                    <!-- Your navigation items here -->
                </nav>
            </div>
        </header>
<?php 
    elseif (is_cart()):  
?>
        <!-- Separate Header for Cart Page -->
        <header class="bg-guyabano border-primary border-bottom-2">
            <div class="d-flex justify-content-between">
                <div class="cart-title ps-19">
                    <h1 class="cart-title font-xl text-raisinblack fw-600 py-3 montserrat m-0">Your Cart</h1>
                </div>
                <nav id="cart-navigation" class="main-navigation w-auto d-flex align-items-center text-uppercase text-poppins">
                    <!-- Your navigation items for cart page here -->
                </nav>
            </div>
        </header>
<?php 
    elseif (!$is_login_page): 
?>
        <!-- Default Header for all other pages -->
        <header class="container-fluid d-flex justify-content-between text-white mb-5">
            <div class="site-branding">
                <?php
                    the_custom_logo();
                    if (is_front_page() && is_home()) :
                        // Your content here for front page and home
                    endif;
                ?>
            </div>
            <nav id="site-navigation" class="main-navigation w-auto d-flex align-items-center text-uppercase text-poppins">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'chabadworks'); ?></button>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                ?>
            </nav>
        </header>
<?php 
    endif; 

    if (!is_front_page()): 
?>
</section>

<?php 
    endif; 
?>






