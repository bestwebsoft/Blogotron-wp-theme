<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #content-wrapper and #page-wrapper div elements.
 *
 * @subpackage Blogotron
 * @since Blogotron 1.4
 */
?>
	</div><!-- #content-wrapper -->
	<div id="footer-wrapper">
		<footer id="main-footer" role="contentinfo">
			<div id="copyright">&copy; <?php printf( '%1$s %2$s', the_date( 'Y', '', '', false ),  get_bloginfo( 'name' ) ) ?></div>
			<div id="info"><?php _e( 'Powered by', 'blogotron' ); ?> <a href="<?php echo esc_url( 'https://github.com/bestwebsoft' ); ?>" target="_blank">BestWebSoft</a> <?php _e( 'and', 'blogotron' ); ?> <a href="<?php echo esc_url( 'http://wordpress.org' ); ?>" target="_blank">Wordpress</a></div>
		</footer><!-- #main-footer -->
	</div><!-- #footer-wrapper -->
</div><!-- #page-wrapper -->
<?php wp_footer(); ?>
</body>
</html>