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
            <h2 class="blogTitle">Present your site in the most beautiful way</h2>
            <div class="repItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Lorem
                ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.
            </div>
            <div class="repItems">
                <div class="repItem">
                    <img src=<?= WPLANDING_DIR_iMAGES ?>res-1.png" alt="" class="repItem__img">
                    <div class="repItem__title">Responsive Design</div>
                    <div class="repItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labor.
                    </div>
                </div>
                <div class="repItem">
                    <img src=<?= WPLANDING_DIR_iMAGES ?>res-2.png" alt="" class="repItem__img">
                    <div class="repItem__title">Built for mobile and up</div>
                    <div class="repItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labor.
                    </div>
                </div>
                <div class="repItem">
                    <img src=<?= WPLANDING_DIR_iMAGES ?>res-3.png" alt="" class="repItem__img">
                    <div class="repItem__title">Variant Builder included</div>
                    <div class="repItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labor.
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
                <div class="disItemL"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-4.png" alt="labore" class="disItemL__img">
                </div>
                <div class="disItemR">
                    <h2 class="blogTitle blogTitle--left blogTitle--center">Discover the advantages</h2>
                    <div class="disItemR__text">Lorem ipsum dolor sit amet conse ctetur adiisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip.
                    </div>
                    <div class="disItemR__box">
                        <div class="disItemR__list">
                            <div class="disItemR__imgCircle"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-5.png" alt="adv"
                                                                  class="disItemR__icon"></div>
                            <span class="disItemR__listText">Lorem ipsum dolor sit amet </span></div>
                        <div class="disItemR__list">
                            <div class="disItemR__imgCircle"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-6.png" alt="adv"
                                                                  class="disItemR__icon"></div>
                            <span class="disItemR__listText">Conse ctetur adipisicing</span></div>
                        <div class="disItemR__list">
                            <div class="disItemR__imgCircle"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-7.png" alt="adv"
                                                                  class="disItemR__icon"></div>
                            <span class="disItemR__listText">Elit sed do eiusmod tempor</span></div>
                        <div class="disItemR__list">
                            <div class="disItemR__imgCircle"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-8.png" alt="adv"
                                                                  class="disItemR__icon"></div>
                            <span class="disItemR__listText">Incididunt ut labore</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="advItems">
            <div class="advItem advItem-left">
                <div class="advItem__box">
                    <img src=<?= WPLANDING_DIR_iMAGES ?>adv-1.png" alt="" class="advItem__icon advItem__icon-small">
                    <div class="advItem__title">Your Data in Cloud</div>
                    <div class="advItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
                    </div>
                </div>
            </div>
            <div class="advItem advItem-middle">
                <div class="advItem__box">
                    <img src=<?= WPLANDING_DIR_iMAGES ?>adv-2.png" alt="" class="advItem__icon">
                    <div class="advItem__title">Monthly Rewards</div>
                    <div class="advItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
                    </div>
                </div>
            </div>
            <div class="advItem advItem-right">
                <div class="advItem__box">
                    <img src=<?= WPLANDING_DIR_iMAGES ?>adv-3.png" alt="" class="advItem__icon">
                    <div class="advItem__title">24/7 Support</div>
                    <div class="advItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
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
            <h2 class="blogTitle">Affordable Packages</h2>
            <div class="pacItems">
                <div class="pacItem">
                    <div class="pacItem__title">Personal</div>
                    <div class="pacItem__price"><sup class="pacItem__sup">$</sup>75<sub
                                class="pacItem__sub">/month</sub></div>
                    <ul class="pacItem__lists">
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor sit
                            amet
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Conse ctetur adipisicing
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Elit sed do eiusmod
                            tempor
                        </li>
                        <li class="pacItem__list"><i class="fa fa-close" aria-hidden="true"></i>Incididunt ut labore
                        </li>
                        <li class="pacItem__list"><i class="fa fa-close" aria-hidden="true"></i>Et dolore magna aliqua
                        </li>
                        <li class="pacItem__list"><i class="fa fa-close" aria-hidden="true"></i>Ut enim ad minim veniam
                        </li>
                    </ul>
                </div>
                <div class="pacItem">
                    <div class="pacItem__title">Business</div>
                    <div class="pacItem__price pacItem__price--colorC"><sup class="pacItem__sup">$</sup>95<sub
                                class="pacItem__sub">/month</sub></div>
                    <ul class="pacItem__lists">
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor sit
                            amet
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Conse ctetur adipisicing
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Elit sed do eiusmod
                            tempor
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Incididunt ut labore
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Et dolore magna aliqua
                        </li>
                        <li class="pacItem__list"><i class="fa fa-close" aria-hidden="true"></i>Ut enim ad minim veniam
                        </li>
                    </ul>
                </div>
                <div class="pacItem">
                    <div class="pacItem__title">Ultimate</div>
                    <div class="pacItem__price pacItem__price--colorR"><sup class="pacItem__sup">$</sup>125<sub
                                class="pacItem__sub">/month</sub></div>
                    <ul class="pacItem__lists">
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor sit
                            amet
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Conse ctetur adipisicing
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Elit sed do eiusmod
                            tempor
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Incididunt ut labore
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Et dolore magna aliqua
                        </li>
                        <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Ut enim ad minim veniam
                        </li>
                    </ul>
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