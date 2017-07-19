<!doctype html>
<html class="no-js" lang="">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>" />

    <title>
        <?php wp_title(); ?>
    </title>

    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="shortcut icon" href="<?php echo THEME_URI; ?>/apple-touch-icon.png" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php /* Necessary favicon linking */ ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#b78d2d">
    <meta name="theme-color" content="#b78d2d">
    <?php /* End favicon link */ ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
