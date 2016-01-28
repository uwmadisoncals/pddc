<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

gget_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

				<?php
					// Start the Loop.
				
				    <?php while ( have_posts() ) : the_post(); ?>

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load('search', '1', {style : google.loader.themes.MINIMALIST});
function searchLoaded() {
var options = {};
var extendedArgs = {};
extendedArgs['filter'] = '0';
options[google.search.Search.RESTRICT_EXTENDED_ARGS] = extendedArgs;
options['adoptions'] = {'cseGoogleHosting': 'iframe'};
var customSearchControl = new google.search.CustomSearchControl(
"006215990384941337925:tk-d_yf_wcw"
, options);
customSearchControl.setRefinementStyle("link");
customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
customSearchControl.setMoreAds();
var options = new google.search.DrawOptions();
options.setSearchFormRoot('cse-search-form');
customSearchControl.draw('cse', options);
if (customSearchControl.startHistoryManagement(init)) {
customSearchControl.setLinkTarget(
google.search.Search.LINK_TARGET_TOP);
}
}
function init(customSearchControl) {
var num = customSearchControl.getWebSearcher().getNumResultsPerPage();
customSearchControl.execute("Enter keyworal nemec");
}
google.setOnLoadCallback(searchLoaded, true);
</script>					
					
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
