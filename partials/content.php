<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Polylog
 */

?>

<?php if ( is_singular() ) :  /* Full post */ ?>
	<article class="article">
		<header class="article__header">
			<h1 class="article__title"><?php the_title(); ?></h1>
			<div class="article__cover">
				<?php polylog_post_thumbnail(); ?>
				<div class="article__date">
					<strong><?php echo get_the_date( 'd' ); ?></strong>
					<span><?php echo get_the_date( 'F Y' ); ?></span>
				</div>
			</div>
		</header>

		<div class="article__body">
			<?php the_content(); ?>
		</div>
	</article>

<?php else : /* Excerpt */ ?>
	<article class="grid-view__item">
		<?php polylog_post_thumbnail(); ?>
		<a class="grid-view__wrapper-link" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
			<div class="grid-view__body">
				<?php the_title( '<h2 class="grid-view__item-title">', '</h2>' ); ?>
				<?php the_excerpt(); ?>
			</div>
		</a>
		<?php if ( 'post' === get_post_type() ) : ?>
			<footer class="grid-view__meta">
				<?php
				polylog_posted_on();
				$id   = get_the_ID();
				$cats = get_the_category( $id );
				?>
				<a class="tag is-bottom" href="<?php echo esc_url( get_category_link( $cats[0]->cat_ID ) ); ?>" rel="tag">
					<?php echo esc_html( $cats[0]->name ); ?>
				</a>
			</footer>
		<?php endif; ?>
	</article>
<?php endif; ?>
