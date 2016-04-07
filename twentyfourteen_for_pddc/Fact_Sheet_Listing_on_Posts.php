<?php
/**
 * This template creates a listing with links
 * The files must be in the proper folders, and the filenames must be exactly the same.
 *
 Template Name: Fact_Sheet_Listing_on_Posts
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

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main" style="">
		<div class="entry-content">
		
<?php /* BEGIN - add custom code below */ ?>	

<?php include 'includes/AcrobatNotice.php'; ?> 

<br />
<div style="font-size: 24px; font-family: Verdana; font-weight: bold;">Fact Sheet Listing</div>	

<?php

/* Count the number of records returned by the query for display in the search results header */
$num_of_records_returned = $wp_query->post_count; 
echo '<p>There are '.$num_of_records_returned.' Fact Sheet(s): </p>';

<?php 

echo '<p>The path is - '.esc_url( home_url( '/' ) ).'</p>' ?>


/* border color was B2B998 for rows, 28361b for the overall table */

if (have_posts()) :

echo '<table style="border: 1px solid #2b552b;" cellspacing="0" cellpadding="4" align="left" width="">';
		echo "<tr bgcolor='#B2B998'>";
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; '>&nbsp;</th>";
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em;'>&nbsp;</th>";
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; text-align: center;' colspan='2'>Full Color</th>";		
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; text-align: center;' colspan='2'>Low Color</th>";
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em;'>&nbsp;</th>";	

echo "</tr>";

		echo "<tr bgcolor='#B2B998'>";
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; '>Fact Sheet</th>";
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em;'>X-Number</th>";	
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; text-align: center;'>PDF</th>";
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; text-align: center;'>Word</th>";	
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; text-align: center;'>PDF</th>";
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; text-align: center;'>Word</th>";			
		echo "<th style='font-weight: bold; border: 1px solid black; padding: .5em; text-align: center;'>Web</th>";
		echo "</tr>";

	
	$i = 0;

	// The Loop
	
while (have_posts()) : the_post();

		if($i%2 == 0)
			{
			echo "<tr bgcolor='#97A076'>";
			$i++;
			}
		else
			{
			echo "<tr bgcolor='#B2B998'>";
			$i++;
			} 	
			
			
		echo "<td style='border: 1px solid #28361b; padding-left: .2em;'>";
		
		the_title();

		echo "</td>";
		
		echo "<td  style='border: 1px solid #28361b; text-align: center;'>";

			printf( get_field('fact_sheet_x-number'));

		echo "</td>";			
		

	
		
		// Full Color PDF 

		echo "<td style='text-align: center; border: 1px solid #28361b;'>";
		
		?><br />
		<a href="<?php echo $blog_path ?>/files/Fact_Sheets/FC_PDF/<?php printf( get_field('fact_sheet_filename_stem')) ?>.pdf" target="_blank">Full Color PDF</a><br />
		
		<a href="http://labs.russell.wisc.edu/pddc/files/Fact_Sheets/FC_PDF/<?php printf( get_field('fact_sheet_filename_stem')) ?>.pdf" target="_blank">PDF</a><?php
		
		echo "</td>";

		// Full Color Word 
		// test		
		echo "<td style='text-align: center; border: 1px solid #28361b;'>"; ?>
		

		<a href="http://labs.russell.wisc.edu/pddc/files/Fact_Sheets/FC_Word/<?php printf( get_field('fact_sheet_filename_stem')) ?>.doc" target="_blank">Word</a><?php
		
		echo "</td>";
		
		// Low Color PDF 

		echo "<td style='text-align: center; border: 1px solid #28361b;'>";
		
		?>

		<a href="http://labs.russell.wisc.edu/pddc/files/Fact_Sheets/LC_PDF/<?php printf( get_field('fact_sheet_filename_stem')) ?>.pdf" target="_blank">PDF</a><?php
		
		echo "</td>";

		// Low Color Word 
		
		echo "<td style='text-align: center; border: 1px solid #28361b;'>"; ?>

		<a href="http://labs.russell.wisc.edu/pddc/files/Fact_Sheets/LC_Word/<?php printf( get_field('fact_sheet_filename_stem')) ?>.doc" target="_blank">Word</a><?php
		
		echo "</td>";
		
		
		echo "<td style='text-align: center; border: 1px solid #28361b;'>"; ?>
	
				<a href="<?php the_permalink(); ?>" target="_blank">Web</a>				
				<?php ;  
	
		echo "</td>";			
			
		echo "</tr>";	
		
		endwhile;

		endif; 

		echo "</table>";


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