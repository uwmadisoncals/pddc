<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.

 Template Name: PDDC Site Index

 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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

<div style="font-size: 120%; font-weight: bold; margin-left: 5px;">List of Pages</div>			

<?php $args = array(
	'sort_column' => 'post_title',
	'menu_class'  => 'menu',
	'include'     => '',
	'exclude'     => '1203',
	'echo'        => true,
	'show_home'   => false,
	'link_before' => '',
	'link_after'  => '' );
?>	
<ul>
	<?php wp_list_pages( $args ); ?>
</ul>

<?php /* END - add custom code */ ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();