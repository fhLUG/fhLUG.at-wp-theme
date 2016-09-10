<?php
/**
 * Custom Twenty Sixteen fhLUG template tags
 */

if ( ! function_exists( 'fhlug_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 */
function fhlug_the_custom_logo() {
	$logo = '';
	if ( function_exists( 'the_custom_logo' ) ) {
		$logo = get_custom_logo();
	}

	if ( $logo !== '' ) : echo $logo; else : ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
<?php endif;
}
endif;

