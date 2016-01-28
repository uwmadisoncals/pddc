<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info" style="text-align: center; font-size: .8em !important;">
			
			<br /><hr />

<div style="float: left; margin-left: auto; margin-right: auto; text-align: center; width: 100%;">		
	<a href="http://www.wisc.edu/">UW-Madison</a>  &nbsp; &nbsp; &nbsp;  <a href="http://www.cals.wisc.edu/">College of Agricultural and Life Sciences</a> <br /><a href="http://www.plantpath.wisc.edu/">UW-Madison Department of Plant Pathology</a><br /><br />	
				
	<span class="feedback-text">Accessibility questions: Click <a href="mailto:hudelson@wisc.edu">here</a> to send an email</span><br /><br />
	<span style="color: black;">Copyright &copy; <?php
	$now = date('Y');
	echo $now; ?> The Board of Regents of the University of Wisconsin System </span><br /><br />
	
</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php wp_footer(); ?>
<div class="login-link" style="font-size: 80%"><a href="<?php echo site_url().'/wp-admin';?>">Login</a></div>


</body>
</html>