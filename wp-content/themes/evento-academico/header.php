<!doctype html>
<html lang="pt_BR">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="lorem">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="img/icone-ea.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Evento Acadêmico">
    <link rel="apple-touch-icon-precomposed" href="img/icone-ea.png">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/icone-ea.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link href='http://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cidades-estados-1.2-utf8.js"></script> <!-- talvez retirar -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/zebra_datepicker.js"></script> <!-- talvez retirar -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/jquery.mobile-1.4.5.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/metallic.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body>