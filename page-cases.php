<?php
/**
 * The template for career page
 * Template Name: Кейсы
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polylog
 */

get_header();
while ( have_posts() ) {
	the_post();
	?>

	<style>
		.hide-me{
			opacity: 0;
			-webkit-transform: translateY(100px);
			-ms-transform: translateY(100px);
			transform: translateY(100px);
			position: absolute;
		}
		.show-me{
			opacity: 1;
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			transform: translateY(0);
			position: relative;
		}
	</style>

	<main class="main main-inner main-cases">
		<h1 class="sr-only">
			<?php the_title(); ?>
		</h1>
		<div class="cases-wrapper">

			<section class="all-cases">
				<h2 class="sr-only">
					<?php the_title(); ?>
				</h2>

				<div class="container">
					<div class="cases__wrapper">
						<ul class="tabs" >
							<?php
								$terms     = get_field( 'cases_directions' );
								$count_dir = 1;
							?>
							<?php if ( $terms ) : ?>
								<?php foreach ( $terms as $term ) : ?>
									<li>
										<a href="#tab<?php echo esc_attr( $count_dir ); ?>">
											<?php echo esc_html( $term->name ); ?>
										</a>
									</li>
									<?php $count_dir++; ?>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>

						<ul class="clear filter-date">
							<li class="button all-i" data-filter="all" tabindex="-1">все года</li>
							<?php
							$cases_years = get_field( 'cases_years' );
							if ( $cases_years ) :
								$num_year = 1;
								?>
								<?php foreach ( $cases_years as $cases_years_i ) : ?>
							<li class="button site-i" data-filter="year<?php echo esc_attr( $cases_years_i['cases_years_item'] ); ?>" tabindex="-<?php echo esc_attr( $num_year ); ?>">
									<?php echo esc_html( $cases_years_i['cases_years_item'] ); ?>
							</li>
									<?php $num_year++; ?>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>

						<div class="tab_container">
							<?php
							$terms      = get_field( 'cases_directions' );
							$count_case = 1;
							if ( $terms ) :
								?>
									<?php foreach ( $terms as $term ) : ?>
											<div class="tab_content" id="tab<?php echo esc_attr( $count_case ); ?>">
												<div class="cases-tab">
													<?php
														$cat_cases = $term->term_id;
														$args      = array(
															'posts_per_page' => 24,
															'cat'            => $cat_cases,
															'post_type'      => 'case',
														);
														$q         = new WP_Query( $args );
														if ( $q->have_posts() ) {
															while ( $q->have_posts() ) {
																$q->the_post();
																?>
																<div class="case-item all-cases__item item elem year<?php the_time( 'Y' ); ?>">
																	<div class="case-item__img" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url() ); ?>);">
																		<div class="case-item__date"><?php the_time( 'Y' ); ?></div>
																	</div>
																	<h4 class="case-item__title"><?php the_title(); ?></h4>
																	<a href="<?php the_permalink(); ?>" class="case-item__link"></a>
																</div>
																	<?php
															}
														}
														wp_reset_postdata();
														?>
												</div>
											</div>
										<?php $count_case++; ?>
									<?php endforeach; ?>
							<?php else : ?>
								<h3>Кейсов нет</h3>
							<?php endif; ?>
						</div>

					</div>
				</div>
			</section>
		</div>
	</main>
	<?php
}
get_footer();
