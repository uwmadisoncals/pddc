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

get_header(); 

?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">


<?php 
	/* display the contents of the info bulletin widget area */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('info_bulletin_area') ) : 

	endif; ?>	
	
		<div id="content" class="site-content" role="main" style="">
		<div class="entry-content">
		
		
		<!-- insert loop here - begin -->
		
			<?php
				$post_id = 6;
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				echo $title;
				echo $queried_post->post_content;
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