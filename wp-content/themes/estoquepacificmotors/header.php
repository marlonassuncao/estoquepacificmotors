<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/app/styles/reset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/app/styles/main.min.css">
    <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/app/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/app/images/logo.png" alt="<?php wp_title(); ?>">
            </a>
        </div>
    </header>