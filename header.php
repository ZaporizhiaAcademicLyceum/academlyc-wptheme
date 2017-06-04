<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon-begin -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png?v=08012016">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png?v=08012016">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png?v=08012016">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png?v=08012016">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png?v=08012016">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png?v=08012016">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png?v=08012016">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png?v=08012016">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png?v=08012016">
    <link rel="icon" type="image/png" href="/favicon-32x32.png?v=08012016" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png?v=08012016" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-96x96.png?v=08012016" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png?v=08012016" sizes="16x16">
    <link rel="manifest" href="/manifest.json?v=08012016">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=08012016" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico?v=08012016">
    <meta name="apple-mobile-web-app-title" content="Академічний ліцей">
    <meta name="application-name" content="Академічний ліцей">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=08012016">
    <!-- favicon-end -->
    <meta name="theme-color" content="#305973">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <script type="text/javascript" src="/wp-content/themes/academlyc/js/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/tether/1.4.0/tether.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-primary">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Меню">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="/wp-content/themes/academlyc/img/zal2.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <?php //bloginfo('name'); ?>Академічний ліцей
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            if (has_nav_menu('left-menu')) :
                wp_nav_menu(array(
                    'container' => false,
                    'depth' => 2,
                    'menu_class' => 'navbar-nav',
                    'theme_location' => 'left-menu',
                    'walker' => new BS_Nav_Menu()
                ));
            endif;
            if (has_nav_menu('right-menu')) :
                wp_nav_menu(array(
                    'container' => false,
                    'depth' => 2,
                    'menu_class' => 'navbar-nav navbar-right',
                    'theme_location' => 'right-menu',
                    'walker' => new BS_Nav_Menu()
                ));
            endif; ?>
        </div>
    </div>
</nav>