<?php
/*
 *	Template Name: Для страницы контактов
 */
get_header(); ?>
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-full">
			<?php the_post(); ?>
            <h1><?php the_title() ?></h1>
            <div class="contacts-box">
                <div class="contacts-box-content">
                    <p><strong>Address:</strong> Lorem ipsum dolor sit amet</p>
                    <p><strong>Phone:</strong> Lorem ipsum dolor sit amet</p>
                    <p><strong>Email:</strong> Lorem ipsum dolor sit amet</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore et assumenda hic eaque
                        suscipit incidunt blanditiis magni eius atque, similique temporibus doloribus vel tempora
                        veritatis vitae cum, nostrum quibusdam illum cumque libero labore accusamus iste!?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore et assumenda hic eaque
                        suscipit incidunt blanditiis magni eius atque, similique temporibus doloribus vel tempora
                        veritatis vitae cum, nostrum quibusdam illum cumque libero labore accusamus iste!?
                    </p>
                </div>
                <div class="contacts-box-map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad3c12ab499f21a87747e3c2e341f852f39a58bb749dd8379050c862aef6badc9&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <h2>Contact form</h2>
			<?php echo do_shortcode( '[ninja_form id=3]' ) ?>
            <p>Additional text on contacts page under feeadback form!</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore et assumenda hic eaque suscipit
                incidunt blanditiis magni eius atque, similique temporibus doloribus vel tempora veritatis vitae cum,
                nostrum quibusdam illum cumque libero labore accusamus iste! Vitae eveniet tempora suscipit harum
                aperiam itaque, quod debitis. Aut pariatur sapiente mollitia quam distinctio?
            </p>
        </main>
    </div>
<?php get_footer(); ?>