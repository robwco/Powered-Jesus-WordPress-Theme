<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link href="https://fonts.cdnfonts.com/css/google-sans" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- HEADER -->
<header class="header">
    <div class="container">
        <div class="text-center">
            <!-- LOGO -->
            <div class="logo">
                <a href="/">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </div>
        </div>
    </div>
</header>