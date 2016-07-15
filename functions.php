<?php
/**
 * Jobify Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Jobify Child 1.0.0
 */


/**
 * Display footer credit
 */
if ( ! function_exists( 'rookie_footer_credit' ) ):
function rookie_footer_credit() {
	?>
	<div class="site-credit">
		<?php echo apply_filters( 'rookie_footer_credit', '<a href="http://opentuteplus.com">' . sprintf( __( 'Crafted by %s', 'rookie' ), 'OpenTute+' ) . '</a>' ); ?>
	</div><!-- .site-info -->
	<?php
}
endif;