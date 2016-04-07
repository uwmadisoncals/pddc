<?php
/**
 * This template creates a listing with links
 * The files must be in the proper folders, and the filenames must be exactly the same.
 *
 Template Name: Fact_Sheet_Listing_on_Posts_Insect
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT); 

// Reset Query
wp_reset_query();

query_posts(array('orderby' => 'title', 'cat' => 171, 'order' => 'ASC', 'showposts' => -1));

get_header(); 

?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main" style="">
		<div class="entry-content">
		
<?php /* BEGIN - add custom code below */ ?>	

<?php include 'includes/AcrobatNotice.php'; ?> 

<br />
<div style="font-size: 24px; font-family: Verdana; font-weight: bold;">Fact Sheet Listing - Insect</div>	

<?php include 'includes/FactSheetDisplayCode.php'; ?>

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