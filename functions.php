<?php
/**
 * Polylog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Polylog
 */

/**
 * -----------------------------------------------------------------------------
 * THEME SETUP
 * -----------------------------------------------------------------------------
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function polylog_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on polylog, use a find and replace
		* to change 'polylog' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'polylog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'polylog' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'polylog_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'polylog_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function polylog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'polylog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'polylog' ),
			'before_widget' => '<section class="widget %2$s" id="%1$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'polylog_widgets_init' );

/**
 * -----------------------------------------------------------------------------
 * SCRIPTS AND STYLES
 * -----------------------------------------------------------------------------
 */
function polylog_assets() {
	// Create time based version.
	$ver = filemtime( get_template_directory() . '/style.css' );

	// Remove Gutenberg CSS.
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );

	wp_enqueue_style( 'polylog-main-style', get_template_directory_uri() . '/css/style.css', array(), $ver );
	wp_enqueue_style( 'polylog-style', get_stylesheet_uri(), array(), $ver );

	// Move all plugins scripts to footer.
	remove_action( 'wp_head', 'wp_print_scripts' );
	remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
	remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );

	add_action( 'wp_footer', 'wp_print_scripts', 5 );
	add_action( 'wp_footer', 'wp_enqueue_scripts', 5 );
	add_action( 'wp_footer', 'wp_print_head_scripts', 5 );

	wp_enqueue_script( 'polylog-bundle', get_template_directory_uri() . '/js/bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'polylog-app', get_template_directory_uri() . '/js/app.min.js', array(), '1.0.0', true );

	if ( is_category() ) {
		wp_enqueue_script( 'polylog-load-more', get_template_directory_uri() . '/js/load_more.js', array(), '1.0.0', true );
		wp_localize_script(
			'polylog-load-more',
			'loadmore_ajax',
			array(
				'url'   => admin_url( 'admin-ajax.php' ),
				'nonce' => wp_create_nonce( 'load_more_ajax-nonce' ),
			)
		);
	}

	if ( is_front_page() || is_page_template( 'page-foreign.php' ) ) {
		wp_enqueue_script( 'polylog-parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'polylog-parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '1.0.0', true );
		$parallax = "var scene = document.getElementById( 'scene' );
			var parallax = new Parallax(scene);
			var scene2 = document.getElementById( 'scene2' );
			var parallax = new Parallax(scene2);";
		wp_add_inline_script( 'polylog-parallax', $parallax );
	}

	if ( is_page_template( 'page-cases.php' ) ) {
		wp_enqueue_script( 'polylog-cases', get_template_directory_uri() . '/js/cases.js', array( 'jquery' ), $ver, true );
	}
}

add_action( 'wp_enqueue_scripts', 'polylog_assets' );

/**
 * -----------------------------------------------------------------------------
 * CLEAN HEAD
 * -----------------------------------------------------------------------------
 */
function polylog_cleanup() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_head', 'rel_canonical' );
	remove_action( 'wp_head', 'rel_alternate' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	remove_action( 'wp_head', 'rest_output_link_wp_head' );

	// Remove DNS prefetch — to decide test it with Lighthouse.
	remove_action( 'wp_head', 'wp_resource_hints', 2 );

	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );

	add_filter( 'embed_oembed_discover', '__return_false' );
	add_filter( 'show_admin_bar', '__return_false' );
}

add_action( 'after_setup_theme', 'polylog_cleanup' );

/**
 * -----------------------------------------------------------------------------
 * HELPERS
 * -----------------------------------------------------------------------------
 */

/**
 * Set en excerpt length.
 *
 * @param [type] $length A post content.
 */
function polylog_excerpt_length( $length ) {
	return 24;
}

add_filter( 'excerpt_length', 'polylog_excerpt_length' );

/**
 * Remove square brackets from an excerpt.
 *
 * @param [type] $more A post content.
 */
function polylog_excerpt_more( $more ) {
	return '…';
	// return ' <a class="link is-go" href="' . get_permalink( get_the_ID() ) . '">Read More</a>'; .
}

add_filter( 'excerpt_more', 'polylog_excerpt_more' );

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( 'Контакты' );
}

/**
 * Prints HTML with meta information for the current post-date/time.
 */
function polylog_posted_on() {
	$time_string = '<time class="article__date" datetime="%1$s">%2$s</time>';

	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( DATE_W3C ) ),
		esc_html( get_the_modified_date() )
	);

	echo $time_string; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a figure
 * element when on single views.
 */
function polylog_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
		?>

		<figure class="border">
			<?php the_post_thumbnail(); ?>
		</figure><!-- .post-thumbnail -->

	<?php else : ?>

		<a class="border" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
				the_post_thumbnail(
					'thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
			?>
		</a>

		<?php
	endif;
}

