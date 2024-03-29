<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package polylog
 */

?>
		<?php if ( ! is_page_template( 'page-foreign.php' ) ) : ?>
			<a id="footer"></a>

			<footer class="footer">
				<div class="footer-contacts">

					<div class="footer-contacts__top">
						<div class="footer-contacts__map">
							<iframe src="https://snazzymaps.com/embed/266970" title="Карта: Москва, Центр международной торговли, PR-агентство «Полилог»"></iframe>
						</div>

						<button class="btn is-lg footer-request footer-request--mob form-request__open" type="button">
							<span>Заявка</span>
							<svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/>
							</svg>
						</button>

						<div class="footer-contacts__title">Контакты</div>
					</div>

					<div class="container footer-contacts__main">
						<div class="footer-contacts__social">
							<ul class="social">

								<li class="social__item">
									<a class="social__link" href="https://t.me/polylogteam" data-tooltip="Команда «Полилога»" target="_blank" rel="noopener noreferrer">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23 14.75L16.3333 21.25L26.3333 31L33 5L3 16.375L9.66667 19.625L13 29.375L18 22.875" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
									</a>
								</li>

								<li class="social__item">
									<a class="social__link" href="https://t.me/polylog_expertise" data-tooltip="Экспертиза «Полилога»" target="_blank" rel="noopener noreferrer">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23 14.75L16.3333 21.25L26.3333 31L33 5L3 16.375L9.66667 19.625L13 29.375L18 22.875" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
									</a>
								</li>

								<li class="social__item">
									<a class="social__link" href="https://vk.com/polylog_team" target="_blank" rel="noopener noreferrer">
										<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.3529 8H18.8824V29C10.9412 27.25 4.76471 17.625 3 8M33 8C31.2353 11.5 27.7059 16.75 24.1765 18.5M24.1765 18.5H18.8824M24.1765 18.5C27.7059 20.25 31.2353 25.5 33 29" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
									</a>
								</li>

								<?php /*
									<li class="social__item">
										<a class="social__link" href="https://www.instagram.com/polylogteam/" target="_blank">
											<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M2 11.2874C2 6.15731 6.15707 2 11.2862 2H24.7126C29.8427 2 34 6.15707 34 11.2862V24.7126C34 29.8427 29.8429 34 24.7138 34H11.2874C6.15731 34 2 29.8429 2 24.7138V11.2874ZM11.2862 4.46154C7.51678 4.46154 4.46154 7.51654 4.46154 11.2874V24.7138C4.46154 28.4832 7.51654 31.5385 11.2874 31.5385H24.7138C28.4832 31.5385 31.5385 28.4835 31.5385 24.7126V11.2862C31.5385 7.51678 28.4835 4.46154 24.7126 4.46154H11.2862Z" fill="white"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M18 11.8462C14.6013 11.8462 11.8462 14.6013 11.8462 18C11.8462 21.3987 14.6013 24.1538 18 24.1538C21.3987 24.1538 24.1538 21.3987 24.1538 18C24.1538 14.6013 21.3987 11.8462 18 11.8462ZM9.38462 18C9.38462 13.2419 13.2419 9.38462 18 9.38462C22.7581 9.38462 26.6154 13.2419 26.6154 18C26.6154 22.7581 22.7581 26.6154 18 26.6154C13.2419 26.6154 9.38462 22.7581 9.38462 18Z" fill="white"/>
												<path d="M27.2308 10.6154C28.2504 10.6154 29.0769 9.78886 29.0769 8.76926C29.0769 7.74965 28.2504 6.9231 27.2308 6.9231C26.2112 6.9231 25.3846 7.74965 25.3846 8.76926C25.3846 9.78886 26.2112 10.6154 27.2308 10.6154Z" fill="white"/>
											</svg>
										</a>
									</li>

									<li class="social__item">
										<a class="social__link" href="https://www.facebook.com/polylog/" target="_blank">
											<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M27 11.1257H22.0234C22.0028 11.1257 21.983 11.1259 21.9639 11.1262C21.9634 11.1542 21.9631 11.1837 21.963 11.2147C21.963 11.215 21.963 11.2145 21.963 11.2147V12.2869H26.8805L25.6588 21.7337H21.9642V34H12.1393V21.7326H8V12.2857H12.1393V10.7303C12.1393 8.19054 12.9301 5.95239 14.5731 4.34161C16.2173 2.72967 18.4567 2 20.8348 2C22.7251 2 24.3781 2.13892 24.9487 2.21447L27 2.48608V11.1257ZM19.588 14.5726V11.2137C19.5892 9.80457 19.9835 8.84 22.0234 8.84H24.625V4.47886C24.1762 4.41943 22.6325 4.28571 20.8348 4.28571C17.0838 4.28571 14.5143 6.55657 14.5143 10.7303V14.5714H10.375V19.4469H14.5143V31.7143H19.5892V19.448H23.5611L24.1916 14.5726H19.588Z" fill="white"/>
											</svg>
										</a>
									</li>
								*/ ?>
							</ul>
						</div>

						<div class="footer-contacts__main-content">
							<div class="footer-contacts__info">
								<div class="footer-contacts__address">
									<?php
									$address = get_field( 'address', 'options' );
									if ( $address ) :
										?>

										<address>
										123610, Москва<br>
										Краснопресненская наб. 12 (ЦМТ)<br>
										подъезд 3, этаж 11, офис 1108
										</address>

										<?php
									endif;

									$times = get_field( 'times', 'options' );
									if ( $times ) :
										echo '<p>' . esc_html( $times ) . '</p>';
									endif;
									?>
								</div>
								<?php
								$phone = get_field( 'phone', 'options' );
								if ( $phone ) :
									echo '<a class="footer-contacts__tel" href="tel:' . esc_url( preg_replace( '/[^0-9\+]/', '', $phone ) ) . '">' . esc_html( $phone ) . '</a>';
								endif;
								unset( $address, $times, $phone );
								?>
							</div>

							<ul class="footer-contacts__links">
								<?php
								if ( have_rows( 'footer_links', 'options' ) ) :
									while ( have_rows( 'footer_links', 'options' ) ) :
										the_row();
										echo '<li class="footer-contacts__links-item"><a href="' . esc_url( get_sub_field( 'footer_link' ) ) . '">' . esc_html( get_sub_field( 'footer_anchor' ) ) . '</a></li>';
									endwhile;
								endif;
								?>
							</ul>
						</div>

					</div>
				</div>

				<div class="container footer-additional">
					<div class="footer-additional__copyright"><?php the_field( 'copyright', 'options' ); ?></div><a class="footer-additional__privacy" href="<?php echo esc_url( get_permalink( 3 ) ); ?>">Политика конфиденциальности</a>
				</div>

				<button class="btn is-lg footer-request footer-request--des form-request__open" type="button">
					<span>Заявка</span>
					<svg width="38" height="27" viewBox="0 0 38 27" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/>
					</svg>
				</button>
			</footer>

			<div class="services-popup">
				<div class="services-popup__top">
					<button class="services-popup__close" type="button"></button>
				</div>

				<div class="services-popup__content">
					<?php
					wp_nav_menu(
						array(
							'menu'       => 3,
							'menu_id'    => '',
							'menu_class' => 'services-popup__list',
							'container'  => false,
							'walker'     => new Services_Walker_Nav_Menu(),
						)
					);
					?>
				</div>
			</div>

			<div class="career-popup">
				<div class="services-popup__top">
					<button class="services-popup__close" type="button"></button>
				</div>
				<div class="services-popup__content">
					<?php
					wp_nav_menu(
						array(
							'menu'       => 13,
							'menu_id'    => '',
							'menu_class' => 'services-popup__list',
							'container'  => false,
						)
					);
					?>
				</div>
			</div>

			<div class="portfolio-popup">
				<div class="portfolio-popup__top">
					<button class="portfolio-popup__close" type="button"></button>
				</div>
				<div class="portfolio-popup__content">
					<div class="container">
						<?php
						wp_nav_menu(
							array(
								'menu'        => 4,
								'menu_id'     => '',
								'menu_class'  => 'portfolio-main__list',
								'container'   => false,
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'items_wrap'  => '<ol id = "%1$s" class = "%2$s">%3$s</ol>',
								'walker'      => new Portfolio_Walker_Nav_Menu(),
							)
						);
						?>
					</div>
				</div>
			</div>

			<div class="form__popup form__popup--request">
				<button class="form__close"><span></span></button>
				<div class="form__content">
					<div class="form__content-wrapper">
						<div class="form__title">Заявка</div>
							<?php echo do_shortcode( '[contact-form-7 id="5" title="Обратная связь" html_class="form"]' ); ?>
							<div class="form__success">Успешно отправлена!</div>
					</div>
				</div>
			</div>

		<?php else : ?>
			<footer class="footer">
				<div class="footer-contacts">
					<div class="footer-contacts__top">
						<div class="footer-contacts__map">
							<?php the_field( 'map', 'options' ); ?>
						</div>
						<button class="btn is-lg footer-request footer-request--mob form-request__open" type="button">
							<span><?php the_field( 'footer_button' ); ?></span>
							<svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/></svg>
						</button>
						<div class="footer-contacts__title">
							<?php the_field( 'footer_title' ); ?>
						</div>
					</div>
					<div class="container footer-contacts__main">

						<div class="footer-contacts__social">
							<ul class="social">
								<?php
								$instagram = get_field( 'instagram', 'options' );
								if ( $instagram ) :
									?>
									<li class="social__item">
										<a class="social__link" href="<?php echo esc_url( $instagram ); ?>" target="_blank">
											<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M2 11.2874C2 6.15731 6.15707 2 11.2862 2H24.7126C29.8427 2 34 6.15707 34 11.2862V24.7126C34 29.8427 29.8429 34 24.7138 34H11.2874C6.15731 34 2 29.8429 2 24.7138V11.2874ZM11.2862 4.46154C7.51678 4.46154 4.46154 7.51654 4.46154 11.2874V24.7138C4.46154 28.4832 7.51654 31.5385 11.2874 31.5385H24.7138C28.4832 31.5385 31.5385 28.4835 31.5385 24.7126V11.2862C31.5385 7.51678 28.4835 4.46154 24.7126 4.46154H11.2862Z" fill="white"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M18 11.8462C14.6013 11.8462 11.8462 14.6013 11.8462 18C11.8462 21.3987 14.6013 24.1538 18 24.1538C21.3987 24.1538 24.1538 21.3987 24.1538 18C24.1538 14.6013 21.3987 11.8462 18 11.8462ZM9.38462 18C9.38462 13.2419 13.2419 9.38462 18 9.38462C22.7581 9.38462 26.6154 13.2419 26.6154 18C26.6154 22.7581 22.7581 26.6154 18 26.6154C13.2419 26.6154 9.38462 22.7581 9.38462 18Z" fill="white"/>
												<path d="M27.2308 10.6154C28.2504 10.6154 29.0769 9.78886 29.0769 8.76926C29.0769 7.74965 28.2504 6.9231 27.2308 6.9231C26.2112 6.9231 25.3846 7.74965 25.3846 8.76926C25.3846 9.78886 26.2112 10.6154 27.2308 10.6154Z" fill="white"/>
											</svg>
										</a>
									</li>
								<?php endif; ?>

								<?php
								$facebook = get_field( 'facebook', 'options' );
								if ( $facebook ) :
									?>
									<li class="social__item">
										<a class="social__link" href="<?php echo esc_url( $facebook ); ?>" target="_blank">
											<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M27 11.1257H22.0234C22.0028 11.1257 21.983 11.1259 21.9639 11.1262C21.9634 11.1542 21.9631 11.1837 21.963 11.2147C21.963 11.215 21.963 11.2145 21.963 11.2147V12.2869H26.8805L25.6588 21.7337H21.9642V34H12.1393V21.7326H8V12.2857H12.1393V10.7303C12.1393 8.19054 12.9301 5.95239 14.5731 4.34161C16.2173 2.72967 18.4567 2 20.8348 2C22.7251 2 24.3781 2.13892 24.9487 2.21447L27 2.48608V11.1257ZM19.588 14.5726V11.2137C19.5892 9.80457 19.9835 8.84 22.0234 8.84H24.625V4.47886C24.1762 4.41943 22.6325 4.28571 20.8348 4.28571C17.0838 4.28571 14.5143 6.55657 14.5143 10.7303V14.5714H10.375V19.4469H14.5143V31.7143H19.5892V19.448H23.5611L24.1916 14.5726H19.588Z" fill="white"/>
											</svg>
										</a>
									</li>
								<?php endif; ?>

								<?php
								$youtube = get_field( 'youtube', 'options' );
								if ( $youtube ) :
									?>
									<li class="social__item">
										<a class="social__link" href="<?php echo esc_url( $youtube ); ?>" target="_blank">
											<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M31.6196 10.1545L31.6177 10.1471C31.3955 9.27327 30.7588 8.64134 30.0332 8.4346L30.026 8.43255C29.5971 8.30838 28.6728 8.1811 27.3677 8.07807C26.1157 7.97923 24.6596 7.91236 23.2638 7.86747C21.8711 7.82267 20.5536 7.80022 19.5833 7.78898C19.0985 7.78337 18.7014 7.78057 18.4259 7.77917C18.2882 7.77847 18.181 7.77812 18.1085 7.77795L17.8906 7.77794C17.8181 7.77811 17.7108 7.77845 17.5731 7.77912C17.2975 7.78047 16.9002 7.78316 16.4153 7.78856C15.4447 7.79938 14.1268 7.82099 12.7335 7.8641C11.3372 7.90731 9.8801 7.97168 8.62667 8.06688C7.33125 8.16528 6.40498 8.287 5.96578 8.40736C5.26927 8.61345 4.60659 9.26982 4.38299 10.1431C4.10121 11.2792 3.9406 13.152 3.85808 14.8597C3.81795 15.69 3.79783 16.4412 3.78777 16.985C3.78275 17.2565 3.78025 17.4753 3.779 17.6253C3.77838 17.7003 3.77808 17.7581 3.77792 17.7965L3.77779 17.8394L3.77778 17.8517L3.77779 17.8644L3.77793 17.9075C3.77808 17.9462 3.77838 18.0042 3.779 18.0796C3.78025 18.2303 3.78275 18.4502 3.78777 18.7228C3.79784 19.2687 3.81796 20.0226 3.85809 20.8546C3.94074 22.5685 4.10159 24.4393 4.38243 25.5585C4.60554 26.4315 5.24171 27.0624 5.96657 27.2689L5.96923 27.2696C6.40754 27.3952 7.33822 27.5226 8.64312 27.6255C9.89645 27.7244 11.3517 27.7913 12.7459 27.8362C14.1369 27.881 15.452 27.9035 16.4202 27.9147C16.9039 27.9203 17.3001 27.9231 17.5749 27.9245C17.7122 27.9252 17.8192 27.9256 17.8915 27.9258L18.0269 27.9259L18.109 27.9258C18.1816 27.9256 18.2889 27.9253 18.4266 27.9246C18.7022 27.9232 19.0995 27.9205 19.5844 27.9151C20.5549 27.9043 21.8729 27.8827 23.2662 27.8396C24.6624 27.7964 26.1196 27.732 27.373 27.6368C28.6728 27.5381 29.601 27.4159 30.0384 27.2951C30.7605 27.0875 31.394 26.4584 31.6171 25.5885C31.8988 24.4521 32.0593 22.5794 32.1418 20.8719C32.1819 20.0416 32.202 19.2904 32.2121 18.7466C32.2171 18.4751 32.2196 18.2563 32.2209 18.1063C32.2215 18.0313 32.2218 17.9735 32.2219 17.9351L32.2221 17.8922L32.2221 17.8821V17.8713L32.2222 17.8589L32.2222 17.816C32.2222 17.7775 32.2222 17.7196 32.2219 17.6444C32.2213 17.4939 32.2197 17.2742 32.2157 17.0018C32.2076 16.4561 32.19 15.7024 32.1515 14.8699C32.0721 13.1522 31.9107 11.2793 31.6196 10.1545ZM33.9999 17.8797C33.9999 17.8797 33.9999 23.3733 33.3411 26.0225C32.9719 27.4727 31.8913 28.616 30.5204 29.0063C28.0163 29.7037 18 29.7037 18 29.7037C18 29.7037 8.00978 29.7037 5.4795 28.9786C4.1086 28.5881 3.02813 27.4448 2.65899 25.9946C2 23.3733 2 17.8519 2 17.8519C2 17.8519 2 12.3581 2.65899 9.70906C3.02774 8.25891 4.13497 7.08751 5.4793 6.69739C7.98341 6 17.9996 6 17.9996 6C17.9996 6 28.0163 6 30.5204 6.72487C31.8911 7.11541 32.9719 8.25871 33.3407 9.70906C34.0262 12.3581 33.9999 17.8797 33.9999 17.8797ZM13.0328 20.8171V14.8866C13.0328 12.5744 15.563 11.1532 17.5375 12.3563L22.4039 15.3216C24.2989 16.4763 24.2989 19.2274 22.4039 20.3821L17.5375 23.3474C15.563 24.5505 13.0328 23.1293 13.0328 20.8171ZM14.8106 20.8171C14.8106 21.742 15.8227 22.3105 16.6125 21.8292L21.4789 18.8639C22.2369 18.4021 22.2369 17.3016 21.4789 16.8398L16.6125 13.8745C15.8227 13.3932 14.8106 13.9617 14.8106 14.8866V20.8171Z" fill="white"/>
											</svg>
										</a>
									</li>
								<?php endif; ?>

								<?php unset( $instagram, $facebook, $youtube ); ?>
							</ul>
						</div>

						<div class="footer-contacts__main-content">
							<div class="footer-contacts__info">
								<div class="footer-contacts__address">
									<?php
									$footer_adr = get_field( 'footer_adr' );
									if ( $footer_adr ) :
										echo '<p>' . esc_html( $footer_adr ) . '</p>';
									endif;

									$footer_times = get_field( 'footer_times' );
									if ( $footer_times ) :
										echo '<p>' . esc_html( $footer_times ) . '</p>';
									endif;
									?>
								</div>

								<?php
								$phone = get_field( 'phone', 'options' );
								if ( $phone ) :
									echo '<a class="footer-contacts__tel" href="tel:' . esc_url( preg_replace( '/[^0-9\+]/', '', $phone ) ) . '">' . esc_html( $phone ) . '</a>';
								endif;
								unset( $footer_adr, $footer_times, $phone );
								?>
							</div>

							<?php
							$footer_file_name = get_field( 'footer_file_name' );
							$footer_file      = get_field( 'footer_file' );
							if ( $footer_file && $footer_file_name ) :
								echo '<ul class="footer-contacts__links"><li class="footer-contacts__links-item"><a href="' . esc_url( $footer_file ) . '" download><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.2 30.8H26.2667V9.72548L21.7412 5.2H9.2V30.8ZM23.0667 2H6V34H29.4667V8.4L23.0667 2Z" fill="white"/></svg><span>' . esc_html( $footer_file_name ) . '</span></a></li></ul>';
							endif;
							?>
						</div>
					</div>
				</div>

				<div class="container footer-additional">
					<div class="footer-additional__copyright">
						<?php the_field( 'footer_copyright' ); ?>
					</div>

					<?php
					$footer_policy      = get_field( 'footer_policy' );
					$footer_policy_name = get_field( 'footer_policy_name' );
					if ( $footer_policy && $footer_policy_name ) :
						echo '<a class="footer-additional__privacy" href="' . esc_url( $footer_policy ) . '">' . esc_html( $footer_policy_name ) . '</a>';
					endif;
					unset( $footer_policy, $footer_policy_name );
					?>
				</div>
				<button class="btn is-lg footer-request footer-request--des form-request__open" type="button">
					<span><?php the_field( 'footer_button' ); ?></span>
					<svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/></svg>
				</button>
			</footer>

			<div class="form__popup form__popup--request">
				<button class="form__close"><span></span></button>
				<div class="form__content">
					<div class="form__content-wrapper">
						<div class="form__title">Request</div>
							<?php echo do_shortcode( '[contact-form-7 id="449" title="Обратная связь (en)" html_class="form"]' ); ?>
							<div class="form__success">Successfully sent!</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<a class="to-top" href="#top"><svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/></svg></a>

		<?php wp_footer(); ?>

		<script>
			document.addEventListener( 'wpcf7mailsent', function( event ) {
				jQuery( '.form__popup--request .wpcf7' ).hide( );
				jQuery( '.form__success' ).show( );
			}, false );
		</script>

		<?php
		$is_in = is_object_in_term( $post->ID, 'my_taxonomy', 'case' );
		if ( $is_in ) :
			?>
			<?php if ( is_page( array( 309, 215, 604 ) ) ) : ?>
				<script>
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--services a' ).classList.add( 'current' );
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.remove( 'current' );
				</script>
			<?php elseif ( is_page_template( 'page-pr.php' ) ) : ?>
				<script>
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--services a' ).classList.add( 'current' );
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.remove( 'current' );
				</script>
			<?php else : ?>
				<script>
					if ( document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ) ){
						document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.add( 'current' );
					}
				</script>
			<?php endif; ?>
		<?php endif; ?>

		<?php
		foreach ( get_the_category() as $category ) :
			// echo $category->name; .
			if ( 'Блог' === $category->name ) :
				?>
				<script>
					if ( document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ) ){
						document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.remove( 'current' );
					}
					// document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.add( 'current' );
				</script>
			<?php endif; ?>
		<?php endforeach; ?>

		<?php if ( is_page( array( 146, 143 ) ) ) : ?>
			<script>
				if ( document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ) ){
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.remove( 'current' );
				}
			</script>
		<?php endif; ?>

		<?php if ( is_page( array( 984, 986 ) ) ) : ?>
			<script>
				if ( document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ) ){
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.remove( 'current' );
				}
				document.querySelector( '#menu-glavnoe-menyu .header__menu-link--carrer a' ).classList.add( 'current' );
			</script>
		<?php endif; ?>

		<?php if ( is_page( array( 'sample-page', 309, 215, 604 ) ) ) : ?>
			<script>
				document.querySelector( '#menu-glavnoe-menyu .header__menu-link--services a' ).classList.add( 'current' );
				if ( document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ) ){
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.remove( 'current' );
				}
			</script>
		<?php endif; ?>

		<?php if ( is_page_template( 'single-case.php' ) ) : ?>
			<script>
				document.querySelector( '#menu-glavnoe-menyu .header__menu-link--services a' ).classList.remove( 'current' );
				if ( document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ) ){
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.add( 'current' );
				}
			</script>
		<?php endif; ?>

		<?php if ( is_page_template( 'page-pr.php' ) ) : ?>
			<script>
				document.querySelector( '#menu-glavnoe-menyu .header__menu-link--services a' ).classList.add( 'current' );
				if ( document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ) ){
					document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.remove( 'current' );
				}
			</script>
		<?php endif; ?>

		<?php if ( is_front_page() ) : ?>
			<script>
				document.querySelector( '#menu-glavnoe-menyu .header__menu-link--carrer a' ).classList.remove( 'current' );
				document.querySelector( '#menu-glavnoe-menyu .header__menu-link--services a' ).classList.remove( 'current' );
				document.querySelector( '#menu-glavnoe-menyu .header__menu-link--cases a' ).classList.remove( 'current' );
				document.querySelector( '#menu-glavnoe-menyu .header__menu-link--carrer a' ).classList.remove( 'current' );
			</script>
		<?php endif; ?>

		<script>
			if( window.innerWidth >= 600 ){
				jQuery(function($){
					var max_col_height = 0;
					jQuery( '.pr-directions__list .pr-directions__item-icon' ).each(function(){
						if (jQuery(this).height() > max_col_height) {
							max_col_height = jQuery(this).height( );
						}
					} );
					jQuery( '.pr-directions__list .pr-directions__item-icon' ).height(max_col_height );
				} );
			}
		</script>
	</body>
</html>
