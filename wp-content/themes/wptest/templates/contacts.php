<?php
/*
 *	Template Name: Для страницы контактов
 *  Template Post Type: post, page
 */
get_header();
$acfFields = get_fields();
?>
    <div class="content-wrapper layout-row">
        <main class="layout-col layout-col-full">
			<?php the_post(); ?>
            <h1><?php the_title() ?></h1>
            <div class="contacts-box">
                <div class="contacts-box-content">
					<?= $acfFields['txt_undex_yandex_map'] ?>
                </div>
                <div class="contacts-box-map">
					<?= $acfFields['url_to_yandeks_map'] ?>
                </div>
            </div>
            <h2>Contact form</h2>
			<?php echo do_shortcode( '[ninja_form id=3]' ) ?>
			<?= $acfFields['txt_after_contact_form'] ?>
        </main>
    </div>
<?php get_footer(); ?>