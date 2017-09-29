<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package our
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
    <link href='https://fonts.googleapis.com/css?family=Hind+Siliguri|Halant:300,400|Oswald:300,700' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
    <link rel="apple-touch-icon" href="/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
    <!-- IE8 Support: Force Standards Mode (requires support for document.querySelectorAll) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- end IE8 Support -->

    <!-- IE9 Support: MDN PolyFill (requires support for Array.prototype.forEach) -->
    <script type="text/javascript">
        if (!Array.prototype.forEach) {
            Array.prototype.forEach = function (fun /*, thisArg */) {
                "use strict";
                if (this === void 0 || this === null || typeof fun !== "function") throw new TypeError();

                var
                    t = Object(this),
                    len = t.length >>> 0,
                    thisArg = arguments.length >= 2 ? arguments[1] : void 0;

                for (var i = 0; i < len; i++)
                    if (i in t)
                        fun.call(thisArg, t[i], i, t);
            };
        }
    </script>
    <!-- end IE9 Support -->
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'our' ); ?></a>

	<header>
        <?php the_custom_logo(); ?>

        <?php //todo replace with hamburger menu ?>
        <div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <nav>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

