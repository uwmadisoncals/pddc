<?php
/**
 * The template for displaying an alpha list of the PDFs marked "yes" in the .
 *
 Template Name: PDDC Archived File Template
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen
 */
 
  get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
<?php /* BEGIN - add custom code below */ ?>	

<div style="padding-left: 20px;">

			<div style="font-size: 120%; font-weight: bold;">List of Archived Handouts</div>
 
			<p>Important: when you click the link, the file will open in a NEW window.  
			If you have a popup blocker in your browser, you may need to Control-click the link.</p>

			<?php /* Begin code to display the PDFs as links */ ?>
				<ul> 
					<?php

 $querystr = "
    SELECT $wpdb->posts.*, $wpdb->postmeta.* 
    FROM $wpdb->posts, $wpdb->postmeta
    WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
	AND $wpdb->postmeta.meta_key = 'pddc_archived_handouts' 
	AND $wpdb->postmeta.meta_value = 'yes'	
    ORDER BY $wpdb->posts.post_title ASC ";


					$attachments = $wpdb->get_results($querystr, OBJECT) or die('Query failed: ' . mysql_error());;
					
					/* $attachments = $wpdb->get_results($sql) or die('Query failed: ' . mysql_error()); */


						/* Begin the unordered list */	
						echo '<ol>'; // begin the unordered list

						/* Begin the if/foreach loop to walk the $attachments results set */
						if ($attachments) {
							foreach ($attachments as $post) {
								setup_postdata($post); 		
							
								echo '<li>';
		
								/* store the value of the entire link into a variable */
								$original_url = wp_get_attachment_url( $post->ID, false );		
								$the_file_title = ($post->post_title);
								$media_library_id = ($post->ID);
								$my_post_mime_type = ($post->post_mime_type);
								$media_library_edit_string = echo $blog_path.'/wp-admin/media.php?attachment_id='.$media_library_id."&action=edit"; 
								
								/* display edit title link only if they're logged in and have security priv to work with the media library and upload files */
								if (current_user_can('upload_files')) {
									?><a href="<?php echo $media_library_edit_string ?>" target="_blank">Edit Title</a>&nbsp;&nbsp; 
									<?php ;
									}  ?>

	
								<a href="<?php echo $original_url ?>" target="_blank"><?php echo $the_file_title ?></a>

								
								<br />

						<?php	
							echo '</li>'; // end display of the PDF link	
							}echo '<ol>'; // end the unordered list
						} 
						?>



</div>

<?php /* END - add custom code */ ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();