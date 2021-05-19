<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <meta name="format-detection" content="telephone=no"/>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <?php if (is_front_page()) : ?>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <?php endif; ?>
    <?php
    wp_head();
    ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_field('favicon', get_option('page_on_front')); ?>">
    <?php global $template; ?>
</head>
<body>

<!-- header -->
<header id="header" class="header-section
        <?php if( is_archive()
                or is_singular('post')
                or  basename( $template ) === 'page-compatibility.php' ): ?>
            header-section--dark
        <?php endif;?>
">
    <?php if (have_rows('screens')): ?>
        <?php while (have_rows('screens')) : the_row(); ?>
            <?php if (get_row_layout() == 'screen_1'): ?>
                
            <?php elseif (get_row_layout() == 'screen_2'): ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="header">
        <a href="<?php if (!is_front_page()) : ?><?php echo get_home_url();  ?><?php endif; ?>" class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="99.872" height="79.097" viewBox="0 0 99.872 79.097">
                <g id="logo" transform="translate(0 -.214)">
                    <path id="Fill_1" d="M25.3 58.435L0 43.826V14.608l13.736-7.93 8.09 4.672a5.131 5.131 0 1 1-2.167 3.75l-5.924-3.42-9.4 5.427v24.216l7.233 4.177V21.286l2.167-1.251L34.7 32.142V10.433L20.967 2.5 25.3 0l25.3 14.608v29.218l-13.73 7.929-8.091-4.671a5.132 5.132 0 1 1 2.167-3.754l5.924 3.42 9.4-5.426V17.112l-7.232-4.177v24.212L36.87 38.4 15.9 26.293V48l13.735 7.93-4.334 2.5zm.532-17.472a1.917 1.917 0 1 0 1.658 2.875 1.917 1.917 0 0 0-1.658-2.875zm-1.059-27.328a1.916 1.916 0 1 0 .957.257 1.923 1.923 0 0 0-.957-.257z" class="cls-2" transform="translate(23.834 .214)"/>
                    <g id="Group_6" transform="translate(0 66.49)">
                        <path id="Clip_5-2" fill="none" d="M0 0h99.872v12.66H0z" transform="translate(0 .16)"/>
                        <g id="Group_6-2" clip-path="url(#clip-path)">
                            <path id="Fill_4" d="M98.508 12.66l-1.45-1.294a6.666 6.666 0 0 1-1.692.837 6.334 6.334 0 0 1-1.986.3 6.49 6.49 0 0 1-2.557-.492 6 6 0 0 1-3.283-3.323 6.5 6.5 0 0 1 0-4.836 6.1 6.1 0 0 1 1.313-2A6.3 6.3 0 0 1 93.413 0a6.488 6.488 0 0 1 2.556.492 6 6 0 0 1 3.281 3.325 6.349 6.349 0 0 1 .467 2.418 6.212 6.212 0 0 1-.32 1.986 6.287 6.287 0 0 1-.906 1.744l1.382 1.174-1.365 1.521zM93.379 1.952a4.008 4.008 0 0 0-1.65.337 3.917 3.917 0 0 0-1.287.915 4.227 4.227 0 0 0-.842 1.364 4.745 4.745 0 0 0 0 3.334 4.238 4.238 0 0 0 .846 1.373 4.047 4.047 0 0 0 1.3.932 3.976 3.976 0 0 0 1.658.346 3.9 3.9 0 0 0 1.122-.156 3.759 3.759 0 0 0 .95-.432L93.413 8.2l1.364-1.555 2.09 1.9a3.782 3.782 0 0 0 .466-1.063 4.7 4.7 0 0 0 .156-1.218 4.628 4.628 0 0 0-.3-1.667 4.254 4.254 0 0 0-.849-1.367 4.048 4.048 0 0 0-1.3-.933 3.989 3.989 0 0 0-1.661-.345zM51.568 12.5a6.488 6.488 0 0 1-2.556-.492 6.088 6.088 0 0 1-1.986-1.338 6.158 6.158 0 0 1-1.3-1.986 6.5 6.5 0 0 1 0-4.836 6.115 6.115 0 0 1 1.313-2A6.3 6.3 0 0 1 51.6 0a6.5 6.5 0 0 1 2.557.492 6 6 0 0 1 3.281 3.325 6.5 6.5 0 0 1 0 4.836 6.1 6.1 0 0 1-1.313 2 6.294 6.294 0 0 1-4.557 1.847zm0-10.552a4.014 4.014 0 0 0-1.65.337 3.922 3.922 0 0 0-1.286.915 4.232 4.232 0 0 0-.838 1.364 4.745 4.745 0 0 0 0 3.334 4.256 4.256 0 0 0 .846 1.373 4.047 4.047 0 0 0 1.3.932 4.18 4.18 0 0 0 3.307.009 3.934 3.934 0 0 0 1.292-.912 4.215 4.215 0 0 0 .837-1.364 4.745 4.745 0 0 0 0-3.334 4.237 4.237 0 0 0-.846-1.372 4.054 4.054 0 0 0-1.3-.933 4 4 0 0 0-1.662-.345zM32.64 12.3h-2.107V.208H32.5l6.463 8.359V.208h2.107V12.3h-1.778L32.64 3.7v8.6zm-30.533 0H0V.208h1.967l6.462 8.359V.208h2.107V12.3H8.76L2.107 3.7v8.6zm14.3 0H14.23L19.55.121h1.969L26.837 12.3h-2.244l-.418-.995C22.893 8.251 22.12 6.409 20.5 2.66c-1.2 2.8-1.727 4.048-2.339 5.5-.46 1.091-.935 2.215-1.755 4.14zm67.043 0h-9.034V.208h8.947v1.917h-6.84v3.108h6.062V7.15h-6.063v3.23h6.926v1.92zm-12.883 0H62.1V.208h2.11v10.173h6.356V12.3z" class="cls-1" transform="translate(0 .16)"/>
                        </g>
                    </g>
                </g>
            </svg>
        </a>
        <div class="main-menu-wrap">
            <ul class="main-menu">
                <li class="menu-item-has-children">
                    <span></span>
                    <a href="vital.html">THE VITAL SHIRT</a>
                    <ul class="sub-menu">
                        <li><a href="run.html">RUN</a></li>
                        <li><a href="training.html">GYM</a></li>
                        <li><a href="ski.html">SKI</a></li>
                        <li><a href="bike.html">BIKE</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <span></span>
                    <a href="products.html">PRODUCTS</a>
                    <ul class="sub-menu">
                        <li><a href="electroskin.html">ElectroSkin™</a></li>
                        <li><a href="phantomtape.html">PhantomTape™</a></li>
                        <li><a href="phantomlink.html">PhantomLink</a></li>
                        <li><a href="services.html">Services</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">JOURNAL</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="contacts.html">CONTACT</a></li>
            </ul>
        </div>
        <span class="tog-nav">
            <span></span>
        </span>
    </div>
</header>






