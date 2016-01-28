<?php
/**
 * This template uses the wp_list_pages function to display a linked list of the pages on the  
 * site except for the filtered fact sheets page.
 *
 Template Name: PDDC Events Template
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
 /**
 * this template adds a drop-down list so the site visitor can easily move between the existing event calendar pages
 * to use, create the page, set the template to PDDC Events Template and set the page parent to Events.
 */
 
 get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
<?php /* BEGIN - add custom code below */ ?>	

<?php while ( have_posts() ) : the_post(); ?>	

<div style="width: 70%; margin-left: 15%; margin-right: 15%; margin-top: 1.5em; margin-bottom: 1.2em; padding: .5em; text-align: center; border: 2px solid #2b552b;">
 Interested in scheduling Brian Hudelson for presentation, workshop or other outreach activity? 
 Check out the calendar below to find out if Brian might have the date open.  
 Contact Brian directly [bdh@plantpath.wisc.edu or (608) 262-2863] to verify his availability. 
</div> 

<div style="text-align: center; ">
 <h5><?php _e('Use this drop-down list to move between calendar months:'); ?></h5>
   <form action="<?php bloginfo('url'); ?>" method="get">
   <?php wp_dropdown_pages("child_of=1356&sort_order='ASC'&selected=0"); ?>
   <input type="submit" name="submit" value="view" />
   </form>
</div>
<p>&nbsp;</p>

	<?php get_template_part( 'content', 'page' ); ?>

	<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>


<?php /* END - add custom code */ ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();