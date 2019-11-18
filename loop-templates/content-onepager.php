<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="logo-abbr">FOTJ</div>

	</header><!-- .entry-header -->

	<div class="allofit">
		<div class="fotj-container">
			<?php echo river_header_images(); ?>
			
				<div class="foot-title">
					<?php 
					$broken_title = str_replace(" ","</br>",get_bloginfo('name'));
					echo $broken_title;
					 ;?>
				</div>
		</div>
		<div class="sub-title"><?php echo bloginfo('description');?></div>
		<div class="scroll-to-content-arrow">
		<a href="#homepage-content"><img src="<?php echo get_stylesheet_directory_uri();?>/imgs/arrow-down-white.svg"></a>
		</div>
				<div class="vert-path">
				<?php echo river_main_text();?>


				</div>	
			</div>
		</div>
	</div>

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
