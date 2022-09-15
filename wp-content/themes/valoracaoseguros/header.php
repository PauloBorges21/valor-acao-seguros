<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require 'inc/variaveis.php';?>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:title" content="Valor-Ação Seguros">
    <meta name="description" content="Assessoria de Seguros com mais de 25 anos de atuação no mercado. | Valor-Ação Seguros">
    <meta property="og:url" content="http://www.valoracaoseguros.com.br/">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"
            type="text/javascript"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Personal Stylesheet -->
    <link href="<?php echo $caminho;?>/assets/css/valor.site.css" rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- Favicons -->
    <link href="<?php echo $caminho;?>/assets/images/favicon.jpg" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo $caminho;?>/assets/favicon.jpg" rel="apple-touch-icon">

    <title>Valor-Ação Seguros | Assessoria de Seguros com mais de 25 anos de atuação no mercado.</title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if (is_page($home)){ ?>
        <style>
            .count-down.section {
                padding-top: 60px;
                padding-bottom: 90px;
                background-image: url("<?php the_field('imagem_banner_destaque');?>");
                background-size: cover;
                background-position: center center;
                background-attachment: fixed;
            }

            .banner-middle {
                background-image: url("<?php the_field('banner_solucoes');?>");
                background-size: cover;
                background-position: 55% 90%;
                background-attachment: fixed;
                height: 50vh;
            }
        </style>
    <?php } ?>


    <?php wp_head(); ?>
</head>

<body class="js">
<!-- Start Header -->
<header class="header clearfix" id="header">
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="logo">
                        <a class="" href="<?php echo $site_url; ?>">
                            <img src="<?php echo $caminho; ?>/assets/images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                        <nav class="navbar col-12 d-flex justify-content-end">
                            <ul class="nav menu">
                                <?php if(is_page($home)){ ?>
                                    <li><a href="<?php echo $site_url?>sobre">Sobre Nós</a>
                                <li><a href="#servicos">Serviços</a></li>
                                <li><a href="#solucoes">Soluções</a></li>
<!--                                <li><a href="#equipe">Equipe</a></li>-->
                                <li><a href="#contato">Contato</a></li>
                                <li><a href="<?php echo $site_url?>utilidades">Utilidades</a>

                               <?php } else { ?>
                                    <li><a href="#sobre">Sobre Nós</a>
                                <li><a href="<?php echo $site_url?>#servicos">Serviços</a></li>
                                <li><a href="<?php echo $site_url?>#solucoes">Soluções</a></li>
<!--                                <li><a href="#equipe">Equipe</a></li>-->
                                <li><a href="#contato">Contato</a></li>
                                <li><a href="<?php echo $site_url?>utilidades">Utilidades</a>
                               <?php }  ?>

                            </ul>
                        </nav>
                    </div>
                    <!--/ End Main Menu -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>