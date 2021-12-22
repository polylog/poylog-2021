<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package polylog
 */

get_header();
while ( have_posts() ) :
	the_post();
	$cat = get_the_category();
	?>
	<main class="main main-inner main-article">
		<div class="blog">

			<?php /* TICKER */ ?>
			<div class="blog__title">
				<div class="blog__title-row">
					<div class="blog__title-item">
						<span><?php echo esc_html( $cat[0]->name ); ?></span>
						<span class="black"><?php echo esc_html( $cat[0]->name ); ?></span>
						<span><?php echo esc_html( $cat[0]->name ); ?></span>
						<?php unset( $cat ); ?>
					</div>
				</div>
			</div>

			<div class="container">
				<?php get_template_part( 'partials/content', get_post_type() ); ?>
			</div>

		</div>
	</main>
	<?php
endwhile;
get_footer();
?>
