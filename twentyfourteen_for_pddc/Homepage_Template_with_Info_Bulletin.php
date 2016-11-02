<?php
/**
 * This template creates a listing with links
 * The files must be in the proper folders, and the filenames must be exactly the same.
 *
 Template Name: Homepage_Template_with_Info_Bulletin
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT); 

// Reset Query
wp_reset_query();

query_posts(array('orderby' => 'title', 'cat' => 165, 'order' => 'ASC', 'showposts' => -1));

get_header(); 

?>

<div id="main-content" class="main-content">

<?php 
	/* display the contents of the info bulletin widget area */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('info_bulletin_area') ) : 

endif; ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main" style="">
		<div class="entry-content">
		
		
		<!-- insert loop here - begin -->
		
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		
		<!-- insert loop here - end -->
		
		
				</div><!-- #entry-content -->

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php 
	get_sidebar( 'content' ); 
	?>
</div><!-- #main-content -->

<?php
get_sidebar(); 
get_footer();