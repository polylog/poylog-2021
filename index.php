<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Polylog
 */

get_header();
?>

	<main class="main">
		<div class="container">
			<h1 class="is-centered-text"><?php single_post_title(); ?></h1>

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
		</div>
	</main>

<?php
get_footer();
