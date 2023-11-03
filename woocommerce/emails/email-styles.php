<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 7.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load colors.
$bg        = get_option( 'woocommerce_email_background_color' );
$body      = get_option( 'woocommerce_email_body_background_color' );
$base      = get_option( 'woocommerce_email_base_color' );
$base_text = wc_light_or_dark( $base, '#202020', '#ffffff' );
//$text      = get_option( 'woocommerce_email_text_color' );
$text = '#000';
// Pick a contrasting color for links.
$link_color = wc_hex_is_light( $base ) ? $base : $base_text;

if ( wc_hex_is_light( $body ) ) {
	$link_color = wc_hex_is_light( $base ) ? $base_text : $base;
}

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );
$text_lighter_40 = wc_hex_lighter( $text, 40 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
// body{padding: 0;} ensures proper scale/positioning of the email in the iOS native email app.
?>
body {
	background-color: <?php echo esc_attr( $bg ); ?>;
	padding: 0;
	text-align: center;
	background: rgb(14,198,161);
	background: linear-gradient(125deg, rgba(14,198,161,1) 0%, rgba(29,194,198,1) 32%, rgba(30,186,203,1) 53%, rgba(21,110,205,1) 94%);
}

#outer_wrapper {
	background-color: <?php echo esc_attr( $bg ); ?>;
}

#wrapper {
	margin: 0 auto;
	padding: 70px 0;
	-webkit-text-size-adjust: none !important;
	width: 100%;
	max-width: 600px;
}

#template_container {
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1) !important;
	background-color: <?php echo esc_attr( $body ); ?>;
	border: 1px solid <?php echo esc_attr( $bg_darker_10 ); ?>;
	border-radius: 3px !important;
	border-radius: 35px 35px 0 0;
}

#template_header {
	background-color: <?php echo esc_attr( $base ); ?>;
	border-radius: 3px 3px 0 0 !important;
	color: <?php echo esc_attr( $base_text ); ?>;
	border-bottom: 0;
	font-weight: bold;
	line-height: 100%;
	vertical-align: middle;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	    border-radius: 35px 35px 0 0;
}

#template_header h1,
#template_header h1 a {
	color: <?php echo esc_attr( $base_text ); ?>;
	background-color: inherit;
}
#template_header_image{
	margin-right:20px;
}
#template_footer{
	border-radius: 0px 0px 35px 35px;
	background-color:#2f2e3b;
	background-image:url(https://www.chabadworks.com/staging/wp-content/uploads/2023/09/New-Subscription-renewal-order-redesign-2.png);
	background-repeat: no-repeat;
	background-position: top 6px right 20px;
    background-size: 15%;
    position: relative;
}
#template_header_image img {
	margin-left: 0;
	margin-right: 0;
	width: 137px;
}

#template_footer td {
	padding: 0;
	border-radius: 6px;
}

#template_footer #credit {
	border: 0;
	color: #fff;<?php //echo esc_attr( $text_lighter_40 ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 15px;
	line-height: 150%;
	text-align: center;
	padding: 24px 0;
}
#template_footer #credit a{font-weight:600;}
#template_footer #credit a{ color:#175086; text-decoration:underline;}

#template_footer #credit p {
	margin: 0 0 16px;
}

#body_content {
	background-color:#f5f5f5;<?php// echo esc_attr( $body ); ?>
	background-image: url(https://www.chabadworks.com/staging/wp-content/uploads/2023/09/New-Subscription-renewal-order-redesign-1-1.png);
	background-repeat: no-repeat;
    background-size: 140%;
    background-position: bottom -30% right 81%;
}

#body_content table td {
	padding: 48px 48px 32px;
}

#body_content table td td {
	padding: 12px;
}

#body_content table td th {
	padding: 12px;
}

#body_content td ul.wc-item-meta {
	font-size: small;
	margin: 1em 0 0;
	padding: 0;
	list-style: none;
}

#body_content td ul.wc-item-meta li {
	margin: 0.5em 0 0;
	padding: 0;
}

#body_content td ul.wc-item-meta li p {
	margin: 0;
}

#body_content p {
	margin: 0 0 8px;
}

#body_content_inner {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 14px;
	line-height: 150%;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}
#body_content_inner table{
	background:#fff;
}
.td {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
	vertical-align: middle;
}
.im p{color: #000;}
.address {
	padding: 12px;
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	border: 1px solid <?php echo esc_attr( $body_darker_10 ); ?>;
	border-radius:10px;
	background-color: #fff;
}
#body_content_inner #addresses{
	background-color: none !important;
	background-color: transparent !important;
	margin-top: 15px !important;
}

.text {
	color: <?php echo esc_attr( $text ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}

.link {
	color: <?php echo esc_attr( $link_color ); ?>;
}

#header_wrapper {
	padding: 23px 18px;
	display: block;
	display:flex;
}

h1 {
	color: <?php echo esc_attr( $base ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 30px;
	font-weight: 600;
	line-height: 150%;
	margin: 0;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
	text-shadow: 0 1px 0 <?php echo esc_attr( $base_lighter_20 ); ?>;
	
}

h2 {
	color: <?php //echo esc_attr( $base ); ?> #0065c8;
	display: block;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 18px;
	font-weight: bold;
	line-height: 130%;
	margin: 0 0 18px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 16px;
	font-weight: bold;
	line-height: 130%;
	margin: 16px 0 8px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
	color: <?php echo esc_attr( $link_color ); ?>;
	font-weight: normal;
	text-decoration: underline;
}

img {
	border: none;
	display: inline-block;
	font-size: 14px;
	font-weight: bold;
	height: auto;
	outline: none;
	text-decoration: none;
	text-transform: capitalize;
	vertical-align: middle;
	margin-<?php echo is_rtl() ? 'left' : 'right'; ?>: 10px;
	max-width: 100%;
}
#template_header_image p{margin:0;}
/**
 * Media queries are not supported by all email clients, however they do work on modern mobile
 * Gmail clients and can help us achieve better consistency there.
 */
@media screen and (max-width: 600px) {
	#header_wrapper {
		padding: 27px 36px !important;
		flex-direction: column;
    	text-align: center;
    	flex-wrap: wrap !important;
	}

	#body_content table > tbody > tr > td {
		padding: 10px !important;
	}

	#body_content_inner {
		font-size: 10px !important;
	}
	#header_wrapper h1{text-align: center !important; font-size: 18px !important;
    width: 100%;}
	#template_footer{
		background-color:#2f2e3b;
		background-position: top 6px right 20px;
    	background-size: 15%;
	}
}
<?php
