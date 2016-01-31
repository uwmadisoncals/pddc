<?php

// Reset Query
wp_reset_query();

// The Query

$args = array(
	'cat' => 10,
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

#tablepress-1 {
    width: 100% !important;
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

<div id="primary" class="content-area">

<div id="content" class="site-content" role="main">


<div style="background-color: #99CCFF; padding-top: .75em; padding-bottom: .5em; padding-left: .5em; padding-right: .5em;" >

<div style="font-size: 1.5em; font-style: italic; color: black; text-align: center;">University of Wisconsin Garden Fact Sheets</div>

</div>

<div style="text-align: center;">
<img src="<?php echo $blog_path ?>/wp-content/themes/custom_footers/images/uwex-logo.png" alt="UWEX logo" style="padding-top: 1.25em; padding-bottom: .5em;">
</div>

<header class="entry-header">

<h1 style="color: #28361B;" class="entry-title"><?php the_title(); ?>


</h1>



</header>

<div class="entry-content">

<?php
// The Loop
while ( have_posts() ) : the_post(); ?>

	<div class="entry-content">

<?php
/* conditionally display the pest alert text if the boolean value is true */ 	
	if ((get_field('pest_alert'))) {		
		echo '<div class="pest-alert">Pest Alert</div>';		
	}
?>		

<div> <span class="field-labels">Authors:</span> <?php printf( get_field('authors')); ?></div>

<div> <span class="field-labels">Last Revised:</span> <?php 
$date = DateTime::createFromFormat('Ymd', get_field('last_revised'));
echo $date->format('m/d/Y');
?></div>

<div><span class="field-labels">X-number:</span> <?php printf( get_field('fact_sheet_x-number')); ?></div>

<div style="padding-top: 1.3em; text-align: justify;">	
	<?php 
	
	the_content();
	?>

</div>

<hr />

<div>This Fact Sheet is also available in PDF format:</div>

<ul>
<li><a href="<?php echo $blog_path ?>/files/Fact_Sheets/FC_PDF/<?php printf( get_field('fact_sheet_filename_stem')) ?>.pdf" target="_blank">Full Color PDF</a></li>
<li><a href="<?php echo $blog_path ?>/files/Fact_Sheets/LC_PDF/<?php printf( get_field('fact_sheet_filename_stem')) ?>.pdf" target="_blank">Low Color PDF</a></li>
</ul>

<hr />


<div style="font-size: 80%;">



<?php
/* conditionally display the completed as text if the boolean value is true */ 	
	if ((get_field('completed_as_partial_fulfillment_for_class'))) {
		echo '<p>';	
		printf( get_field('completed_as_partial_fulfillment_for_class'));	
		echo '</p>';	
		}
?>		
<?php

/* conditionally display the completed as text if the boolean value is true */ 	
	if ((get_field('stanosz_copyright_statement'))) {
		echo '<p>';	
		echo '&copy; ';
		printf( get_field('copyright_years_covered') );			
		echo ' Glen Stanosz All Rights Reserved.';	
		echo '</p>';	
		}
		else {
		echo '<p>';	
		echo '&copy; ';
		printf( get_field('copyright_years_covered') );	
		echo ' the Board of Regents of the University of Wisconsin System doing business as the division of Cooperative Extension of the University of Wisconsin Extension.';	
		echo '</p>';	
		}
?>	
	

<p>An EEO/Affirmative Action employer, University of Wisconsin Extension provides equal opportunities in employment and programming, including Title IX and ADA requirements.  This document can be provided in an alternative format by calling Brian Hudelson at (608) 262-2863 (711 for Wisconsin Relay). </p> 

<?php
/* conditionally display the pesticide text if the boolean value is true */ 	
	if ((get_field('pesticide_statement'))) {		
		echo '<p>References to pesticide products in this publication are for your convenience and are not an endorsement or criticism of one product over similar products.  You are responsible for using pesticides according to the manufacturer’s current label directions.  Follow directions exactly to protect the environment and people from pesticide exposure.  Failure to do so violates the law.</p>';	
	}
?>		

<?php
/* conditionally display the thanks text if the boolean value is true */ 	
	if ((get_field('thanks_to'))) {
		echo '<p>';	
		printf( get_field('thanks_to'));	
		echo '</p>';	
		}
?>	

<p>A complete inventory of University of Wisconsin Garden Facts is available at the University of Wisconsin-Extension Plant Disease Diagnostics Clinic website:  <a href="http://pddc.wisc.edu">http://pddc.wisc.edu</a>.</p>
</div>

</div> 

<div style="text-align: center; margin-bottom: 2em;">

<?php 

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
 the_post_thumbnail(array(400,400));
} 
?>

</div>

<?php

endwhile;

// Reset Query
wp_reset_query();

?>

</div><!-- #content -->
</div><!-- #primary -->

<?php 
get_sidebar();
get_footer();