/**
 * Creates continue reading text
 */
function polylog_continue_reading_text() {
	$continue_reading = sprintf(
		/* translators: %s: Name of current post. */
		esc_html__( 'Continue reading %s', 'polylog' ),
		the_title( '<span class="sr-only">', '</span>', false )
	);

	return $continue_reading;
}

/** Load more posts */
function polylog_load_more_posts() {
	if ( ! wp_verify_nonce( isset( $_GET['nonce'] ), 'load_more_ajax-nonce' ) ) {
		die( 'Exit' );
	}

	$cat  = ( isset( $_GET['cat'] ) ) ? (int) $_GET['cat'] : 1;
	$page = ( isset( $_GET['page'] ) ) ? (int) $_GET['page'] + 1 : 2;

	$out = array(
		'posts' => array(),
		'next'  => false,
	);

	$i = 1;

	$posts = new WP_Query(
		array(
			'cat'   => $cat,
			'paged' => $page,
		)
	);

	$pages = (int) $posts->max_num_pages;

	if ( $posts->have_posts() ) {
		while ( $posts->have_posts() ) {
			$posts->the_post();
			$item = '<li class="card-block__item anim-item anim-item--no-hide anim-top active"><a class="card-block__link" href="' . get_the_permalink() . '">';

			$thumb = wp_get_attachment_url( get_post_thumbnail_id() );
			if ( $thumb ) {
				if ( $i < 3 ) :
					$item .= '<img class="card-block__image" src="' . kama_thumb_src( 'src=' . $thumb . '&w=387' ) . '" width="" height="" srcset="' . kama_thumb_src( 'src=' . $thumb . '&w=774' ) . ' 2x, ' . kama_thumb_src( 'src=' . $thumb . '&w=1161' ) . ' 3x" alt=""/>';
				elseif ( $i > 2 && $i < 5 ) :
					$item .= '<img class="card-block__image" src="' . kama_thumb_src( 'src=' . $thumb . '&w=493' ) . '" width="" height="" srcset="' . kama_thumb_src( 'src=' . $thumb . '&w=986' ) . ' 2x, ' . kama_thumb_src( 'src=' . $thumb . '&w=1479' ) . ' 3x" alt=""/>';
				else :
					$item .= '<img class="card-block__image" src="' . kama_thumb_src( 'src=' . $thumb . '&w=280' ) . '" width="" height="" srcset="' . kama_thumb_src( 'src=' . $thumb . '&w=560' ) . ' 2x, ' . kama_thumb_src( 'src=' . $thumb . '&w=840' ) . ' 3x" alt=""/>';
					the_post_thumbnail( 'thumbnail', array( 'alt' => the_title_attribute() ) );
				endif;
			}
			$item .= '<div class="card-block__caption">' . get_the_title() . '</div></a></li>';
			$i++;
			$out['posts'][] = $item;
		}
		if ( $pages > 1 && $pages !== $page ) {
			$out['next'] = true;
		}
	}
	wp_reset_postdata();
	wp_send_json( $out, 200 );
}

if ( wp_doing_ajax() ) {
	add_action( 'wp_ajax_load_more', 'polylog_load_more_posts' );
	add_action( 'wp_ajax_nopriv_load_more', 'polylog_load_more_posts' );
}

/**
 * Russian date format
 *
 * @param string $the_date Current date in standard format.
 */
function polylog_russian_date( $the_date = '' ) {
	if ( substr_count( $the_date, '---' ) > 0 ) {
		return str_replace( '---', '', $the_date );
	}

	$replacements = array(
		'Январь'   => 'января',
		'Февраль'  => 'февраля',
		'Март'     => 'марта',
		'Апрель'   => 'апреля',
		'Май'      => 'мая',
		'Июнь'     => 'июня',
		'Июль'     => 'июля',
		'Август'   => 'августа',
		'Сентябрь' => 'сентября',
		'Октябрь'  => 'октября',
		'Ноябрь'   => 'ноября',
		'Декабрь'  => 'декабря',
	);
	return strtr( $the_date, $replacements );
}

/**
 * Prevent WP from adding <p> and <br> tags on pages
 * Add keep the automatically added tags in the blog posts.
 *
 * @param [object] $content body copy.
 */
function polylog_project_disable_autop( $content ) {
	if ( is_singular( 'page' ) ) {
		remove_filter( 'the_content', 'wpautop' );
		remove_filter( 'the_excerpt', 'wpautop' );
	}
	return $content;
}

