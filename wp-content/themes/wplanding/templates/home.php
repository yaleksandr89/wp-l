<?php
/*
 *	Template Name: Для главной страницы
 *  Template Post Type: page, post
 */
get_header(); ?>
    <div class="topSlider">
		<?php $front_slider = apply_filters( 'wplanding_get_sliders', 'Главная страница', 999, 10, 2 ); ?>
		<?php if ( $front_slider ): ?>
            <div class="slider">
				<?php foreach ( $front_slider as $slider ): ?>
                    <div class="slider__sale">
                        <div class="slider__slogan-1"><?= $slider['slogan_1'] ?></div>
                        <div class="slider__slogan-2"><?= $slider['slogan_2'] ?>fast with us!</div>
                        <div class="slider__blogButtons">
                            <div class="btn btn-green p-0">
                                <a class="link_blog" href="<?= $slider['ssylka_zelenoj_knopki'] ?>">
									<?= $slider['opisanie_zelenoj_knopki'] ?>
                                </a>
                            </div>
                            <div class="btn btn--white p-0">
                                <a class="link_blog" href="<?= $slider['ssylka_prozrachnoj_knopki'] ?>">
									<?= $slider['opisanie_prozrachnoj_knopki'] ?>
                                </a>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
    <section class="represent">
        <div class="wrapper">
            <h2 id="block_represent_setting_title" class="blogTitle">
				<?= get_theme_mod( 'block_represent_setting_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
            </h2>
            <div id="block_represent_setting_description" class="repItem__text">
				<?= get_theme_mod( 'block_represent_setting_description', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
            </div>
            <div class="repItems">
                <div class="repItem">
                    <img id="block_represent_1_img"
                         src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_represent_1_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                         alt=""
                         class="repItem__img">
                    <div id="block_represent_1_title" class="repItem__title">
						<?= get_theme_mod( 'block_represent_1_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                    <div id="block_represent_1_desc" class="repItem__text">
						<?= get_theme_mod( 'block_represent_1_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                </div>
                <div class="repItem">
                    <img id="block_represent_2_img"
                         src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_represent_2_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                         alt=""
                         class="repItem__img">
                    <div id="block_represent_2_title" class="repItem__title">
						<?= get_theme_mod( 'block_represent_2_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                    <div id="block_represent_2_desc" class="repItem__text">
						<?= get_theme_mod( 'block_represent_2_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                </div>
                <div class="repItem">
                    <img id="block_represent_3_img"
                         src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_represent_3_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                         alt=""
                         class="repItem__img">
                    <div id="block_represent_3_title" class="repItem__title">
						<?= get_theme_mod( 'block_represent_3_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                    <div id="block_represent_3_desc" class="repItem__text">
						<?= get_theme_mod( 'block_represent_3_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="features">
        <div class="wrapper">
            <div class="ftItems">
                <div class="ftItem">
                    <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-1.png"
                                                  alt="res"></div>
                    <div class="ftItem__box">
                        <div class="ftItem__title">Responsive Design</div>
                        <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                            eiusmod
                            tempor incid idunt ut labore et dolore magn.
                        </div>
                        <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="ftItem">
                    <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-2.png" alt="">
                    </div>
                    <div class="ftItem__box">
                        <div class="ftItem__title">Cross-Browser Support</div>
                        <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                            eiusmod
                            tempor incid idunt ut labore et dolore magn.
                        </div>
                        <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="ftItem">
                    <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-3.png" alt="">
                    </div>
                    <div class="ftItem__box">
                        <div class="ftItem__title">Creative Design</div>
                        <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                            eiusmod
                            tempor incid idunt ut labore et dolore magn.
                        </div>
                        <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="ftItem">
                    <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-4.png" alt="">
                    </div>
                    <div class="ftItem__box">
                        <div class="ftItem__title">Bootstrap 3.1</div>
                        <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                            eiusmod
                            tempor incid idunt ut labore et dolore magn.
                        </div>
                        <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="ftItem">
                    <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-5.png" alt="">
                    </div>
                    <div class="ftItem__box">
                        <div class="ftItem__title">100 Icon Fonts</div>
                        <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                            eiusmod
                            tempor incid idunt ut labore et dolore magn.
                        </div>
                        <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="ftItem">
                    <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-6.png" alt="">
                    </div>
                    <div class="ftItem__box">
                        <div class="ftItem__title">More Features</div>
                        <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                            eiusmod
                            tempor incid idunt ut labore et dolore magn.
                        </div>
                        <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="discover">
        <div class="wrapper">
            <div class="disItems">
                <div class="disItemL">
                    <img id="block_discover_image"
                         src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_discover_image', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                         alt="labore"
                         class="disItemL__img">
                </div>
                <div class="disItemR">
                    <h2 id="block_discover_title" class="blogTitle blogTitle--left blogTitle--center">
						<?= get_theme_mod( 'block_discover_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </h2>
                    <div id="block_discover_description" class="disItemR__text">
						<?= get_theme_mod( 'block_discover_description', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                    <div class="disItemR__box">
                        <div class="disItemR__list">
                            <div class="disItemR__imgCircle">
                                <img id="block_discover_image_icons_1"
                                     src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_discover_image_icons_1', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                                     alt="adv"
                                     class="disItemR__icon"
                                >
                            </div>
                            <span id="block_discover_title_icons_1" class="disItemR__listText">
                                <?= get_theme_mod( 'block_discover_title_icons_1', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span></div>
                        <div class="disItemR__list">
                            <div class="disItemR__imgCircle">
                                <img id="block_discover_image_icons_2"
                                     src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_discover_image_icons_2', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                                     alt="adv"
                                     class="disItemR__icon"
                                >
                            </div>
                            <span id="block_discover_title_icons_2" class="disItemR__listText">
                               <?= get_theme_mod( 'block_discover_title_icons_2', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </div>
                        <div class="disItemR__list">
                            <div class="disItemR__imgCircle">
                                <img id="block_discover_image_icons_3"
                                     src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_discover_image_icons_3', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                                     alt="adv"
                                     class="disItemR__icon"
                                >
                            </div>
                            <span id="block_discover_title_icons_3" class="disItemR__listText">
                                <?= get_theme_mod( 'block_discover_title_icons_3', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </div>
                        <div class="disItemR__list">
                            <div class="disItemR__imgCircle">
                                <img id="block_discover_image_icons_4"
                                     src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_discover_image_icons_4', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                                     alt="adv"
                                     class="disItemR__icon"
                                >
                            </div>
                            <span id="block_discover_title_icons_4" class="disItemR__listText">
                                <?= get_theme_mod( 'block_discover_title_icons_4', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="advItems">
            <div class="advItem advItem-left">
                <div class="advItem__box">
                    <img id="block_advantages_1_img"
                         src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_advantages_1_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                         alt=""
                         class="advItem__icon advItem__icon-small">
                    <div class="advItem__title">
                        <span id="block_advantages_1_title">
                            <?= get_theme_mod( 'block_advantages_1_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                    <div class="advItem__text">
                        <span id="block_advantages_1_desc">
                            <?= get_theme_mod( 'block_advantages_1_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="advItem advItem-middle">
                <div class="advItem__box">
                    <img id="block_advantages_2_img"
                         src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_advantages_2_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                         alt=""
                         class="advItem__icon advItem__icon-small">
                    <div class="advItem__title">
                        <span id="block_advantages_2_title">
                            <?= get_theme_mod( 'block_advantages_2_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                    <div class="advItem__text">
                        <span id="block_advantages_2_desc">
                            <?= get_theme_mod( 'block_advantages_2_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="advItem advItem-right">
                <div class="advItem__box">
                    <img id="block_advantages_3_img"
                         src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_advantages_3_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                         alt=""
                         class="advItem__icon advItem__icon-small">
                    <div class="advItem__title">
                        <span id="block_advantages_3_title">
                            <?= get_theme_mod( 'block_advantages_3_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                    <div class="advItem__text">
                        <span id="block_advantages_3_desc">
                            <?= get_theme_mod( 'block_advantages_3_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="wrapper">
            <h2 class="blogTitle">From the blog</h2>
            <div class="blogItems">
				<?php get_template_part( 'template-parts/blog/flow/content', 'front-page' ); ?>
            </div>
            <div class="blogButtons">
                <div class="btn btn-green p-0">
                    <a class="link_blog" href="<?= get_home_url( '', 'blog' ) ?>">
                        See all posts
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="stats">
        <div class="wrapper">
            <div class="statItems">
                <div class="statItem">
                    <div class="statItem__icon">
                        <img id="block_stats_1_img"
                             src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_stats_1_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                             alt="">
                    </div>
                    <div class="statItem__number">
                        <span id="block_stats_1_count">
                            <?= get_theme_mod( 'block_stats_1_count', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                    <div class="statItem__text">
						<span id="block_stats_1_desc">
                            <?= get_theme_mod( 'block_stats_1_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                </div>
                <div class="statItem">
                    <div class="statItem__icon">
                        <img id="block_stats_2_img"
                             src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_stats_2_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                             alt="">
                    </div>
                    <div class="statItem__number">
                        <span id="block_stats_2_count">
                            <?= get_theme_mod( 'block_stats_2_count', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                    <div class="statItem__text">
						<span id="block_stats_2_desc">
                            <?= get_theme_mod( 'block_stats_2_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                </div>
                <div class="statItem">
                    <div class="statItem__icon">
                        <img id="block_stats_3_img"
                             src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_stats_3_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                             alt="">
                    </div>
                    <div class="statItem__number">
                        <span id="block_stats_3_count">
                            <?= get_theme_mod( 'block_stats_3_count', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                    <div class="statItem__text">
						<span id="block_stats_3_desc">
                            <?= get_theme_mod( 'block_stats_3_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                </div>
                <div class="statItem">
                    <div class="statItem__icon">
                        <img id="block_stats_4_img"
                             src="<?= WPLANDING_DIR_iMAGES . get_theme_mod( 'block_stats_4_img', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                             alt="">
                    </div>
                    <div class="statItem__number">
                        <span id="block_stats_4_count">
                            <?= get_theme_mod( 'block_stats_4_count', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                    <div class="statItem__text">
						<span id="block_stats_4_desc">
                            <?= get_theme_mod( 'block_stats_4_desc', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="packages">
        <div class="wrapper">
            <h2 id="block_packages_settings_title" class="blogTitle">
				<?= get_theme_mod( 'block_packages_settings_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
            </h2>
            <div class="pacItems">
                <div class="pacItem">
                    <div id="block_packages_1_title" class="pacItem__title">
						<?= get_theme_mod( 'block_packages_1_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                    <div class="pacItem__price">
                        <sup id="block_packages_1_price_start" class="pacItem__sup">
							<?= get_theme_mod( 'block_packages_1_price_start', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </sup>
                        <span id="block_packages_1_price_middle">
                            <?= get_theme_mod( 'block_packages_1_price_middle', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                        <sub id="block_packages_1_price_end" class="pacItem__sub">
                            /<?= get_theme_mod( 'block_packages_1_price_end', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </sub>
                    </div>
                    <ul class="pacItem__lists">
                        <li class="pacItem__list">
							<?php if ( get_theme_mod( 'block_packages_1_header_service_1_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
							<?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
							<?php endif; ?>
                            <span id="block_packages_1_header_service_1">
                                <?= get_theme_mod( 'block_packages_1_header_service_1', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
							<?php if ( get_theme_mod( 'block_packages_1_header_service_2_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
							<?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
							<?php endif; ?>
                            <span id="block_packages_1_header_service_2">
                                <?= get_theme_mod( 'block_packages_1_header_service_2', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
							<?php if ( get_theme_mod( 'block_packages_1_header_service_3_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
							<?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
							<?php endif; ?>
                            <span id="block_packages_1_header_service_3">
                                <?= get_theme_mod( 'block_packages_1_header_service_3', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
							<?php if ( get_theme_mod( 'block_packages_1_header_service_4_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
							<?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
							<?php endif; ?>
                            <span id="block_packages_1_header_service_4">
                                <?= get_theme_mod( 'block_packages_1_header_service_4', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
							<?php if ( get_theme_mod( 'block_packages_1_header_service_5_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
							<?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
							<?php endif; ?>
                            <span id="block_packages_1_header_service_5">
                                <?= get_theme_mod( 'block_packages_1_header_service_5', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
							<?php if ( get_theme_mod( 'block_packages_1_header_service_6_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
							<?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
							<?php endif; ?>
                            <span id="block_packages_1_header_service_6">
                                <?= get_theme_mod( 'block_packages_1_header_service_6', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="pacItem">
                    <div id="block_packages_2_title" class="pacItem__title">
			            <?= get_theme_mod( 'block_packages_2_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                    <div class="pacItem__price">
                        <sup id="block_packages_2_price_start" class="pacItem__sup">
				            <?= get_theme_mod( 'block_packages_2_price_start', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </sup>
                        <span id="block_packages_2_price_middle">
                            <?= get_theme_mod( 'block_packages_2_price_middle', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                        <sub id="block_packages_2_price_end" class="pacItem__sub">
                            /<?= get_theme_mod( 'block_packages_2_price_end', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </sub>
                    </div>
                    <ul class="pacItem__lists">
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_2_header_service_1_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_2_header_service_1">
                                <?= get_theme_mod( 'block_packages_2_header_service_1', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_2_header_service_2_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_2_header_service_2">
                                <?= get_theme_mod( 'block_packages_2_header_service_2', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_2_header_service_3_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_2_header_service_3">
                                <?= get_theme_mod( 'block_packages_2_header_service_3', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_2_header_service_4_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_2_header_service_4">
                                <?= get_theme_mod( 'block_packages_2_header_service_4', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_2_header_service_5_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_2_header_service_5">
                                <?= get_theme_mod( 'block_packages_2_header_service_5', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_2_header_service_6_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_2_header_service_6">
                                <?= get_theme_mod( 'block_packages_2_header_service_6', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="pacItem">
                    <div id="block_packages_3_title" class="pacItem__title">
			            <?= get_theme_mod( 'block_packages_3_title', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                    </div>
                    <div class="pacItem__price">
                        <sup id="block_packages_3_price_start" class="pacItem__sup">
				            <?= get_theme_mod( 'block_packages_3_price_start', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </sup>
                        <span id="block_packages_3_price_middle">
                            <?= get_theme_mod( 'block_packages_3_price_middle', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </span>
                        <sub id="block_packages_3_price_end" class="pacItem__sub">
                            /<?= get_theme_mod( 'block_packages_3_price_end', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </sub>
                    </div>
                    <ul class="pacItem__lists">
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_3_header_service_1_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_3_header_service_1">
                                <?= get_theme_mod( 'block_packages_3_header_service_1', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_3_header_service_2_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_3_header_service_2">
                                <?= get_theme_mod( 'block_packages_3_header_service_2', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_3_header_service_3_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_3_header_service_3">
                                <?= get_theme_mod( 'block_packages_3_header_service_3', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_3_header_service_4_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_3_header_service_4">
                                <?= get_theme_mod( 'block_packages_3_header_service_4', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_3_header_service_5_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_3_header_service_5">
                                <?= get_theme_mod( 'block_packages_3_header_service_5', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                        <li class="pacItem__list">
				            <?php if ( get_theme_mod( 'block_packages_3_header_service_6_enable' ) ): ?>
                                <i class="fa fa-check" aria-hidden="true"></i>
				            <?php else: ?>
                                <i class="fa fa-close" aria-hidden="true"></i>
				            <?php endif; ?>
                            <span id="block_packages_3_header_service_6">
                                <?= get_theme_mod( 'block_packages_3_header_service_6', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="pacButtons">
                    <div class="btn btn-green pacBtn">
                        <a id="block_packages_settings_a" class="link_blog"
                           href="<?= get_theme_mod( 'block_packages_settings_a_url', WPLANDING_GET_THE_MOD_DEFAULT ) ?>">
							<?= get_theme_mod( 'block_packages_settings_a_txt', WPLANDING_GET_THE_MOD_DEFAULT ) ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="botSlider">
		<?php $reviews = apply_filters( 'wplanding_get_reviews', '', 10, 1 ); ?>
        <div class="sliderBot">
			<?php if ( $reviews ): ?>
				<?php foreach ( $reviews as $review ): ?>
                    <div class="slider__team">
                        <div class="sliderBot__img">
							<?= $review['thumbnail'] ?>
                        </div>
                        <div class="sliderBot__text">
							<?= $review['content'] ?>
                        </div>
                        <div class="sliderBot__title"><?= $review['client'] ?></div>
                        <div class="sliderBot__position">
							<?php if ( is_array( $review['type_work'] ) ): ?>
								<?= implode( ', ', $review['type_work'] ) ?>
							<?php else: ?>
								<?= $review['type_work'] ?>
							<?php endif; ?>
                        </div>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>
        </div>
    </div>
<?php get_footer();