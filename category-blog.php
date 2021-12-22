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
<main class="main main-inner main-blog">
	<div class="blog">

		<div class="blog__title">
			<div class="blog__title-row marquee-item" data-marque-speed="50">

				<!-- Ticker (marquee) -->
				<h1 class="blog__title-item marquee-item__child">
					<span><?php echo esc_html( $cat->name ); ?></span>
					<span class="black"><?php echo esc_html( $cat->name ); ?></span>
					<span><?php echo esc_html( $cat->name ); ?></span>
				</h1>

			</div>
		</div>

		<div class="container">
			<div class="card-block">
				<div class="tabs-category">
					<?php
					// Получаем данные текущего термина (рубрики).
					$term = get_queried_object();

					// Получаем значения произвольных полей.
					$blog_directions = get_field( 'blog_directions', $term );
					?>

						<ul class="tabs" id="blog-tabs">
						<?php
						$count_dir = 1;
						foreach ( $blog_directions as $blog_directions_item ) :
							?>
							<li>
								<a href="#tab<?php echo esc_attr( $count_dir ); ?>">
									<?php echo esc_html( $blog_directions_item['blog_directions_title'] ); ?>
								</a>
							</li>
							<?php
							$count_dir++;
						endforeach;
						?>
						</ul>

				</div>

				<div class="tab_container">
				<?php
				$count_case = 1;
				foreach ( $blog_directions as $blog_directions_item ) :
					?>

					<div class="tab_content" id="tab<?php echo esc_attr( $count_case ); ?>">
						<div class="cases-tab">
						<?php
							$cat_item     = $blog_directions_item['blog_directions_id'];
							$current_page = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							$params       = array(
								'posts_per_page' => 16,
								'post_type'      => 'post',
								'cat'            => $cat_item,
								'paged'          => $current_page,
							);

							$wp_query->is_archive = true;
							$wp_query->is_home    = false;

							$query = new WP_Query( $params );

							while ( have_posts() ) :
								$query->the_post();
								?>
								<div class="case-item all-cases__item item elem year<?php the_time( 'Y' ); ?>">
									<div class="case-item__img" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url() ); ?>);">
										<div class="case-item__date">
											<?php the_time( 'Y' ); ?>
										</div>
									</div>
									<h4 class="case-item__title">
										<?php the_title(); ?>
									</h4>
									<a href="<?php the_permalink(); ?>" class="case-item__link"></a>
								</div>
								<?php endwhile; ?>
						</div>
					</div>

					<?php
					$count_case++;
				endforeach;
				?>
				</div>

			</div>

			<?php
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if ( (int) $pages > 1 ) :
				?>
				<div class="blog__more">
					<button class="btn blog__more-btn" data-cat="<?php echo esc_attr( $cat->term_id ); ?>" data-page="1">Показать ещё</button>
				</div>
				<?php
			endif;
			unset( $pages, $cat );
			?>

		</div>
	</div>
</main>

<script>
	jQuery(document).ready(function() {
		jQuery('.tab_content').hide();
		jQuery('.tab_content:first').show();
		jQuery('.tabs li:first').addClass('active');
		jQuery('.tabs li').click(function(event) {
			jQuery('.tabs li').removeClass('active');
			jQuery(this).addClass('active');
			jQuery('.tab_content').hide();

			var selectTab = jQuery(this).find('a').attr("href");

			jQuery(selectTab).fadeIn();
			jQuery('body,html').animate({scrollTop: 0}, 600);
		});

	});
</script>

<?php
get_footer();
