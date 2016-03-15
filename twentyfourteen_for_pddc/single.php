<?php

// The Query
query_posts();

if ( in_category('fact-sheet') ) {
	
get_header(); 
include(STYLESHEETPATH . '/single-fact-sheet.php'); 

} 
elseif (in_category('wi-hort-update-archive') ) {
include(STYLESHEETPATH . '/single-wi-hort-update.php'); 
	
	
}

else {
		
	wp_reset_query();

	include(STYLESHEETPATH . '/single-default.php'); 
	
}


?>
