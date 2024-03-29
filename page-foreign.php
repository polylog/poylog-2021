<?php
/**
 * The template for foreign page
 * Template Name: Иностранная версия
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package polylog
 */

get_header();
while ( have_posts() ) { the_post(); ?>
	<main class="main main-eng">
      	<h1 class="sr-only"><?php the_title(); ?></h1>
      	<section class="main-screen">
      	  	<div class="main-screen__main">
	        	<?php if ( have_rows('ms_row') ) { ?>
			        <div class="main-screen__credits">
			          <?php
			          $crItem = 1;
			          while ( have_rows('ms_row') ) { the_row(); ?>
			            <div class="main-screen__credits-row <? if($crItem == 2) { echo 'marquee-item-rev'; } else { echo 'marquee-item';}  ?>"
			            	<?
			            		// ch
			            		if( is_page(698) ){
					            	if($crItem == 1) {
					            		echo 'mdata-arque-speed="25"';
					            	} elseif($crItem == 2) {
					            		echo 'mdata-arque-speed="50"';
					            	} else {
					            		echo 'mdata-arque-speed="30"';
					            	}
								}
								// jp
								elseif ( is_page(717) ) {
					            	if($crItem == 1) {
					            		echo 'mdata-arque-speed="50"';
					            	} elseif($crItem == 2) {
					            		echo 'mdata-arque-speed="80"';
					            	} else {
					            		echo 'mdata-arque-speed="60"';
					            	}
								}
								//eng
								elseif ( is_page(344) ) {
					            	if($crItem == 1) {
					            		echo 'mdata-arque-speed="48"';
					            	} elseif($crItem == 2) {
					            		echo 'mdata-arque-speed="78"';
					            	} else {
					            		echo 'mdata-arque-speed="58"';
					            	}
								} else{
					            	if($crItem == 1) {
					            		echo 'mdata-arque-speed="50"';
					            	} elseif($crItem == 2) {
					            		echo 'mdata-arque-speed="80"';
					            	} else {
					            		echo 'mdata-arque-speed="60"';
					            	}
								}
			            	?>
			            	>
			              	<h2 class="main-screen__credits-item"><?php
			              	if ( $ms_text = get_sub_field('ms_text') ) {
				                $ms_array = explode('|',$ms_text);
				                foreach ( (array)$ms_array as $ms_item ) {
				                  if ( strpos($ms_item, 'b:') === 0 ) {
				                    echo '<span class="black">'.str_replace('b:','',$ms_item).'</span>';
				                  } else {
				                    echo '<span>'.$ms_item.'</span>';
				                  }
				                }
				                unset($ms_array,$ms_item,$ms_text);
			              	} ?></h2>
			            </div>
			          <?php $crItem++; } ?>
			        </div>
		      	<?php } ?>
	      		<div class="container main-screen__image-wrapper" id="scene">
		            <div class="main-screen__image" data-depth="0.6"><?php
			        if ( $ms_image_1 = get_field('ms_image_1') )
			          echo '<img src="'.kama_thumb_src('src='.$ms_image_1.'&w=249&h=417').'" width="249" height="417" srcset="'.kama_thumb_src('src='.$ms_image_1.'&w=498&h=834').' 2x, '.kama_thumb_src('src='.$ms_image_1.'&w=747&h=1251').' 3x" alt="Жест \'Коза\'"/>';
			        if ( $ms_image_2 = get_field('ms_image_2') )
			          echo '<img src="'.kama_thumb_src('src='.$ms_image_2.'&w=249&h=417').'" width="249" height="417" srcset="'.kama_thumb_src('src='.$ms_image_2.'&w=498&h=834').' 2x, '.kama_thumb_src('src='.$ms_image_2.'&w=747&h=1251').' 3x" alt="Жест \'Мир\'"/>';

			        unset($ms_image_1,$ms_image_1);
			        ?></div>
		  		</div>
          		<div class="container main-screen__image-text main-screen__text-foreign"><?php the_field('ms_caption'); ?></div>
          	</div>

  <?php if ( is_front_page() || is_page_template( 'page-foreign.php' ) ) { ?>
    <div class="consulting anim-item anim-item--no-hide" style="margin-top: 20px;">
        <div class="consulting__title anim-bottom"><svg width="1383" height="168" viewBox="0 0 1383 168" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M84.6199 167.44C114.06 167.44 139.82 152.95 153.62 130.18L121.88 111.78C114.98 124.2 100.95 131.56 84.6199 131.56C56.0999 131.56 37.6999 112.47 37.6999 83.72C37.6999 54.97 56.0999 35.88 84.6199 35.88C100.95 35.88 114.75 43.24 121.88 55.66L153.62 37.26C139.59 14.49 113.83 0 84.6199 0C36.0899 0 0.899902 36.34 0.899902 83.72C0.899902 131.1 36.0899 167.44 84.6199 167.44Z" fill="black"/>
    <path d="M245.44 167.44C291.67 167.44 329.16 131.1 329.16 83.72C329.16 36.34 291.67 0 245.44 0C199.21 0 161.72 36.34 161.72 83.72C161.72 131.1 199.21 167.44 245.44 167.44ZM245.44 131.56C219.22 131.56 198.52 112.47 198.52 83.72C198.52 54.97 219.22 35.88 245.44 35.88C271.66 35.88 292.36 54.97 292.36 83.72C292.36 112.47 271.66 131.56 245.44 131.56Z" fill="black"/>
    <path d="M439.58 3.22V90.62L377.48 3.22H349.88V164.22H386.68V76.82L448.78 164.22H476.38V3.22H439.58Z" fill="black"/>
    <path d="M558.066 167.44C593.026 167.44 617.866 149.04 617.866 117.99C617.866 83.95 590.496 75.44 566.116 68.08C541.046 60.49 537.136 55.43 537.136 48.07C537.136 41.63 542.886 35.88 554.386 35.88C569.106 35.88 576.696 43.01 582.216 54.51L613.266 36.34C601.536 12.65 580.836 0 554.386 0C526.556 0 500.336 17.94 500.336 48.99C500.336 79.81 523.796 91.31 547.716 97.98C571.866 104.65 581.066 108.56 581.066 118.45C581.066 124.66 576.696 131.56 559.216 131.56C541.046 131.56 531.156 122.59 525.406 109.25L493.666 127.65C502.636 151.34 524.256 167.44 558.066 167.44Z" fill="black"/>
    <path d="M697.207 167.44C732.627 167.44 759.307 146.74 759.307 112.24V3.22H722.507V109.02C722.507 121.21 716.757 131.56 697.207 131.56C677.657 131.56 671.907 121.21 671.907 109.02V3.22H635.107V112.24C635.107 146.74 661.787 167.44 697.207 167.44Z" fill="black"/>
    <path d="M822.647 128.8V3.22H785.847V164.22H880.147V128.8H822.647Z" fill="black"/>
    <path d="M988.283 3.22H868.683V38.64H910.083V164.22H946.883V38.64H988.283V3.22Z" fill="black"/>
    <path d="M1004.39 3.22V164.22H1041.19V3.22H1004.39Z" fill="black"/>
    <path d="M1158.55 3.22V90.62L1096.45 3.22H1068.85V164.22H1105.65V76.82L1167.75 164.22H1195.35V3.22H1158.55Z" fill="black"/>
    <path d="M1382.33 74.52H1301.6V106.72H1344.61C1338.86 122.13 1324.83 131.56 1303.44 131.56C1272.16 131.56 1252.84 111.55 1252.84 84.18C1252.84 55.89 1273.08 35.88 1300.22 35.88C1318.39 35.88 1332.88 44.16 1339.55 54.74L1370.83 36.8C1357.26 15.18 1331.27 0 1300.45 0C1253.07 0 1216.04 37.26 1216.04 83.95C1216.04 130.18 1252.38 167.44 1302.98 167.44C1348.06 167.44 1382.33 137.54 1382.33 88.32V74.52Z" fill="black"/>
    <path d="M1319.93 85.1653C1321.27 85.1653 1322.61 85.4648 1323.93 86.0637V87.9934C1322.61 87.3215 1321.3 86.9856 1320.02 86.9856C1319.23 86.9856 1318.52 87.1444 1317.9 87.4622C1317.28 87.7799 1316.8 88.2382 1316.45 88.8372C1316.11 89.4309 1315.95 90.095 1315.95 90.8293C1315.95 91.9439 1316.32 92.8424 1317.05 93.5247C1317.8 94.2017 1318.78 94.5403 1319.99 94.5403C1320.33 94.5403 1320.64 94.5116 1320.95 94.4543C1321.25 94.3971 1321.62 94.2877 1322.04 94.1262V92.3137H1320.23V90.6653H1324.15V95.1653C1323.61 95.5403 1322.97 95.8346 1322.21 96.0481C1321.46 96.2564 1320.68 96.3606 1319.87 96.3606C1318.72 96.3606 1317.67 96.1236 1316.73 95.6497C1315.8 95.1757 1315.07 94.5116 1314.55 93.6575C1314.03 92.8033 1313.77 91.8502 1313.77 90.7981C1313.77 89.7304 1314.03 88.7642 1314.55 87.8997C1315.09 87.0351 1315.82 86.3632 1316.77 85.884C1317.71 85.4049 1318.77 85.1653 1319.93 85.1653ZM1330.34 85.3059C1331.36 85.3059 1332.2 85.5898 1332.84 86.1575C1333.49 86.7252 1333.81 87.4648 1333.81 88.3762C1333.81 88.996 1333.65 89.5377 1333.33 90.0012C1333.01 90.4596 1332.54 90.8215 1331.91 91.0872C1332.26 91.2747 1332.57 91.5299 1332.84 91.8528C1333.11 92.1757 1333.44 92.72 1333.84 93.4856C1334.51 94.8085 1335.01 95.72 1335.33 96.22H1332.98C1332.82 95.9804 1332.6 95.5976 1332.32 95.0715C1331.72 93.9101 1331.27 93.1288 1330.99 92.7278C1330.71 92.3215 1330.44 92.0351 1330.18 91.8684C1329.92 91.6965 1329.62 91.6106 1329.28 91.6106H1328.52V96.22H1326.41V85.3059H1330.34ZM1329.86 89.9622C1330.41 89.9622 1330.84 89.8241 1331.16 89.5481C1331.47 89.2721 1331.63 88.8944 1331.63 88.4153C1331.63 87.9153 1331.48 87.5429 1331.16 87.2981C1330.85 87.0481 1330.41 86.9231 1329.83 86.9231H1328.52V89.9622H1329.86ZM1341.83 85.1653C1342.96 85.1653 1343.97 85.3997 1344.88 85.8684C1345.78 86.3319 1346.5 87.0038 1347.04 87.884C1347.58 88.759 1347.84 89.72 1347.84 90.7668C1347.84 91.7877 1347.58 92.7356 1347.05 93.6106C1346.53 94.4804 1345.82 95.1575 1344.9 95.6418C1343.99 96.121 1342.96 96.3606 1341.81 96.3606C1340.68 96.3606 1339.65 96.1158 1338.73 95.6262C1337.8 95.1366 1337.09 94.4648 1336.57 93.6106C1336.05 92.7512 1335.8 91.8033 1335.8 90.7668C1335.8 89.7668 1336.05 88.8267 1336.57 87.9465C1337.09 87.0663 1337.8 86.384 1338.7 85.8997C1339.61 85.4101 1340.65 85.1653 1341.83 85.1653ZM1337.98 90.7668C1337.98 91.4908 1338.14 92.1418 1338.47 92.72C1338.8 93.2981 1339.25 93.746 1339.84 94.0637C1340.42 94.3814 1341.09 94.5403 1341.83 94.5403C1342.95 94.5403 1343.87 94.1887 1344.59 93.4856C1345.31 92.7825 1345.67 91.8762 1345.67 90.7668C1345.67 90.0429 1345.51 89.3918 1345.18 88.8137C1344.86 88.2304 1344.4 87.7799 1343.8 87.4622C1343.22 87.1444 1342.55 86.9856 1341.81 86.9856C1341.07 86.9856 1340.41 87.1471 1339.81 87.47C1339.22 87.7877 1338.77 88.2356 1338.45 88.8137C1338.14 89.3866 1337.98 90.0377 1337.98 90.7668ZM1351.86 85.3059V91.6575C1351.86 92.3085 1351.96 92.8267 1352.15 93.2122C1352.35 93.5976 1352.67 93.9153 1353.11 94.1653C1353.55 94.4153 1354.07 94.5403 1354.66 94.5403C1355.3 94.5403 1355.85 94.4231 1356.3 94.1887C1356.75 93.9491 1357.08 93.6262 1357.29 93.22C1357.5 92.8085 1357.6 92.2408 1357.6 91.5168V85.3059H1359.71V91.7903C1359.71 93.259 1359.27 94.3892 1358.39 95.1809C1357.51 95.9674 1356.27 96.3606 1354.66 96.3606C1353.65 96.3606 1352.77 96.1809 1352.02 95.8215C1351.28 95.4622 1350.72 94.9439 1350.33 94.2668C1349.94 93.5846 1349.74 92.7851 1349.74 91.8684V85.3059H1351.86ZM1366.27 85.3059C1367.29 85.3059 1368.11 85.6028 1368.75 86.1965C1369.39 86.7851 1369.71 87.5455 1369.71 88.4778C1369.71 89.4205 1369.39 90.1835 1368.74 90.7668C1368.1 91.3502 1367.24 91.6418 1366.19 91.6418H1364.16V96.22H1362.05V85.3059H1366.27ZM1365.74 89.9934C1366.3 89.9934 1366.74 89.8658 1367.05 89.6106C1367.37 89.3502 1367.53 88.9674 1367.53 88.4622C1367.53 87.4569 1366.89 86.9543 1365.59 86.9543H1364.16V89.9934H1365.74Z" fill="white"/>
    </svg>
          </div>
         <!--  <div class="container consulting__line"></div> -->
      </div>
  <?php } ?>


	        <div class="main-screen__nav">
	        	<?php wp_nav_menu( array(
            		'menu'		 => 6,
	            	'menu_id'	 => '',
	            	'menu_class' => 'main-screen__languages-list',
	            	'container'	 => false,
	            	'walker'	 => new Languages_Walker_Nav_Menu()
	            ) );

		      	if ( $phone = get_field('phone','options') )
		        	echo '<a class="main-screen__tel" href="tel:'.preg_replace('/[^0-9\+]/', '', $phone).'">'.$phone.'</a>';

		      	unset($phone);
		      	$footer_file_name = get_field('footer_file_name');
		      	$footer_file = get_field('footer_file');
		      	if ( $footer_file && $footer_file_name )
		      		echo '<a class="main-screen__contacts" href="'.$footer_file.'" download><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.2 30.8H26.2667V9.72548L21.7412 5.2H9.2V30.8ZM23.0667 2H6V34H29.4667V8.4L23.0667 2Z" fill="white"/></svg><span>'.$footer_file_name.'</span></a>';

		      	unset($footer_file_name,$footer_file);
		      	?>
	          	<button class="btn is-lg main-screen__request form-request__open" type="button"><span><?php the_field('ms_button'); ?></span><svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M32.0441 11.5L23.6959 1.98957L25.9505 0.010498L37.4945 13.1617L25.9506 26.3128L23.6959 24.3338L32.3279 14.5H0V11.5H32.0441Z" fill="white"/></svg></button>
	        </div>
      	</section>
      	<section class="about about--foreign">
	        <h2 class="sr-only">About Polylog</h2>
	        <div class="about-teaser">
	          <div class="container about-teaser__main">
	            <div class="about-teaser__text">
	              <?php the_field('about_text'); ?>
	            </div>
	            <div class="about-teaser__additional">
	              <div class="about-teaser__figure">
	                <div class="about-teaser__figure-value"><?php the_field('about_count'); ?></div>
	                <div class="about-teaser__figure-caption"><?php the_field('about_count_text'); ?></div>
	              </div>
	              <div class="about-teaser__additional-text">
	                <p><?php the_field('about_caption'); ?></p>
	              </div>
	            </div>
	          </div>
	          <div class="about-teaser__bottom">
	            <div class="about-teaser__images-wrapper">
	              <div class="about-teaser__images" id="scene2"><?php
		          if ( $about_image_1 = get_field('about_image_1') )
		            echo '<img class="about-teaser__image-bust" src="'.kama_thumb_src('src='.$about_image_1.'&w=268&h=522').'" data-depth="0.6" width="268" height="522" srcset="'.kama_thumb_src('src='.$about_image_1.'&w=536&h=1044').' 2x, '.kama_thumb_src('src='.$about_image_1.'&w=804&h=1566').' 3x" alt="Бюст"/>';
		          if ( $about_image_2 = get_field('about_image_2') )
		            echo '<img class="about-teaser__image-shape" src="'.$about_image_2.'" data-depth="-0.6" width="154" height="154" alt="Фигура"/>';

		          unset($about_image_1,$about_image_2);
		          ?></div>
	            </div>
	          </div>
	        </div>
	        <div class="about-scope">
	          <div class="container about-scope__container">
	            <h3 class="about-scope__title"><?php the_field('services_title'); ?></h3>
	            <div class="text-block">
	              <?php the_field('services_text'); ?>
	            </div>
	          </div>
	        </div>
	        <div class="container"><?php
	        if ( $services_image = get_field('services_image') )
	        	echo '<img class="about__small-image" src="'.kama_thumb_src('src='.$services_image.'&w=299&h=179').'" data-depth="0.6" width="268" height="522" srcset="'.kama_thumb_src('src='.$services_image.'&w=598&h=358').' 2x, '.kama_thumb_src('src='.$services_image.'&w=897&h=537').' 3x" alt=""/>';
	        ?></div>
      </section>
      <section class="achievements">
        <h2 class="sr-only">Achievements</h2>
        <div class="container">
        	<?php if ( have_rows('achievements') ) { ?>
	          	<ul class="achievements__list">
	          	<?php while ( have_rows('achievements') ) { the_row(); ?>
		            <li class="achievements__item anim-item anim-item--no-hide anim-top">
		              <div class="achievements__item-value <?php if ( get_sub_field('achievement_small_title') ) echo 'achievements__item-value--small'; ?>"><?php the_sub_field('achievement_title'); ?></div>
		              <div class="achievements__item-caption"><?php the_sub_field('achievement_caption'); ?></div>
		            </li>
		        <?php } ?>
	          	</ul>
	        <?php } ?>
        </div>
      </section>



      <section class="clients">
        <div class="container clients__wrapper">
          <h2 class="clients__title"><?php the_field('clients_title'); ?></h2>
          <?php if ( $clients = get_field('clients') ) {
	        $clients = array_chunk($clients, 2); ?>
	        <ul class="clients__list">
	          <?php
	          	$numImgClient = 1;
	          	foreach ( $clients as $client ) { ?>
	            <li class="clients__item clients__item-<? echo $numImgClient; ?> anim-item anim-item--no-hide anim-top"><?php
	            foreach ( $client as $logo )
	              echo '<img src="'.$logo.'" width="200" height="100" alt="Логотип"/>';
	            ?></li>
	          <?php $numImgClient++; } ?>
	        </ul>
	      <?php unset($clients,$client,$logo);
	      } ?>


<!-- 			<ul class="clients__list">
			    <li class="clients__item clients__item-1 anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Sber.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Atom.jpg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item clients__item-2 anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Gazprom-1.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_ING.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item clients__item-3 anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Ingostrah.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_InterRao-1.jpg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item clients__item-4 anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Kolmar.jpg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Lukoil.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item clients__item-5 anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Nobel.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_OTP.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item clients__item-6 anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Raz.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Renessans.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Rosbank.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Rosneft.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_RusGidro.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Sber-3.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_uralsib.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Vostok.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Renessans-1.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Nobel-1.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Bayer-1.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Philips-1.svg" width="200" height="100" alt="Логотип">
			    </li>
			    <li class="clients__item anim-item anim-item--no-hide anim-top active">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Adobe.svg" width="200" height="100" alt="Логотип">
			    	<img src="http://pollywp.mcdir.ru/wp-content/uploads/2020/09/logo_Scania.svg" width="200" height="100" alt="Логотип">
			    </li>
			</ul> -->


        </div>
      </section>


    </main>
<?php }
get_footer();
