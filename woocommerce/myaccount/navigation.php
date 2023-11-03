<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>
<nav class="woocommerce-MyAccount-navigation border-primary border-right-2 bg-guyabano">
	<div class="site-branding text-center">
                    <?php the_custom_logo(); ?>
                    <!-- You can add specific content here if you want -->
                </div><!-- .site-branding -->
<ul>
				<li><a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/icon-submenu01.png" class="icon-position">Dashboard</a></li>
				<li><a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/icon-submenu02.png" class="icon-position">Tasks</a></li>
				<li class="dropdown">
  <a class="dropdown-toggle collapsed" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/icon-submenu03.png" class="icon-position"> My Chabad House
  </a>
  	<ul class="dropdown-menu" >
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</li>
<li><a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/icon-submenu04.png"  class="icon-position">User Guide</a></li>
</ul>
</nav>
<div class="d-flex justify-content-between mob-direction-column my-account-content">


<?php do_action( 'woocommerce_after_account_navigation' ); ?>
