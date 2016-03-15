<?php
/**
 * This template creates a listing with links
 * The files must be in the proper folders, and the filenames must be exactly the same.
 *
 Template Name: WI_Hort_Update_Listing_on_Posts
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT); 

// Reset Query
wp_reset_query();

query_posts(array('orderby' => 'title', 'cat' => 184, 'order' => 'ASC', 'showposts' => -1));

get_header(); 

?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main" style="">
		<div class="entry-content">
		
<?php /* BEGIN - add custom code below */ ?>	

<br />
<div style="font-size: 24px; font-family: Verdana; font-weight: bold;">Wisconsin Hort Update Archive</div>	

<?php


if (have_posts()) :

	/* Begin the unordered list */	
	echo '<ol>'; // begin the unordered list

	// The Loop
	
while (have_posts()) : the_post();

	echo '<li>'; ?>
	
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		
	<?php	
		echo '</li>'; // end display of the PDF link	
		}echo '<ol>'; // end the unordered list
	} 
			
		endwhile;


		endif; 


echo "<p>&nbsp;</p>";

echo "<p>&nbsp;</p>";

// Reset Query
wp_reset_query();

?>
<?php /* END - add custom code */ ?>
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