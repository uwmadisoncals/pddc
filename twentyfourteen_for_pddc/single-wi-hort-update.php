<?php

// Reset Query
wp_reset_query();

// The Query

$args = array(
	'cat' => 184,
	'posts_per_page' => 1
);

//query_posts( $args );

get_posts( $args );

get_header(); 

?>

<style>

#secondary {
    display: none !important;
}

.site-content .entry-header, .site-content .entry-content, .site-content .entry-summary, .site-content .entry-meta, .page-content, .hentry, .entry-content {
    max-width: 1260px !important;
}

.site-content, .site-main .widecolumn {
margin-left:0 !important;
}

.site-content {
margin-right:0 !important;
}

.site:before {
width:0px !important;
}
</style>

<!-- Display logo(s) -->
<?php 
$LogoPath = get_bloginfo('stylesheet_directory') .'/custom_footers/images/'; 
$UWEX_Logo = 'uwex-logo.png';			
?>	

<div id="primary" class="content-area">

<div id="content" class="site-content" role="main">


<div style="background-color: #99CCFF; padding-top: .75em; padding-bottom: .5em; padding-left: .5em; padding-right: .5em;" >
	<div style="font-size: 1.5em; font-style: italic; color: black; text-align: center;">University of Wisconsin - Wisconsin Hort Update Archive</div>
</div>

<div style="text-align: center;">
	<img src="<?php echo $LogoPath.$UWEX_Logo; ?>" alt="UWEX Logo" style="padding-top: 1.25em; padding-bottom: .5em;">
</div>

<header class="entry-header">
	<h1 style="color: #28361B;" class="entry-title"><?php the_title(); ?></h1>
</header>


<?php
// The Loop
while ( have_posts() ) : the_post(); ?>

	<div class="entry-content">

<div style="padding-top: 1.3em; text-align: justify;">	
	<?php 	
		the_content();
	?>
</div>

<hr />



<hr />

<div style="font-size: 80%;">


<p>An EEO/Affirmative Action employer, University of Wisconsin Extension provides equal opportunities in employment and programming, including Title IX and ADA requirements.  This document can be provided in an alternative format by calling Brian Hudelson at (608) 262-2863 (711 for Wisconsin Relay). </p> 


</div>

</div> <!-- end entry content div -->

<div style="text-align: center; margin-bottom: 2em;">

<?php 

	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	 the_post_thumbnail(array(400,400));
	} 
	?>

</div><!-- end post thumbnail div -->

<?php

endwhile;

// Reset Query
wp_reset_query();

?>

</div><!-- end #content -->
</div><!-- end #primary -->

<?php 
get_sidebar();
get_footer();
