<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polylog
 */

get_header();
$cat = get_queried_object();
?>

<main class="main blog">

	<div class="blog__title">
		<div class="blog__title-row marquee-item" data-marque-speed="50">
			<h1 class="blog__title-item marquee-item__child">
				<span><?php echo esc_html( $cat->name ); ?></span>
				<span class="black"><?php echo esc_html( $cat->name ); ?></span>
				<span><?php echo esc_html( $cat->name ); ?></span>
			</h1>
		</div>
	</div>

	<div class="container">
		<div class="grid-view">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* To make it copy for new post type, include a file called
					* content-___.php (where ___ is the Post Type name).
					*/
					get_template_part( 'partials/content', get_post_type() );

				endwhile;

				the_posts_navigation(
					array(
						'prev_text'          => __( 'Ранее', 'polylog' ),
						'next_text'          => __( 'Свежее', 'polylog' ),
						'screen_reader_text' => __( 'Постраничная навигация', 'polylog' ),
					)
				);

			else :

				get_template_part( 'partials/content', 'none' );

			endif;
			?>
		</div>

		<?php
		$pages = $wp_query->max_num_pages;
		if ( (int) $pages > 1 ) :
			?>
			<button class="btn blog__more-btn" data-cat="<?php echo esc_attr( $cat->term_id ); ?>" data-page="1">
				Показать ещё
			</button>
			<?php
		endif;
		unset( $pages, $cat );
		?>
	</div>
</main>

<?php
get_footer();

