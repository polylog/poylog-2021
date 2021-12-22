<?php
/**
 * The services page template
 * Template Name: PR
 *
 * @package Polylog
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
while ( have_posts() ) :
	the_post();
	?>

	<main class="main main-inner main-pr">
			<div class="pr">

				<?php
				$pr_menu = get_field( 'pr_menu' );
				if ( $pr_menu ) :
					?>
					<div class="additional-menu">
						<div class="container">
							<ul class="additional-menu__list">
								<?php foreach ( $pr_menu as $menu_item ) : ?>
									<li class="additional-menu__item">
										<a class="additional-menu__link <?php echo ( get_the_ID() === $menu_item->ID ) ? 'current' : ''; ?>" href="<?php echo esc_url( get_permalink( $menu_item->ID ) ); ?>">
											<?php echo esc_html( $menu_item->post_title ); ?>
										</a>
									</li>
								<?php endforeach; ?>
									<li class="additional-menu__item"><a class="additional-menu__link " href="https://it.polylog.ru/">Цифровые решения</a></li>
							</ul>
						</div>
					</div>
					<?php
					unset( $pr_menu, $menu_item );
					endif;
				?>

				<h1 class="container pr__title">
					<?php
					$h1 = get_field( 'h1' );
					if ( $h1 ) :
						echo esc_html( $h1 );
					else :
						echo esc_html( get_the_title() );
					endif;
					?>
				</h1>

				<section class="pr-teaser">
					<h2 class="pr-teaser__title">
						<span><?php the_field( 'pr_intro_word' ); ?></span>
					</h2>
					<div class="container pr-teaser__wrapper">
						<blockquote class="pr-teaser__blockquote">
							<?php the_field( 'pr_intro_text' ); ?>
						</blockquote>
						<div class="pr-teaser__leader">
							<?php
							$pr_intro_photo = get_field( 'pr_intro_photo' );
							if ( $pr_intro_photo ) :
								?>
								<img class="pr-teaser__leader-photo" src="<?php echo esc_url( $pr_intro_photo ); ?>" alt="">
							<?php endif; ?>

							<?php
							$pr_intro_video = get_field( 'pr_intro_video' );
							if ( $pr_intro_video ) :
								echo '<iframe width="450" height="253" src="https://www.youtube.com/embed/' . esc_attr( $pr_intro_video ) . ' " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
							endif;

							$person = the_field( 'pr_intro_name' );
							if ( $person ) :
								?>
							<div class="pr-teaser__leader-info">
								<div class="pr-teaser__leader-name"><?php the_field( 'pr_intro_name' ); ?></div>
								<div class="pr-teaser__leader-position"><?php the_field( 'pr_intro_position' ); ?></div>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</section>

				<section class="pr-about">
					<div class="container pr-about__wrapper">
						<?php
						unset( $h1, $pr_intro_photo, $pr_intro_video );
						if ( have_rows( 'pr_content' ) ) :
							while ( have_rows( 'pr_content' ) ) :
								the_row();
								if ( get_row_layout() === 'pr_block_red' ) :
									?>
									<div class="pr-about__row">
										<div class="pr-about__col">
											<h2 class="pr-about__title"><?php the_sub_field( 'pr_left_title' ); ?></h2>
											<?php
											$pr_left_image = get_sub_field( 'pr_left_image' );
											if ( $pr_left_image ) :
												echo '<img class="pr-about__image anim-item anim-item--no-hide anim-scale-opacity" src="' . esc_url( kama_thumb_src( 'src=' . $pr_left_image . '&w=386' ) ) . '" srcset="' . esc_url( kama_thumb_src( 'src=' . $pr_left_image . '&w=772' ) ) . ' 2x" alt=""/>';
											endif;
											unset( $pr_left_image );
											?>
										</div>
										<div class="pr-about__col">
											<div class="text-block">
												<?php the_sub_field( 'pr_left_text' ); ?>
											</div>
										</div>
									</div>
									<?php
								endif;
								if ( get_row_layout() === 'pr_block_text' ) :
									?>
									<div class="pr-about__row">
										<div class="pr-about__col">
											<div class="text-block">
												<p><strong><?php the_sub_field( 'pr_left_title' ); ?></strong></p>
											</div>
										</div>
										<div class="pr-about__col">
											<div class="text-block">
												<?php the_sub_field( 'pr_right_text' ); ?>
											</div>
										</div>
									</div>
									<?php
								endif;
							endwhile;
						endif;
						?>
					</div>
				</section>

				<section class="pr-directions">
					<div class="container pr-directions__wrapper">
						<div class="pr-directions__photos">
							<div class="pr-directions__photos-image anim-item anim-item--no-hide anim-top">
								<?php
								$pr_features_image = get_field( 'pr_features_image' );
								if ( $pr_features_image ) :
									echo '<img src="' . esc_url( kama_thumb_src( 'src=' . $pr_features_image . '&w=493&h=360' ) ) . '" srcset="' . esc_url( kama_thumb_src( 'src=' . $pr_features_image . '&w=986&h=720' ) ) . ' 2x" alt=""/>';
								endif;
								?>
							</div>
							<div class="pr-directions__photos-image anim-item anim-item--no-hide anim-top">
								<?php
								$pr_features_image_2 = get_field( 'pr_features_image_2' );
								if ( $pr_features_image_2 ) :
									echo '<img src="' . esc_url( kama_thumb_src( 'src=' . $pr_features_image_2 . '&w=386&h=470' ) ) . '" srcset="' . esc_url( kama_thumb_src( 'src=' . $pr_features_image_2 . '&w=772&h=940' ) ) . ' 2x" alt=""/>';
								endif;

								unset( $pr_features_image, $pr_features_image_2 );
								?>
							</div>
						</div>

						<h2 class="pr-directions__title"><?php the_field( 'pr_directions_title' ); ?></h2>
						<h3 class="pr-directions__subtitle"><?php the_field( 'pr_directions_caption' ); ?></h3>
						<?php if ( have_rows( 'pr_directions' ) ) { ?>
							<ul class="pr-directions__list">
								<?php
								while ( have_rows( 'pr_directions' ) ) :
									the_row();
									?>
									<li class="pr-directions__item anim-item anim-item--no-hide anim-top">
										<div class="pr-directions__item-title"><?php the_sub_field( 'pr_direction_title' ); ?></div>
										<div class="text-block"><?php the_sub_field( 'pr_direction_text' ); ?></div>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php } ?>
					</div>
				</section>

				<section class="pr-portfolio pr-example">
					<div class="container">
						<h2 class="pr-portfolio__title pr-example__title">
							<?php the_field( 'pr_portoflio_title' ); ?>
						</h2>
					</div>
				</section>

			</div>
		</main>
	<?php
	endwhile;
	get_footer();
