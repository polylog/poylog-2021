<?php
/**
 * The template for privacy page
 * Template Name: Политика конфиденциальности
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polylog
 */

get_header();
while ( have_posts() ) { the_post();
?>
  <main class="main main-inner main-privacy">
    <div class="privacy">
      <div class="container">
        <h1 class="privacy__title"><?php the_title(); ?></h1>
        <div class="privacy__content">
          <?php if ( have_rows('text_block') ) { 
            while ( have_rows('text_block') ) { the_row(); ?>
              <div class="text-block">
                <?php the_sub_field('text_field'); ?>
              </div>
            <?php }
          } ?>
        </div>
      </div>
    </div>
  </main>
<?php }
get_footer();