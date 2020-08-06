<?php
/**
 * The home page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
get_header(); ?>
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-main">
            <h1>Wood design - home page</h1>
            <div class="posts-flow layout-row">
                <article class="post-card layout-col">
                    <a href="post-sample.html" class="post-card-link">
                        <img src="<?= WPTEST_DIR_iMAGES ?>1st_Design.jpg" alt="1st Design">
                    </a>
                    <h2 class="post-card-title">Fictional Design Studio Layout</h2>
                    <div class="post-card-intro">This work description goes here. Just simple and short text about this
                        work.
                    </div>
                </article>
                <article class="post-card layout-col">
                    <a href="post-sample.html" class="post-card-link">
                        <img src="<?= WPTEST_DIR_iMAGES ?>2nd_Design.png" alt="1st Design">
                    </a>
                    <h2 class="post-card-title">Creative Mouse Design</h2>
                    <div class="post-card-intro">This work description goes here. Just simple and short text about this
                        work.
                    </div>
                </article>
                <article class="post-card layout-col">
                    <a href="post-sample.html" class="post-card-link">
                        <img src="<?= WPTEST_DIR_iMAGES ?>3rd_Design.png" alt="1st Design">
                    </a>
                    <h2 class="post-card-title">Real Estate Company Layout</h2>
                    <div class="post-card-intro">This work description goes here. Just simple and short text about this
                        work.
                    </div>
                </article>
                <article class="post-card layout-col">
                    <a href="post-sample.html" class="post-card-link">
                        <img src="<?= WPTEST_DIR_iMAGES ?>4th_Design.png" alt="1st Design">
                    </a>
                    <h2 class="post-card-title">Web Design Fan - Blog for designers</h2>
                    <div class="post-card-intro">This work description goes here. Just simple and short text about this
                        work.
                    </div>
                </article>
            </div>
        </main>
        <aside class="layout-col layout-col-aside">
            <div class="aside-box">
                <div class="tw-wrapper">
                    <div class="tw-inner">
                        <div class="tw-text">
                            <span>Free Wood Design PSD Template. For more freebies and photoshop tutorials follow @webdesignfan.</span>
                        </div>
                        <div class="tw-follow">
                            <span>Follow Us on Twitter</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="aside-box">
                <div class="h2">Categories</div>
                <ul class="secondery-navigation">
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Web Apps</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Print Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Design Partners</a></li>
                    <li><a href="#">Online Shops</a></li>
                    <li><a href="#">Online Marketing</a></li>
                </ul>
            </div>
            <div class="aside-box">
                <div class="h2">Contact Us</div>
                <ul class="contacts-list">
                    <li>E-mail: hello@wp.dmitrylavrik.ru</li>
                    <li>Phone: +111 111111 11 11</li>
                    <li>Twitter: @noooooooooootwitter</li>
                </ul>
            </div>
        </aside>
    </div>
<?php get_footer();