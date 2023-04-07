<?php
/**
 * The template for displaying case post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package polylog
 */

get_header();
while ( have_posts() ) :
	the_post();
	?>
	<main class="main">
		<div class="container case">

			<aside class="case__aside">
				<div class="case__teaser">
					<h1 class="case__title"><?php the_title(); ?></h1>
					<div class="case__description">
						<div class="text-block">
							<p><strong><?php the_field( 'case_sidebar_text' ); ?></strong></p>
							<p><?php the_field( 'case_sidebar_caption' ); ?></p>
						</div>
					</div>
					<?php if ( get_field( 'case_sidebar_date' ) ) : ?>
						<div class="case__date"><?php the_field( 'case_sidebar_date' ); ?></div>
					<?php endif; ?>
				</div>

				<button class="btn is-lg case__request form-request__open" type="button">
					<span>
						<?php
						$case_sidebar_button = get_field( 'case_sidebar_button' ) ? get_field( 'case_sidebar_button' ) : 'Давайте работать';
						echo esc_html( $case_sidebar_button );
						?>
					</span>
					<svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/>
					</svg>
				</button>

			</aside>

			<div class="case__content">
				<?php the_field( 'case_content' ); ?>
			</div>

		</div>

		<?php
		$next_post = get_field( 'case_next' );
		if ( ! $next_post ) :
			$next_post = get_next_post();
		endif;
		?>

		<?php if ( $next_post ) : ?>
			<a class="case__next" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
				<div class="container case__next-wrapper anim-item anim-item--no-hide anim-right">
					<div class="case__next-info">
						<div class="case__next-caption">Следующий кейс:</div>
						<div class="case__next-title">
							<span><?php echo esc_html( $next_post->post_title ); ?></span>
							<svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/></svg>
						</div>
					</div>
					<?php
					$thumb = wp_get_attachment_url( get_post_thumbnail_id( $next_post->ID ) );
					if ( $thumb ) :
						echo '<img class="case__next-image" src="' . esc_url( kama_thumb_src( 'src=' . $thumb . '&w=280&h=190' ) ) . '" srcset="' . esc_url( kama_thumb_src( 'src=' . $thumb . '&w=560&h=380' ) ) . ' 2x" alt=""/>';
					endif;
					?>
				</div>
			</a>
			<?php unset( $thumb ); ?>
		<?php endif; ?>
		<?php unset( $next_post ); ?>
	</main>

	<script>
		jQuery(document).ready(function () {
			$(window).scroll(function () {
				$window = $(window);
				$h = 50;
				$window.scroll(function () {
					console.log(111);
					if ($window.scrollTop() > $h) {
						jQuery('.case__aside').addClass('case__aside--fix');
					} else {
						jQuery('.case__aside').removeClass('case__aside--fix');
					}
				});
			});
		});
	</script>

	<?php
endwhile;
get_footer();
