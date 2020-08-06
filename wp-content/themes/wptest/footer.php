<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<?php if (is_active_sidebar('sidebar_footer_left') || is_active_sidebar('sidebar_footer_right')) : ?>
    <footer class="site-footer layout-row">
        <?php dynamic_sidebar('sidebar_footer_left'); ?>
        <div class="layout-col">
            <div class="site-footer-links">
                <?php dynamic_sidebar('sidebar_footer_right'); ?>
            </div>
        </div>
    </footer>
<?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>