<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Polylog
 */

?>

<h1 class="h2 mt-1 is-centered-text"><?php esc_html_e( 'Nothing Found', 'polylog' ); ?></h1>

<?php
if ( is_home() && current_user_can( 'publish_posts' ) ) :

	printf(
		'<p>' . wp_kses(
			/* translators: 1: link to WP admin new post page. */
			__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'polylog' ),
			array(
				'a' => array(
					'href' => array(),
				),
			)
		) . '</p>',
		esc_url( admin_url( 'post-new.php' ) )
	);

elseif ( is_search() ) :
	?>

	<p class="is-centered-text"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'polylog' ); ?></p>

	<figure class="border is-not-found">
		<video preload="metadata" autoplay muted playsinline loop width="1280" height="544">
			<source src="/wp-content/themes/polylog/media/video/pirates-of-the-caribbean.mp4" type="video/mp4">
		</video>
	</figure>
	<?php

else :
	?>

	<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'polylog' ); ?></p>
	<?php
	get_search_form();

endif;
?>
