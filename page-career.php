<?php
/**
 * The template for career page
 * Template Name: Карьера
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polylog
 */

get_header();
while ( have_posts() ) {
	the_post();
	?>
	<main class="main main-inner main-career">
			<h1 class="visually-hidden"><?php the_title(); ?></h1>
			<div class="career">
				<div class="additional-menu">
					<div class="container">
						<ul class="additional-menu__list">
							<li class="additional-menu__item"><a class="additional-menu__link" href="#career-vacancy">Вакансии</a></li>
							<li class="additional-menu__item"><a class="additional-menu__link" href="#career-internship">Стажировка</a></li>
						</ul>
					</div>
				</div>
				<section class="career-teaser">
					<h2 class="visually-hidden">О работе в Polylog</h2>
					<div class="container">
						<div class="career-teaser__wrapper">
							<div class="career-teaser__info">
								<div class="career-teaser__text">
										<?php the_field( 'ajob_text' ); ?>
								</div>
								<div class="career-teaser__contacts">
									<p><?php the_field( 'ajob_caption' ); ?></p>
									<p>
										<?php
										$ajob_phone = get_field( 'ajob_phone' );
										if ( $ajob_phone ) {
											$ajob_phone_arr = explode( ',', $ajob_phone );
											foreach ( $ajob_phone_arr as $ajob_phone_item ) {
												echo '<a href="tel:' . preg_replace('/[^0-9\+]/', '', $ajob_phone_item).'">'.$ajob_phone_item.'</a><br>';
											}
										unset($ajob_phone,$ajob_phone_arr,$ajob_phone_item);
									} ?></p>
								</div>
							</div>
							<div class="career-teaser__resume"><?php
							if ( $ajob_photo = get_field('ajob_photo') )
								echo '<img class="career-teaser__image" src="'.kama_thumb_src('src='.$ajob_photo.'&w=596&h=686').'" width="" height="" srcset="'.kama_thumb_src('src='.$ajob_photo.'&w=1192&h=1372').' 2x, '.kama_thumb_src('src='.$ajob_photo.'&w=1788&h=2058').' 3x" alt=""/>';
							?>
								<button class="btn career-teaser__request form-request__open" type="button"><span><?php echo ( $ajob_button = get_field('ajob_button') ) ? : 'Отправить резюме'; ?></span><svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/>
									</svg>
								</button>
							</div>
						</div>
					</div>
					<?php unset( $ajob_photo,$ajob_button ); ?>
				</section><a name="career-vacancy"></a>
				<section class="career-vacancy">
					<h2 class="career-vacancy__title"><span><?php the_field('vacancy_title'); ?></span></h2>
					<?php $vacancies = get_field('vacancy');
					if ( $vacancies ) {
						$vacancies_arr = array_chunk($vacancies, 2);
						foreach ( $vacancies_arr as $vacancy ) { ?>
							<div class="career-vacancy__wrapper">
								<?php if ( isset($vacancy[0]) ) { ?>
								<div class="career-vacancy__col career-vacancy__col--left">
									<div class="career-vacancy__popup">
										<div class="career-vacancy__popup-info">
											<?php if ( $vacancy[0]['vacancy_fcol_text'] ) { ?>
												<div class="career-vacancy__popup-col">
													<div class="text-block">
														<?php if ( $vacancy[0]['vacancy_fcol_title'] )
															echo '<h4>'.$vacancy[0]['vacancy_fcol_title'].'</h4>';
															echo $vacancy[0]['vacancy_fcol_text'];
														?>
													</div>
												</div>
											<?php }
											if ( $vacancy[0]['vacancy_scol_text'] ) { ?>
												<div class="career-vacancy__popup-col">
													<div class="text-block">
														<?php if ( $vacancy[0]['vacancy_scol_title'] )
															echo '<h4>'.$vacancy[0]['vacancy_scol_title'].'</h4>';
															echo $vacancy[0]['vacancy_scol_text'];
														?>
													</div>
												</div>
											<?php } ?>
										</div>
										<button class="career-vacancy__popup-close" type="button"></button>
									</div>
								</div>
								<ul class="career-vacancy__list">
									<li class="career-vacancy__item anim-item anim-item--no-hide anim-top">
										<div class="career-vacancy__item-icon"><?php echo $vacancy[0]['vacancy_icon']; ?></div>
										<div class="career-vacancy__item-title"><?php echo $vacancy[0]['vacancy_name']; ?></div>
									</li>
									<?php if ( isset($vacancy[1]) ) { ?>
										<li class="career-vacancy__item anim-item anim-item--no-hide anim-top">
											<div class="career-vacancy__item-icon"><?php echo $vacancy[1]['vacancy_icon']; ?></div>
											<div class="career-vacancy__item-title"><?php echo $vacancy[1]['vacancy_name']; ?></div>
										</li>
								<?php } ?>
								</ul>
								<div class="career-vacancy__col career-vacancy__col--right">
									<div class="career-vacancy__popup">
										<div class="career-vacancy__popup-info">
											<?php if ( $vacancy[1]['vacancy_fcol_text'] ) { ?>
											<div class="career-vacancy__popup-col">
												<div class="text-block">
													<?php if ( $vacancy[1]['vacancy_fcol_title'] )
														echo '<h4>'.$vacancy[1]['vacancy_fcol_title'].'</h4>';
														echo $vacancy[1]['vacancy_fcol_text'];
													?>
												</div>
											</div>
										<?php }
										if ( $vacancy[1]['vacancy_scol_text'] ) { ?>
											<div class="career-vacancy__popup-col">
												<div class="text-block">
													<?php if ( $vacancy[1]['vacancy_scol_title'] )
														echo '<h4>'.$vacancy[1]['vacancy_scol_title'].'</h4>';
														echo $vacancy[1]['vacancy_scol_text'];
													?>
												</div>
											</div>
										<?php } ?>
										</div>
										<button class="career-vacancy__popup-close" type="button"></button>
									</div>
								</div>
							</div>
						<?php }
					}
					unset($vacancies_arr,$vacancy);
				} ?>
				</section>
				<section class="career-selection">
					<h2 class="visually-hidden">Система отбора кандидатов</h2>
					<div class="container career-selection__wrapper">
						<div class="career-selection__teaser">
							<div class="career-selection__title"><?php the_field('system_text'); ?></div><?php
							if ( $system_image = get_field('system_image') )
								echo '<img class="career-selection__image anim-item anim-item--no-hide anim-opacity" src="'.kama_thumb_src('src='.$system_image.'&w=600&h=400').'" width="" height="" srcset="'.kama_thumb_src('src='.$system_image.'&w=1200&h=800').' 2x, '.kama_thumb_src('src='.$system_image.'&w=1800&h=1200').' 3x" alt=""/>';
							?>
						</div>
						<div class="career-selection__list">
							<ul class="numbered-list">
								<?php if ( $system_step_1 = get_field('system_step_1') )
									echo '<li class="numbered-list__item anim-item anim-item--no-hide anim-right"><p>'.$system_step_1.'</p></li>';
								if ( $system_step_2 = get_field('system_step_2') )
									echo '<li class="numbered-list__item anim-item anim-item--no-hide anim-top"><p>'.$system_step_2.'</p></li>';
								if ( $system_step_3 = get_field('system_step_3') )
									echo '<li class="numbered-list__item anim-item anim-item--no-hide anim-left"><p>'.$system_step_3.'</p></li>';

								unset($system_step_1,$system_step_2,$system_step_3,$system_image);
								?>
							</ul>
						</div>
					</div>
				</section>
				<?php if ( $system_marquee = get_field('system_marquee') ) { ?>
					<div class="marquee">
						<div class="marquee__item">
							<?php $i = 1;
							while ( $i <= 5 ) {
								echo '<span>'.$system_marquee.'</span>';
								$i++;
							} ?></div>
					</div>
			<?php unset($system_marquee,$i);
		} ?>
				<section class="career-invite">
					<div class="container">
						<h2 class="career-invite__title"><?php the_field('internship_invite'); ?></h2>
					</div>
				</section>
				<a name="career-internship"></a>
				<section class="career-internship">
					<div class="career-internship__teaser">
						<div class="container">
							<h2 class="career-internship__title"><?php if ( $internship_title = get_field('internship_title') ) {
				 			$internship_title_arr = preg_split('/<br[^>]*>/i', $internship_title);
								echo '<span>'.join('</span><span>',$internship_title_arr).'</span>';
								unset($internship_title,$internship_title_arr);
							} ?></h2>
							<div class="career-internship__teaser-wrapper">
								<div class="career-internship__teaser-main">
									<?php the_field('internship_text'); ?>
								</div>
								<div class="career-internship__teaser-additional">
									<?php the_field('internship_caption'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="career-internship__info">
						<div class="container career-internship__info-wrapper">
							<div class="career-internship__features">
								<div class="text-block">
									<?php if ( $feature_title = get_field('feature_title') )
										echo '<h3>'.$feature_title.'</h3>';

									the_field('feature_text'); ?>
								</div>
							</div>
							<div class="career-internship__resume"><?php if ( $feature_image = get_field('feature_image') )
								echo '<img class="career-internship__resume-image" src="'.kama_thumb_src('src='.$feature_image.'&w=600&h=750').'" width="" height="" srcset="'.kama_thumb_src('src='.$feature_image.'&w=1200&h=1500').' 2x, '.kama_thumb_src('src='.$feature_image.'&w=1800&h=2250').' 3x" alt=""/>';
								?>
								<button class="btn career-internship__request form-request__open" type="button"><span><?php echo ( $feature_button = get_field('feature_button') ) ? : 'Отправить резюме'; ?></span><svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/></svg></button>
							</div>
						</div>
					</div>
				</section>
				<section>
					<p>Работа в крупной коммуникационной компании единомышленников <a href="https://www.instagram.com/polylogteam/" target="_blank" rel="noopener noreferrer">#polylogteam</a></p> <p>Вас ждут разноплановые задачи, требующие креативного и профессионального подхода, а также возможность реализовать свои концепты.</p> <p>Отсутствие бюрократии и участие в принятии ключевых решений. Возможность быть самозанятым.</p> <p>Возможность карьерного и профессионального роста. Программы внутреннего корпоративного обучения.</p> <p>Для поддержания иммунитета по пятницам организовываем сезонный фреш-бар фрукты/овощи.</p> <p>Сертифицированная система менеджмента качества (стандарт ISO 9001:2015).</p> <p>Территориально Краснопресненская набережная, Центр Международной Торговли (метро «Улица 1905 года», «Международная», «Деловой центр».</p>
				</section>
				<?php
					if ( $feature_image_bottom = get_field('feature_image_bottom') )
						echo '<img class="career-image" src="'.kama_thumb_src('src='.$feature_image_bottom.'&w=1440&h=810').'" width="" height="" srcset="'.kama_thumb_src('src='.$feature_image_bottom.'&w=2880&h=1620').' 2x, '.kama_thumb_src('src='.$feature_image_bottom.'&w=4320&h=2430').' 3x" alt=""/>';

					unset($feature_title,$feature_image,$feature_image_bottom,$feature_button);
				?>
			</div>
		</main>
<?php }
get_footer();
