<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
get_header(); ?>
<div class="topSlider">
    <div class="slider">
        <div class="slider__sale">
            <div class="slider__slogan-1">Create cute websites</div>
            <div class="slider__slogan-2">fast with us!</div>
            <div class="slider__blogButtons">
                <div class="btn btn-green">Buy now!</div>
                <div class="btn btn--white">Learn more</div>
            </div>
        </div>
        <div class="slider__sale">
            <div class="slider__slogan-1">Create cute websites</div>
            <div class="slider__slogan-2">fast with us!</div>
            <div class="slider__blogButtons">
                <div class="btn btn-green">Buy now!</div>
                <div class="btn btn--white">Learn more</div>
            </div>
        </div>
        <div class="slider__sale">
            <div class="slider__slogan-1">Create cute websites</div>
            <div class="slider__slogan-2">fast with us!</div>
            <div class="slider__blogButtons">
                <div class="btn btn-green">Buy now!</div>
                <div class="btn btn--white">Learn more</div>
            </div>
        </div>
    </div>
</div>
<section class="represent">
    <div class="wrapper">
        <h2 class="blogTitle">Present your site in the most beautiful way</h2>
        <div class="repItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem
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
                <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-1.png" alt="res"></div>
                <div class="ftItem__box">
                    <div class="ftItem__title">Responsive Design</div>
                    <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
                    </div>
                    <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="ftItem">
                <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-2.png" alt=""></div>
                <div class="ftItem__box">
                    <div class="ftItem__title">Cross-Browser Support</div>
                    <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
                    </div>
                    <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="ftItem">
                <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-3.png" alt=""></div>
                <div class="ftItem__box">
                    <div class="ftItem__title">Creative Design</div>
                    <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
                    </div>
                    <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="ftItem">
                <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-4.png" alt=""></div>
                <div class="ftItem__box">
                    <div class="ftItem__title">Bootstrap 3.1</div>
                    <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
                    </div>
                    <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="ftItem">
                <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-5.png" alt=""></div>
                <div class="ftItem__box">
                    <div class="ftItem__title">100 Icon Fonts</div>
                    <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
                    </div>
                    <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="ftItem">
                <div class="ftItem__img"><img class="ftItem__icon" src=<?= WPLANDING_DIR_iMAGES ?>ftr-6.png" alt=""></div>
                <div class="ftItem__box">
                    <div class="ftItem__title">More Features</div>
                    <div class="ftItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incid idunt ut labore et dolore magn.
                    </div>
                    <div class="ftItem__meta"><a class="ftItem__link-more" href="#">Read more<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="discover">
    <div class="wrapper">
        <div class="disItems">
            <div class="disItemL"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-4.png" alt="labore" class="disItemL__img"></div>
            <div class="disItemR">
                <h2 class="blogTitle blogTitle--left blogTitle--center">Discover the advantages</h2>
                <div class="disItemR__text">Lorem ipsum dolor sit amet conse ctetur adiisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</div>
                <div class="disItemR__box">
                    <div class="disItemR__list">
                        <div class="disItemR__imgCircle"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-5.png" alt="adv" class="disItemR__icon"></div>
                        <span class="disItemR__listText">Lorem ipsum dolor sit amet </span></div>
                    <div class="disItemR__list">
                        <div class="disItemR__imgCircle"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-6.png" alt="adv" class="disItemR__icon"></div>
                        <span class="disItemR__listText">Conse ctetur adipisicing</span></div>
                    <div class="disItemR__list">
                        <div class="disItemR__imgCircle"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-7.png" alt="adv" class="disItemR__icon"></div>
                        <span class="disItemR__listText">Elit sed do eiusmod tempor</span></div>
                    <div class="disItemR__list">
                        <div class="disItemR__imgCircle"><img src=<?= WPLANDING_DIR_iMAGES ?>adv-8.png" alt="adv" class="disItemR__icon"></div>
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
            <div class="blogItem">
                <img src=<?= WPLANDING_DIR_iMAGES ?>blog-1.jpg" alt="" class="blogItem__img">
                <div class="blogItem__title">Elit sed do eiusmod tempo</div>
                <div class="blogItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                    tempor incid idunt ut labor.
                </div>
                <div class="blogItem__meta">
        					<span class="blogItem__metaItem">
        						<span class="blogItem__metaIcon fa fa-user"></span>
        						<span class="some">Demo User</span>
        					</span>
                    <span class="blogItem__metaItem">
        						<span class="blogItem__metaIcon fa fa-calendar"></span>
        						<span class="some">02 May 2014</span>
        					</span>
                </div>
            </div>
            <div class="blogItem">
                <img src=<?= WPLANDING_DIR_iMAGES ?>blog-2.jpg" alt="" class="blogItem__img">
                <div class="blogItem__title">Elit sed do eiusmod tempo</div>
                <div class="blogItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                    tempor incid idunt ut labor.
                </div>
                <div class="blogItem__meta">
        					<span class="blogItem__metaItem">
        						<span class="blogItem__metaIcon fa fa-user"></span>
        						<span class="some">Demo User</span>
        					</span>
                    <span class="blogItem__metaItem">
        						<span class="blogItem__metaIcon fa fa-calendar"></span>
        						<span class="some">02 May 2014</span>
        					</span>
                </div>
            </div>
            <div class="blogItem">
                <img src=<?= WPLANDING_DIR_iMAGES ?>blog-3.jpg" alt="" class="blogItem__img">
                <div class="blogItem__title">Elit sed do eiusmod tempo</div>
                <div class="blogItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                    tempor incid idunt ut labor.
                </div>
                <div class="blogItem__meta">
        					<span class="blogItem__metaItem">
        						<span class="blogItem__metaIcon fa fa-user"></span>
        						<span class="some">Demo User</span>
        					</span>
                    <span class="blogItem__metaItem">
        						<span class="blogItem__metaIcon fa fa-calendar"></span>
        						<span class="some">02 May 2014</span>
        					</span>
                </div>
            </div>
        </div>
        <div class="blogButtons">
            <div class="btn btn-green">See all posts</div>
        </div>
    </div>
