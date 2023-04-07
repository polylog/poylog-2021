<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package polylog
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$search_form_id = wp_unique_id( 'search-form-' );

$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form class="search-form form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get" novalidate>
	<label class="sr-only" for="<?php echo esc_attr( $search_form_id ); ?>"><?php _e( 'Search&hellip;', 'polylog' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>
	<input class="form__input" id="<?php echo esc_attr( $search_form_id ); ?>" type="search" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" placeholder="<?php _e( 'Search&hellip;', 'polylog' ); ?>" />
	<button class="btn" type="submit" aria-label="<?php _e( 'Search', 'polylog' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?>">
		<svg class="icon" focusable="false" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="var(--icon-stroke)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
	</button>
</form>
