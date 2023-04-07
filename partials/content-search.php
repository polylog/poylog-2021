<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polylog
 */

?>

<article class="snippet" id="post-<?php the_ID(); ?>">
	<a class="snippet__link" href="<?php echo esc_url( get_permalink() ); ?>">
		<div class="snippet__copy">
			<?php the_title( '<h2>', '</h2>' ); ?>
			<?php the_excerpt(); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
				<?php polylog_posted_on(); ?>
			<?php endif; ?>
		</div>
		<?php polylog_post_thumbnail(); ?>
	</a>
</article>
