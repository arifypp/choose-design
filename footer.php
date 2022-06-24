<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Choose_Design
 */
/************************************************************************/
// Theme data from admin panel
/***************************************************************************/
$cb_options					= get_option( '_choose-design' );
$cb_footer_text 			= $cb_options['footer_left_text'];
$cb_footer_left_switch 		= $cb_options['footer_left_switch'];
$cb_footer_right_text 		= $cb_options['footer_right_text'];
$cb_right_swtich 			= $cb_options['footer_right_switch'];
?>

<!-- ======= Footer ======= -->
<footer id="footer">
	<div class="container py-4">
	<?php if( $cb_footer_left_switch == true ) : ?>	
		<div class="copyright">
			<?php echo cb_kses( $cb_footer_text, 'choose-design');?>
		</div>
	<?php endif; ?>

	<?php if( $cb_right_swtich == true ) : ?>	
		<div class="credits">
			<?php echo cb_kses( $cb_footer_right_text, 'choose-design');?>
		</div>
	<?php endif; ?>

	</div>
</footer><!-- End Footer -->
	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
