<?php
/**
 * Template Name: ONEPAGER - Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<main class="site-main" id="main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'onepager' ); ?>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :

			comments_template();

		endif;
		?>

	<?php endwhile; // end of the loop. ?>

</main><!-- #main -->


<?php get_footer(); ?>
