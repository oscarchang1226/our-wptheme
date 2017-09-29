<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package our
 */

?>

	<footer id="colophon" class="site-footer">

        <!--
            Social Links
            fb https://www.facebook.com/smith.associates.1984/?fref=ts
            twitter https://twitter.com/smithweb
            linkedin https://www.linkedin.com/company/smith-&-associates/
            wechat (Create a dialog for wechat class="popmake-we-chat pum-trigger")
            email mailto:info@nfsmith.com

        -->

        <div class="social">
	        <?php the_custom_logo(); ?>
            <a href="https://www.facebook.com/smith.associates.1984/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/smithweb" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/smith-&-associates/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="popmake-we-chat pum-trigger"><i class="fa fa-weixin"></i></a>
            <a href="mailto:info@nfsmith.com"><i class="fa fa-envelope"></i></a>
        </div>

        <div class="links">
            <ul>
                <li><h3><a href="/what-we-do/">What We Do</a></h3></li>
                <li><a href="/what-we-do/supply-chain-services/">Supply Chain Services</a></li>
                <li><a href="/what-we-do/procurement/procurement-services/">Procurement</a></li>
                <li><a href="/category/market-blog/">Market Blog</a></li>
            </ul>

            <ul>
                <li><h3><a href="/why-smith/">Why Smith</a></h3></li>
                <li><a href="/why-smith/quality/">Quality</a></li>
                <li><a href="/why-smith/global-locations/">Global Reach</a></li>
            </ul>

            <ul>
                <li><h3><a href="/why-smith/quality/careers/">Careers</a></h3></li>
                <li><a href="/employment-opportunities/">Postings</a></li>
                <li><a href="/claudio-chan/">People</a></li>
                <li><a href="/environmental/">Sustainability</a></li>
                <li><a href="/leadership/">Leadership</a></li>
            </ul>

            <ul>
                <li><h3><a href="/why-smith/global-locations/">Contact</a></h3></li>
                <li><a href="/why-smith/global-locations/">Global Locations</a></li>
                <li><a href="tel:1-800-468-7866">1.800.468.7866</a></li>
                <li><a href="tel:1-800-468-7866">1.800.HOUSTON</a></li>
                <li><a href="mailto:info@nfsmith.com">info@nfsmith.com</a></li>
            </ul>

            <div class="orbs">
                <div class="footer-dot"></div>
                <div class="footer-dot"></div>
                <div class="footer-dot"></div>
            </div>

            <div class="buttons">
                <a href="http://partsearch.smithweb.com/#/part_search" target="_blank">Part Search</a>
                <a href="https://servicechain.nfsmith.com/servicechain/home.seam" target="_blank">My Smith</a>
                <a href="/employment-opportunities/" target="_blank">Job Search</a>
                <a href="http://partsearch.smithweb.com/#/submit_rfq" target="_blank">Submit Requirement</a>
            </div>
        </div>

        <div class="copyright">
            <span>© Copyright 2017<!-- <?php the_time('Y') ?> --></span>
        </div>
        <div class="credit">
            <a href="https://owdt.com/" target="_blank"><span>website<br >design</span></a>
            <a href="https://owdt.com/" target="_blank"><img src="/wp-content/themes/smithweb/images/owdt.svg" alt="owdt" /></a>
        </div>

<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'our' ) ); ?><!--">--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'our' ), 'WordPress' );
//			?><!--</a>-->
<!--			<span class="sep"> | </span>-->
<!--			--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'our' ), 'our', '<a href="http://underscores.me/">Underscores.me</a>' );
//			?>
<!--		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
