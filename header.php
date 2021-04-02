<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  <?php bloginfo( 'name' ); ?> </title>  

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css" type="text/css" media="screen" />
 
<?php wp_head(); ?>
</head>
<body>

<div class="infos-topo"><div class="container"> 
    <div class="logo"> <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="logo"></a></div>

    <div class="menu">
        <a class="active" href="/assistir/filmes"> Filmes </a>
        <a class="active" href="/assistir/documentarios"> Documentários </a>
        <a class="active" href="/assistir/series"> Séries </a>
    </div>
</div></div> 
 

<div class="menu-cel">
<a href="/assistir/filmes"><div class="filmes-c"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/filmes.svg" alt="filmes"><br> Filmes </div></a>
<a href="/assistir/documentarios"><div class="filmes-c"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/documentarios.svg" alt="documentarios"> <br> Documentarios </div></a>
<a href="/assistir/series"><div class="filmes-c"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/series.svg" alt="series"><br> Séries </div></a>
 
</div>