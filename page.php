<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chabadworks
 */

get_header();
?>
<div>
	<?php if ( is_user_logged_in() ) {
    wc_get_template( 'myaccount/navigation.php' );
} else {
    echo '<p><a href="' . esc_url( wc_get_page_permalink( 'myaccount' ) ) . '">Login or Register</a></p>';
}?>
</div>
	<main id="primary" class="site-main py-5">
		<div class="container account-container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
	</main><!-- #main -->
<?php
get_footer();
?>