/**
 * REMOVE ADMIN TOOLBARS ITEMS
 * To find out the names of the menu items, look at their HTML id with. Then
 * remove wp-admin-bar- from the beginning to get the right id.
 * ☝️🧐 For some reason assetcleanup-parent and updraft_admin_node are not removed.
 *
 * @param [object] $wp_adminbar top bar object.
 */
function polylog_remove_toolbar_items( $wp_adminbar ) {
	$wp_adminbar->remove_node( 'languages' );
	$wp_adminbar->remove_node( 'wpseo-menu' );
	$wp_adminbar->remove_node( 'autoptimize' );
	$wp_adminbar->remove_node( 'ct_parent_node' );
	$wp_adminbar->remove_node( 'updraft_admin_node' );
}

add_filter( 'the_time', 'polylog_russian_date' );
add_filter( 'get_the_time', 'polylog_russian_date' );
add_filter( 'the_date', 'polylog_russian_date' );
add_filter( 'get_the_date', 'polylog_russian_date' );
add_filter( 'the_modified_time', 'polylog_russian_date' );
add_filter( 'get_the_modified_date', 'polylog_russian_date' );
add_filter( 'get_post_time', 'polylog_russian_date' );
add_filter( 'get_comment_date', 'polylog_russian_date' );
add_filter( 'the_content', 'polylog_project_disable_autop', 0 );
add_action( 'admin_bar_menu', 'polylog_remove_toolbar_items', 999 );

/**
 * REMOVE SCRIPT AND STYLE TYPE ATTRIBUTE
 *
 * @param array|string $tag script or style tag.
 * @return [object] tag w/o type attribute.
 */
function my_project_remove_type_attr( $tag ) {
	return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

add_filter( 'style_loader_tag', 'my_project_remove_type_attr', 10, 2 );
add_filter( 'script_loader_tag', 'my_project_remove_type_attr', 10, 2 );
add_filter( 'autoptimize_html_after_minify', 'my_project_remove_type_attr', 10, 2 );

/**
 * -----------------------------------------------------------------------------
 * MENUS
 * -----------------------------------------------------------------------------
 * TODO: заменить классы в header и footer.php, удалить здесь и добавить CSS-
 * классы через админку
 */

/**
 * HTML list of main nav menu items.
 */
class Main_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
	 * What the class handles.
	 *
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int    $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu.
	 * @param string $id Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		global $wp_query;
		$item_class = 'header__menu-item';

		if ( in_array( 'header__menu-link--services', $item->classes, true ) ) {
			$item_class .= ' header__menu-link--services';
		}
		if ( in_array( 'header__menu-link--cases', $item->classes, true ) ) {
			$item_class .= ' header__menu-link--cases';
		}
		if ( in_array( 'header__menu-link--carrer', $item->classes, true ) ) {
			$item_class .= ' header__menu-link--carrer';
		}

		$indent     = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$output    .= $indent . '<li class="' . $item_class . '">';
		$link_class = ( $item->current || $item->current_item_parent ) ? 'header__menu-link current' : 'header__menu-link';

		// атрибуты элемента, title="", rel="", target="" и href="".
		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ' class="' . $link_class . '"';

		// Ссылка и околоссылочный текст.
		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * HTML list of portfolio menu items.
 */
class Portfolio_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
	 * What the class handles.
	 *
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int    $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu.
	 * @param string $id Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		global $wp_query;

		$indent  = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$output .= $indent . '<li class="portfolio-main__item">';

		// атрибуты элемента, title="", rel="", target="" и href="".
		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ' class="portfolio-main__link"';

		// ссылка и околоссылочный текст.
		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * HTML list of services menu items.
 */
class Services_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
	 * What the class handles.
	 *
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int    $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu.
	 * @param string $id Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		global $wp_query;
		$item_class = 'services-popup__item';
		$indent     = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$output    .= $indent . '<li class="' . $item_class . '">';
		$link_class = ( $item->current ) ? 'services-popup__link current' : 'services-popup__link';

		// атрибуты элемента, title="", rel="", target="" и href="".
		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ' class="' . $link_class . '"';

		// ссылка и околоссылочный текст.
		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * HTML list of languages menu items.
 */
class Languages_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
	 * What the class handles.
	 *
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int    $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu.
	 * @param string $id Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		global $wp_query;
		$item_class = 'main-screen__languages-item';
		$indent     = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$output    .= $indent . '<li class="' . $item_class . '">';
		$link_class = ( $item->current ) ? 'main-screen__languages-link current' : 'main-screen__languages-link';

		// атрибуты элемента, title="", rel="", target="" и href="".
		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$attributes .= ' class="' . $link_class . '"';

		// ссылка и околоссылочный текст.
		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

