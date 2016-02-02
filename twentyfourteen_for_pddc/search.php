<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>

					<br />
					<div style="margin-left: auto; margin-right: auto; border: 1px dotted #2b552b; padding: 10px;">

					<strong>Attention Firefox users:</strong><br/>

					<p style="margin-bottom: .5em;">
					If you would like to print the PDF version of the fact sheets on this page, instead of clicking the PDF links below to open them on the webserver, save the fact sheets to your computer, then use Adobe Reader to open them.<br />
					</p>
					<p style="margin-bottom: .5em;">
					To save the fact sheets to your computer, right-click the PDF link and choose Save Link As or Save Target As from the popup menu.<br/>
					</p>
					<p>You can download Adobe Reader from Adobe&rdquo;s site - <a href="http://get.adobe.com/reader/">http://get.adobe.com/reader/</a> - make sure you uncheck "Yes, install McAfee Security Scan Plus - optional" before you click the Download now button.
					</p>

					</div> 
				<br />						
				<?php
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next post navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
