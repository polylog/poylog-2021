<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package polylog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<link rel="preload" href="/wp-content/themes/polylogGilroy-ExtraBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/polylogGilroy-ExtraBold.woff" as="font" type="font/woff" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/polylogGilroy-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/polylogGilroy-Light.woff" as="font" type="font/woff" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/polylogHelveticaNeueCyr-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/polylogHelveticaNeueCyr-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/polylogHelveticaNeueCyr-Roman.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/polylogHelveticaNeueCyr-Roman.woff" as="font" type="font/woff" crossorigin="anonymous">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P4R6SM7');</script>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager + -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4R6SM7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<?php wp_body_open(); ?>
	<a id="top"></a>

	<header class="header">
		<?php if ( ! is_page_template( 'page-foreign.php' ) ) : /* Domestic or Foreign header  */ ?>
			<div class="container header__wrapper">
				<!-- <a class="header__logo" href="/">
					<img src="/wp-content/themes/polylog/img/components/logo/polylog-logo.svg" width="143" height="40" alt="Логотип Polylog">
				</a> -->
				<a class="header__logo" href="/">
				<img src="/wp-content/themes/polylog/img/components/logo/polylog-logo.svg" width="143" height="40" alt="Логотип Polylog">
				</a>
				<div class="header__nav">
					<button class="header__toggle" type="button"><span></span></button>
					<div class="header__menu">
						<div class="header__menu-top">
							<button class="header__menu-close" type="button"></button>
						</div>

						<button class="btn is-search-toggler" id="global-search-toggler" type="button" aria-hidden="true">
							<svg class="icon" width="24" height="24" viewbox="0 0 24 24" focusable="false" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="var(--icon-stroke)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>

						<?php get_search_form(); ?>

						<?php
							wp_nav_menu(
								array(
									'menu'       => 2,
									'menu_id'    => '',
									'menu_class' => 'header__menu-list',
									'container'  => false,
									'walker'     => new Main_Walker_Nav_Menu(),
								)
							);
						?>
					</div>
				</div>
			</div>

		<?php else : /* case 2: Domestic or Foreign header  */ ?>
		<div class="container header__wrapper header__wrapper--foreign">
			<a class="header__logo" href="/">
				<?php
				$logo = get_field( 'logo', 'options' );
				if ( $logo ) :
					echo '<img src="' . esc_url( $logo ) . '" width="140" height="40" alt="Логотип Polylog">';
				endif;
				unset( $logo );
				?>
			</a>

			<?php
			// Awards.
			$head_awards = get_field( 'head_awards' );
			if ( $head_awards ) :
				?>
			<ul class="header__awards">
				<?php
				foreach ( $head_awards as $head_award ) :
					echo '<li class="header__awards-item"><img src="' . esc_url( $head_award ) . '" alt=""/></li>';
				endforeach;
				unset( $head_awards, $head_award );
				?>
			</ul>
			<?php endif; /* end: Awards */ ?>

		</div>
		<?php endif; /* end: Domestic or Foreign header  */ ?>
	</header>
