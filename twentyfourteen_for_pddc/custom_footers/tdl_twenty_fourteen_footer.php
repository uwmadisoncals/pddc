		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info" style="text-align: center; font-size: .8em !important;">
			
			<br /><hr />
<!-- Display logo(s) -->
<?php $LogoPath = content_url() .'images/'; 
$UW_Logo = 'UWlogo_fl_4c.png';
$UWEX_Logo = 'uwex-logo.png';			
?>			
<img src="<?php echo $LogoPath.$UW_Logo; ?>" alt="UW Logo" style="float: left; margin-left: auto; margin-right: auto; width: 181px; height: 62px;">	

<div style="float: left; margin-left: auto; margin-right: auto; width: 64%; ">		
	<a href="http://www.wisc.edu/">UW-Madison</a>  &nbsp; &nbsp; &nbsp;  <a href="http://www.cals.wisc.edu/">College of Agricultural and Life Sciences</a> <br /><a href="http://www.plantpath.wisc.edu/">UW-Madison Department of Plant Pathology</a><br /><br />	
				
	<span class="feedback-text">Accessibility questions: Click <a href="mailto:webeditor@russell.wisc.edu">here</a> to send an email</span><br /><br />
	<span style="color: black;">Copyright &copy; <?php
	$now = date('Y');
	echo $now; ?> The Board of Regents of the University of Wisconsin System </span><br /><br />
	
</div>

<img src="<?php echo $LogoPath.$UWEX_Logo; ?>" alt="UWEX Logo" style="float: left; margin-left: auto; margin-right: auto; width: 155px; height: 47px;">	<br /><br /><br /><br /><br /><br />
	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php wp_footer(); ?>
<div class="login-link" style="font-size: 80%"><a href="<?php echo site_url().'/wp-admin';?>">Login</a></div>