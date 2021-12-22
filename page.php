<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polylog
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<main class="main main-inner main-privacy">
		<div class="privacy">
			<div class="container">
				<h1 class="privacy__title"><?php the_title(); ?></h1>
				<div class="privacy__content">
					<?php
					if ( have_rows( 'text_block' ) ) :
						while ( have_rows( 'text_block' ) ) :
							the_row();
							?>
							<div class="text-block">
								<?php the_sub_field( 'text_field' ); ?>
							</div>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</main>
	<?php
endwhile;
get_footer();
