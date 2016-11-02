<?php

/********** The code below adds an archived handouts flag to the media library, 

so Brian can flag PDFs to appear on the Archived Handout page 

*****/

/***********************************************************************/	

function pddc_archived_handouts_add( $form_fields, $post ) {
	$form_fields['pddc-archived-handouts'] = array(
		'label' => 'List on the Archived Handouts Screen',
		'input' => 'text',
		'value' => get_post_meta( $post->ID, 'pddc_archived_handouts', true ),
		'helps' => 'Enter yes or no in lower case letters',
	);

	return $form_fields;
}

add_filter( 'attachment_fields_to_edit', 'pddc_archived_handouts_add', 10, 2 );


function pddc_archived_handouts_save( $post, $attachment ) {
	if( isset( $attachment['pddc-archived-handouts'] ) )
		update_post_meta( $post['ID'], 'pddc_archived_handouts', $attachment['pddc-archived-handouts'] );

	return $post;
}

add_filter( 'attachment_fields_to_save', 'pddc_archived_handouts_save', 10, 2 );

/***********************************************************************/

/* This adds a new widget area below the menu bar and above the page title to display a ticker for informational messages */	

/**
 * Register Widget Area.
 *
 */
function info_bulletin_area_widgets_init() {

	register_sidebar( array(
		'name' => 'Info Bulletin Area',
		'id' => 'info_bulletin_area',
		'before_widget' => '<div id="info-bulletin-area-widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'info_bulletin_area_widgets_init' );


?>