<?php
//TEMPLATE NAME:Page Produtos
require 'inc/variaveis.php';
get_header();
?>
    <!-- Start Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Nossas Soluções</h2>
                    <ul>
                        <li><a href="index.html">Início</a></li>
                        <li class="active"><a href="project.html">project.html</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php
$postsArray = [];
$servicoArray = [];
$servicoSlug = [];

$args = new WP_Query(array(
    //'post_type' => array('seguradoras_av'),
    // 'numberposts' => 11,
    'posts_per_page' => 100,
    'post_type' => 'seguradoras_av',
    'orderby' => 'name',
    'order' => 'ASC',
    'include' => array(),
    'suppress_filters' => true,
    //'offset' => 1
));
if ($args->have_posts()) {
    while ($args->have_posts()) {
        $args->the_post();
        $id = get_the_ID($post->ID, '', '', false);
        $servico = wp_get_post_terms($post->ID, 'servico');
        $tags = wp_get_post_tags($post->ID);
        $foundKeyP = in_array(get_the_title($post->ID, '', '', false), $postsArray);
        $categoria = get_the_category($post->ID, '', '', false);
        $link = get_the_permalink($post->ID, '', '', false);
        if (!$foundKeyP) {
            $novoArray = [
                'id' => $id,
                'titulo' => get_the_title($post->ID, '', '', false),
                'categoriaAsseguradora' => $categoria[0]->name,
                'categoriaAsseguradoraSlug' => $categoria[0]->slug,
                'link' => $link,
                'img' => get_the_post_thumbnail($post->ID, '', '', false),
                'servicos' => $servico
            ];
            array_push($postsArray, $novoArray);
        }
        foreach ($servico as $itemS):
            $itemS->name;
        endforeach;
    }
}

foreach ($postsArray as $itemAPost):
    // echo $itemAPost['titulo'] . '<br>';
    foreach ($itemAPost['servicos'] as $itensS):
        $foundKeyGaleria = in_array($itensS->name, $servicoSlug);
        if (!$foundKeyGaleria) {
            $galeriaArray = [
                'slug' => $itensS->slug,
                'name' => $itensS->name,
            ];
            array_push($servicoSlug, $galeriaArray);
        }
    endforeach;
    endforeach;

        ?>
        <?php $args = array('orderby' => 'name', 'order' => 'ASC', 'hide_empty' => false);
        $argsT = array('post_type' => 'seguradoras_av', 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => false);
        $categories = get_categories($args);
        $tags = get_tags($args);
        $taxomonies = get_taxonomies($argsT);
        ?>
        <!--  Project Archive-->
        <section id="project" class="project archive section">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Project Nav -->
                            <div class="project-nav pt-5">
                                <ul>
                                    <li class="active" data-filter="*">Todas as soluções</li>
                                    <?php foreach ($servicoSlug as $key => $itensServicos): ?>
                                        <li data-filter=".<?php echo $itensServicos['slug'] ?>"><?php echo $itensServicos['name'] ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <!--/ End Project Nav -->
                        </div>
                    </div>
                    <div class="col-9 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="isotop-active">
                            <?php foreach ($postsArray as $itemAPost): ?>
                                <div class="col-md-3 col-sm-4 col-xs-12 <?php foreach ($itemAPost['servicos'] as $itensS):
                                    echo $itensS->slug; ?> <?php endforeach; ?>">
                                    <!-- Single Project -->
                                    <div class="single-project">
                                        <div class="project-head">
                                            <?php echo $itemAPost['img']; ?>
                                            <div class="project-hover">
                                                <h4><a href="<?php echo $itemAPost['link'] ?>">
                                                        <?php echo $itemAPost['titulo'] ?>
                                                    </a>
                                                </h4>
                                                <i class="fa fa-circle-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Single Project -->
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Project Archive -->

        <!-- Contact Us -->
        <section id="contato" class="section contact">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                        <div class="section-title">
                            <h2>Contato</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-md-5 col-sm-6 col-xs-12 wow fadeInUp">
                        <form class="form" method="post" action="mail/mail.php">
                            <div class="form-group mb-3">
                                <input type="text" name="name" placeholder="Nome" required="required">
                            </div>
                            <div class="form-group my-3">
                                <input type="email" name="email" placeholder="E-mail" required="required">
                            </div>
                            <div class="form-group my-3">
                                <input type="text" name="subject" placeholder="Assunto" required="required">
                            </div>
                            <div class="form-group my-3">
                                <textarea name="message" rows="6" placeholder="Deixe sua mensagem"></textarea>
                            </div>
                            <div class="form-group my-3">
                                <button type="submit" class="button primary"><i class="fa-solid fa-paper-plane"></i>Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--/ Contact Form -->
                    <!-- Google Map -->
                    <div class="col-md-7 col-sm-6 col-xs-12 wow fadeInUp">
                        <!-- <div class="project-nav">
                            <ul>
                                <li class="active" data-filter="*">Todas as soluções</li>
                                <li data-filter=".Automovel">Seguro Automóvel</li>
                                <li data-filter=".Patrimonial">Riscos Patrimoniais</li>
                                <li data-filter=".Pessoas">Seguro de Pessoas</li>
                            </ul>
                        </div> -->
                        <div class="contact-map">
                            <div class="map"></div>
                        </div>
                    </div>
                    <!--/ End Google Map -->
                </div>
            </div>
        </section>
        <!--/ End Clients Us -->
        <?php get_footer(); ?>