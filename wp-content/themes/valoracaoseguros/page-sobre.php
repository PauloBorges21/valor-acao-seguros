<?php
//TEMPLATE NAME:Page Sobre
require 'inc/variaveis.php';
get_header();
?>



<!-- Start Breadcrumbs -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Bem-vindo à Valor-Ação</h2>
                <ul>
                    <li><a href="index.html">Início</a></li>
                    <li class="active"><a href="about.html">Sobre Nós</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="section-title">
                    <h2><?php the_field('titulo_principal');?></h2>
                    <p><?php the_field('paragrafo_principal');?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="about-content">
                    <h2><?php the_field('conteudo_pagina_titulo');?></h2>
                    <?php if (have_rows('insere_paragrafo')) : while (have_rows('insere_paragrafo')) : the_row(); ?>

                    <p><?php the_sub_field('paragrafo');?></p>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="about-video">
                    <div class="single-video">
                        <?php
                        $imagem_destaque = get_field('imagem_destaque');
                        $imagem_destaque_url = $imagem_destaque['url'];
                        $imagem_destaque_title = $imagem_destaque['title'];
                        $imagem_destaque_alt = $imagem_destaque['alt'];
                        ?>
                        <img src="<?php echo $imagem_destaque_url?>" alt="<?php echo $imagem_destaque_alt?>" title="<?php echo $imagem_destaque_title?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Team -->
<!-- Start Team -->
<?php //get_template_part('partials/session-equipe', 'session-equipe'); ?>
<!--      -->
<!--/ End Team -->
<?php get_template_part('partials/session-contato', 'session-contato'); ?>




















<?php get_footer();?>
