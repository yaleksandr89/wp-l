<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<footer class="footer">
    <div class="wrapper">
        <h2 class="blogTitle">Get In Touch With Us</h2>
        <address class="footer__address">4578 Marmora Road,Glasgow D04 89GR</address>
        <div class="footer__phone">
            <img src=<?= WPLANDING_DIR_iMAGES ?>phone.png" alt="phone" class="footer__imgPhone">
            <a href="tel:+78002345678" class="footer__phoneItem">800-2345-678;</a>
            <a href="tel:+78002345679" class="footer__phoneItem">800-2345-679</a>
        </div>
        <div class="footer__workTime">Mon-Sat 8:00 am to 8:00 pm</div>
        <div class="footer__social">
			<?php if ( get_theme_mod( 'footer_facebook_enable' ) ): ?>
                <a href="<?= get_theme_mod( 'footer_facebook_link', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                   id="footer_fb_link"
                   class="footer__socialItem"
                >
                    <i id="footer_fb_icon"
                       class="<?= get_theme_mod( 'footer_facebook_icon', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                       aria-hidden="true">
                    </i>
                </a>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'footer_twitter_enable' ) ): ?>
                <a href="<?= get_theme_mod( 'footer_twitter_link', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                   id="footer_twitter_link"
                   class="footer__socialItem"
                >
                    <i id="footer_twitter_icon"
                       class="<?= get_theme_mod( 'footer_twitter_icon', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                       aria-hidden="true">
                    </i>
                </a>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'footer_skype_enable' ) ): ?>
                <a href="<?= get_theme_mod( 'footer_skype_link', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                   id="footer_skype_link"
                   class="footer__socialItem"
                >
                    <i id="footer_skype_icon"
                       class="<?= get_theme_mod( 'footer_skype_icon', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                       aria-hidden="true">
                    </i>
                </a>
			<?php endif; ?>
	        <?php if ( get_theme_mod( 'footer_youtube_enable' ) ): ?>
                <a href="<?= get_theme_mod( 'footer_youtube_link', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                   id="footer_youtube_link"
                   class="footer__socialItem"
                >
                    <i id="footer_youtube_icon"
                       class="<?= get_theme_mod( 'footer_youtube_icon', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                       aria-hidden="true">
                    </i>
                </a>
	        <?php endif; ?>
	        <?php if ( get_theme_mod( 'footer_instagram_enable' ) ): ?>
                <a href="<?= get_theme_mod( 'footer_instagram_link', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                   id="footer_instagram_link"
                   class="footer__socialItem"
                >
                    <i id="footer_instagram_icon"
                       class="<?= get_theme_mod( 'footer_instagram_icon', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                       aria-hidden="true">
                    </i>
                </a>
	        <?php endif; ?>
	        <?php if ( get_theme_mod( 'footer_vimeo_enable' ) ): ?>
                <a href="<?= get_theme_mod( 'footer_vimeo_link', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                   id="footer_vimeo_link"
                   class="footer__socialItem"
                >
                    <i id="footer_vimeo_icon"
                       class="<?= get_theme_mod( 'footer_vimeo_icon', WPLANDING_GET_THE_MOD_DEFAULT ) ?>"
                       aria-hidden="true">
                    </i>
                </a>
	        <?php endif; ?>
        </div>
        <div class="footer__copyright">
            <div class="footer__logo"><img src=<?= WPLANDING_DIR_iMAGES ?>logo.png" alt="logo" class="headerLeft__logo">
            </div>
            <div class="footer__copy"><?php bloginfo( 'name' ) ?> &#169; <?= date( 'Y' ) ?>. Privacy Policy</div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
