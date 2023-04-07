<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package polylog
 */

get_header();
?>

<main class="list-view">
<?php
get_search_form();
if ( have_posts() ) {
	?>

	<span class="list-view__counter"><!-- <?php pll_e( 'Results: ' ); ?> -->
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'%d result',
					'%d results',
					(int) $wp_query->found_posts,
					'polylog'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</span>

	<?php

	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
			* Include the Post-Format-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
		get_template_part( 'partials/content-search', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	the_posts_pagination(
		array(
			'type' => 'list',
		)
	);

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'partials/content-none' );
}
?>
</main>
<?php
get_footer();