</section>
<div class="stats">
    <div class="wrapper">
        <div class="statItems">
            <div class="statItem">
                <div class="statItem__icon"><img src=<?= WPLANDING_DIR_iMAGES ?>stat-icon-1.png" alt=""></div>
                <div class="statItem__number">258</div>
                <div class="statItem__text">Elit sed do eiusmod tempo</div>
            </div>
            <div class="statItem">
                <div class="statItem__icon"><img src=<?= WPLANDING_DIR_iMAGES ?>stat-icon-2.png" alt=""></div>
                <div class="statItem__number">58</div>
                <div class="statItem__text">Elit sed do eiusmod tempo</div>
            </div>
            <div class="statItem">
                <div class="statItem__icon"><img src=<?= WPLANDING_DIR_iMAGES ?>stat-icon-3.png" alt=""></div>
                <div class="statItem__number">1,897</div>
                <div class="statItem__text">Elit sed do eiusmod tempo</div>
            </div>
            <div class="statItem">
                <div class="statItem__icon"><img src=<?= WPLANDING_DIR_iMAGES ?>stat-icon-4.png" alt=""></div>
                <div class="statItem__number">786</div>
                <div class="statItem__text">Elit sed do eiusmod tempo</div>
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
                <div class="pacItem__price"><sup class="pacItem__sup">$</sup>75<sub class="pacItem__sub">/month</sub></div>
                <ul class="pacItem__lists">
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor sit amet </li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Conse ctetur adipisicing </li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Elit sed do eiusmod tempor</li>
                    <li class="pacItem__list"><i class="fa fa-close" aria-hidden="true"></i>Incididunt ut labore </li>
                    <li class="pacItem__list"><i class="fa fa-close" aria-hidden="true"></i>Et dolore magna aliqua</li>
                    <li class="pacItem__list"><i class="fa fa-close" aria-hidden="true"></i>Ut enim ad minim veniam</li>
                </ul>
            </div>
            <div class="pacItem">
                <div class="pacItem__title">Business</div>
                <div class="pacItem__price pacItem__price--colorC"><sup class="pacItem__sup">$</sup>95<sub class="pacItem__sub">/month</sub></div>
                <ul class="pacItem__lists">
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor sit amet </li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Conse ctetur adipisicing </li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Elit sed do eiusmod tempor</li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Incididunt ut labore </li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Et dolore magna aliqua</li>
                    <li class="pacItem__list"><i class="fa fa-close" aria-hidden="true"></i>Ut enim ad minim veniam</li>
                </ul>
            </div>
            <div class="pacItem">
                <div class="pacItem__title">Ultimate</div>
                <div class="pacItem__price pacItem__price--colorR"><sup class="pacItem__sup">$</sup>125<sub class="pacItem__sub">/month</sub></div>
                <ul class="pacItem__lists">
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor sit amet </li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Conse ctetur adipisicing </li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Elit sed do eiusmod tempor</li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Incididunt ut labore </li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Et dolore magna aliqua</li>
                    <li class="pacItem__list"><i class="fa fa-check" aria-hidden="true"></i>Ut enim ad minim veniam</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="botSlider">
    <div class="sliderBot">
        <div class="slider__team">
            <div class="sliderBot__img"><img src=<?= WPLANDING_DIR_iMAGES ?>tom.png" alt="tom" class="sliderBot__photo"></div>
            <div class="sliderBot__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse
                ctetur adipisicing elit.</div>
            <div class="sliderBot__title">Tom Cooper</div>
            <div class="sliderBot__position">Designer</div>
        </div>
        <div class="slider__team">
            <div class="sliderBot__img"><img src=<?= WPLANDING_DIR_iMAGES ?>tom.png" alt="tom" class="sliderBot__photo"></div>
            <div class="sliderBot__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse
                ctetur adipisicing elit.</div>
            <div class="sliderBot__title">Tom Cooper</div>
            <div class="sliderBot__position">Designer</div>
        </div>
        <div class="slider__team">
            <div class="sliderBot__img"><img src=<?= WPLANDING_DIR_iMAGES ?>tom.png" alt="tom" class="sliderBot__photo"></div>
            <div class="sliderBot__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse
                ctetur adipisicing elit.</div>
            <div class="sliderBot__title">Tom Cooper</div>
            <div class="sliderBot__position">Designer</div>
        </div>
    </div>
</div>
<?php get_footer(); ?>