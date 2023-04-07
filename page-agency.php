<?php
/**
 * The template for agency page
 * Template Name: Агенство
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package polylog
 */

get_header();
while ( have_posts() ) :
	the_post();
	?>
<main class="main main-inner main-agency">
	<h1 class="sr-only">
		<?php the_title(); ?>
	</h1>
	<div class="agency">
		<a name="agency-experts"></a>
		<section class="agency-experts">
			<h2 class="agency-experts__title">
				<span>
					<?php the_field( 'experts_title' ); ?>
				</span>
			</h2>
			<div class="container">
					<div class="agency-experts__wrapper">
							<?php if ( have_rows( 'experts' ) ) : ?>
								<ul class="agency-experts__list">
									<?php while ( have_rows( 'experts' ) ) : ?>
										<?php the_row(); ?>
										<li class="agency-experts__item">
											<?php $expert_photo = get_sub_field( 'expert_photo' ); ?>
											<?php if ( $expert_photo ) : ?>
												<?php echo '<img class="agency-experts__item-photo anim-item anim-item--no-hide anim-scale-opacity" src="' . esc_url( kama_thumb_src( 'src=' . $expert_photo . '&w=493' ) ) . '" width="" height="" srcset="' . esc_url( kama_thumb_src( 'src=' . $expert_photo . '&w=986' ) ) . ' 2x" alt="">'; ?>
											<?php endif; ?>
												<div class="agency-experts__item-info">
													<div class="agency-experts__item-name">
														<?php the_sub_field( 'expert_name' ); ?>
													</div>
													<div class="agency-experts__item-position">
														<?php the_sub_field( 'expert_position' ); ?>
													</div>
												</div>
										</li>
								<?php endwhile; ?>
								</ul>
								<?php unset( $expert_photo ); ?>
						<?php endif; ?>
					<blockquote class="agency-experts__blockquote anim-item anim-item--no-hide anim-right">
						<?php the_field( 'experts_caption' ); ?>
					</blockquote>
				</div>
			</div>
		</section>

		<section class="agency-team">
			<h2 class="agency-team__title">
				<span>
					<?php the_field( 'team_title' ); ?>
				</span>
			</h2>

			<div class="container">
				<?php if ( have_rows( 'team' ) ) : ?>
					<ul class="agency-team__list">
						<?php while ( have_rows( 'team' ) ) : ?>
							<?php the_row(); ?>
							<li class="agency-team__item anim-item anim-item--no-hide anim-top">
								<?php $team_photo = get_sub_field( 'team_photo' ); ?>
								<?php if ( $team_photo ) : ?>
									<?php echo '<img class="agency-team__item-photo" src="' . esc_url( kama_thumb_src( 'src=' . $team_photo . '&w=493' ) ) . '" width="" height="" srcset="' . esc_url( kama_thumb_src( 'src=' . $team_photo . '&w=986' ) ) . ' 2x" alt="' . esc_attr( the_sub_field( 'team_name' ) ) . '"/>'; ?>
								<?php endif; ?>
									<div class="agency-team__item-info">
										<div class="agency-team__item-name">
											<?php the_sub_field( 'team_name' ); ?>
										</div>
										<div class="agency-team__item-position">
											<?php the_sub_field( 'team_position' ); ?>
										</div>
									</div>
								</li>
						<?php endwhile; ?>
					</ul>

				<?php endif; ?>
			</div>
		</section>

		<div class="agency-conclusion">
			<div class="container agency-conclusion__wrapper">
				<div class="agency-conclusion__text">
					<?php the_field( 'team_caption' ); ?>
				</div>
			</div>
		</div>

	</div>
</main>

	<?php
	endwhile;
	get_footer();
