<?php
/**
 * The template for career page
 * Template Name: Стажировка
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package polylog
 */

get_header();
while ( have_posts() ) :
	the_post();
	?>
	<main class="main main-inner main-career" style="margin-top: 0; padding-top: 0; overflow: hidden;">
			<h1 class="visually-hidden"><?php the_title(); ?></h1>

				<section class="career-internship" id="career-internship">
					<div class="career-internship__teaser">
						<div class="container">
							<h2 class="career-internship__title">
								<?php the_title(); ?>
							</h2>
							<div class="career-internship__teaser-wrapper">
								<div class="career-internship__teaser-main">
									<?php the_field( 'internship_text' ); ?>
								</div>
								<div class="career-internship__teaser-additional">
									<?php the_field( 'internship_caption' ); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="career-internship__info">
						<div class="container career-internship__info-wrapper">
							<div class="career-internship__features">
								<div class="text-block">
									<?php
									$feature_title = get_field( 'feature_title' );
									if ( $feature_title ) :
										echo '<h3>' . esc_html( $feature_title ) . '</h3>';
									endif;
									the_field( 'feature_text' );
									?>
								</div>
							</div>
							<div class="career-internship__resume">
								<?php
								$feature_image = get_field( 'feature_image' );
								if ( $feature_image ) :
									echo '<img class="career-internship__resume-image" src="' . esc_url( kama_thumb_src( 'src=' . $feature_image . '&w=600&h=750' ) ) . '" srcset="' . esc_url( kama_thumb_src( 'src=' . $feature_image . '&w=1200&h=1500' ) ) . ' 2x" alt=""/>';
								endif;
								?>
								<a target="_blank" href="mailto:Hr@polylog.ru?subject=Отправить резюме" class="btn career-internship__request email-btn" itemprop="email">
									<span>
										<?php
										$feature_button = get_field( 'feature_button' );
										echo $feature_button ? esc_html( $feature_button ) : 'Отправить резюме';
										?>
									</span>
									<svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/></svg>
								</a>

							</div>

							<?php if ( get_field( 'internship_vac_link' ) ) : ?>
								<div class="career-internship__link" style="width: 100%;">
									<div class="container">
										<div class="st_title">
											<h2 class="pr-portfolio__title"><a href="/vakansii">Наши вакансии</a></h2>
										</div>
									</div>
								</div>
							<?php endif; ?>

						</div>
					</div>




				</section>

				<?php
				$feature_image_bottom = get_field( 'feature_image_bottom' );
				if ( $feature_image_bottom ) :
					echo '<img class="career-image" src="' . esc_url( kama_thumb_src( 'src=' . $feature_image_bottom . '&w=1440&h=810' ) ) . '"  srcset="' . esc_url( kama_thumb_src( 'src=' . $feature_image_bottom . '&w=2880&h=1620' ) ) . ' 2x" alt=""/>';
				endif;
				unset( $feature_title, $feature_image, $feature_image_bottom, $feature_button );
				?>

			</div>
		</main>
	<?php
endwhile;
get_footer();
