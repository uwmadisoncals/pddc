<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

				<?php get_search_form(); 
				$blog_path = $current_blog->path;

				?>					
				
				<p><?php _e( 'By any chance, were you looking for a fact sheet?', 'twentyeleven' ); ?></p>
					<p>Our fact sheets are now located <a href="
					<?php echo $blog_path ?>fact-sheet-listing/">here.</a></p> 
					<p>You can also check:</p>
					<ul>
						<li>our site menu above</li>
						<li>our <a href="<?php echo $blog_path ?>site-index/">alphabetical site index</a>
						<li>our you can search our site for content:</a></li>
					</ul>		
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
