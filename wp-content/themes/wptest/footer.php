<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<footer class="site-footer layout-row">
				<span class="site-footer-text layout-col">
					<?= date( 'Y' ) ?>,
					<?php bloginfo( 'name' ) ?>,
					<?php bloginfo( 'description' ) ?>
				</span>
    <div class="layout-col">
        <div class="site-footer-links">
            <a href="#">
                <img src="<?= WPTEST_DIR_iMAGES ?>flickr.jpg" alt="Иконка flickr">
                <span>Wood Design on Flickr</span>
            </a>
            <a href="#">
                <img src="<?= WPTEST_DIR_iMAGES ?>twitter.jpg" alt="Иконка twitter">
                <span>Wood Design on Twitter</span>
            </a>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>