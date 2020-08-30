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
	<wrapper>
		<h2 class="blogTitle">Get In Touch With Us</h2>
		<address class="footer__address">4578 Marmora Road,Glasgow D04 89GR</address>
		<div class="footer__phone">
			<img src=<?= WPLANDING_DIR_iMAGES ?>phone.png" alt="phone" class="footer__imgPhone">
			<a href="tel:+78002345678" class="footer__phoneItem">800-2345-678;</a>
			<a href="tel:+78002345679" class="footer__phoneItem">800-2345-679</a>
		</div>
		<div class="footer__workTime">Mon-Sat 8:00 am to 8:00 pm</div>
		<div class="footer__social">
			<a href="#" class="footer__socialItem footer__socialItem--green"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#" class="footer__socialItem"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#" class="footer__socialItem"><i class="fa fa-skype" aria-hidden="true"></i></a></a>
			<a href="#" class="footer__socialItem"><i class="fa fa-google-plus" aria-hidden="true"></i></a></a>
			<a href="#" class="footer__socialItem"><i class="fa fa-instagram" aria-hidden="true"></i></a></a>
			<a href="#" class="footer__socialItem"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></a>
		</div>
		<div class="footer__copyright">
			<div class="footer__logo"><img src=<?= WPLANDING_DIR_iMAGES ?>logo.png" alt="logo" class="headerLeft__logo"></div>
			<div class="footer__copy">wegy &#169; 2015.  Privacy Policy </div>
		</div>
	</wrapper>
</footer>
<?php wp_footer(); ?>
</body>
</html>
