<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- META INFO
    ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="cache, max-age:0">
    <meta name="robots" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="copyright" content="Copyright © 2018">
    <meta charset="UTF-8">

    <!-- TITLE
    ================================================== -->
    <title><?php wp_title(''); ?> EnXona</title>

    <!-- FAVICONS
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/site.webmanifest">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo esc_url(get_template_directory_uri()); ?>/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- SEO INFO
    ================================================== -->
    <meta name="description" content="Directorio de productos y servicios oficial de Xonacatlán para iOS y Android. EnXona">
    <meta name="keywords" content="en xona, xonacatlan, directorio comercial">
    <meta name="author" content="Iconica Studio">
    <meta name="designer" content="Richard Maya">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>