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

    <!-- GOOGLE ANALYTICS
    ================================================== -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121193876-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-121193876-5');
    </script> -->

    <!-- FACEBOOK PIXEL
    ================================================== -->
    <!-- <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '248871415811338');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=248871415811338&ev=PageView&noscript=1"
    /></noscript> -->

    <!-- SEO INFO
    ================================================== -->
    <meta name="description" content="Directorio de productos y servicios oficial de Xonacatlán para iOS y Android. EnXona">
    <meta name="keywords" content="en xona, xonacatlan, directorio comercial">
    <meta name="author" content="Iconica Studio">
    <meta name="designer" content="Richard Maya">

    <!-- STYLESHEETS
    ================================================== -->
    <link rel="stylesheet" href="scss/enxona.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>