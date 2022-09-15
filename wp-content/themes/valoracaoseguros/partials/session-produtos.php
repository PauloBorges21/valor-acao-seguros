<?php
require get_template_directory() . '/inc/variaveis.php';
$home = get_page_by_title('page-home');
?>
<section id="solucoes" class="project section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="section-title">
                    <h2><?php echo the_field('titulo_solucoes', $home) ?></h2>
                    <p><?php echo the_field('paragrafo_solucoes', $home) ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                <!-- Project Nav -->
                <div class="project-nav">
                    <ul>
                        <li class="active" data-filter="*">Todas as soluções</li>
                        <li data-filter=".automovel">Automóvel</li>
                        <li data-filter=".patrimonial">Patrimonial</li>
                        <li data-filter=".pessoas">Pessoas</li>
                    </ul>
                </div>
                <!--/ End Project Nav -->
            </div>
        </div>

        <div class="row wow fadeInUp" data-wow-delay="0.4s">
            <div class="isotop-active masonry">
                <?php
                $postsArray = [];
                $servicoArray = [];
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
                        //echo $id.'<br>';
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

                        if(($postsArray['servico']->slug != 'automovel') || ($postsArray['servico']->slug != 'patrimonial') || ($postsArray['servico']->slug != 'patrimonial') ){
                            unset($postsArray[$key]);
                        }

                    }
                }
               // var_dump($postsArray);

                foreach ($postsArray as $itemAPost):
                    ?>
                    <div class="grid-item <?php foreach ($itemAPost['servicos'] as $itensS) {
                      echo $itensS->slug; ?> <?php } ?> ">
                    <!-- Single Project -->
                    <div class="single-project">
                        <div class="project-head">
                            <?php echo $itemAPost['img']; ?>
                            <div class="project-hover">
                                <h4>
                                    <a href="<?php echo $itemAPost['link'] ?>"><?php echo $itemAPost['titulo'] ?></a>
                                </h4>
                                <i class="fa fa-circle-plus"></i>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Project -->
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <!-- Load More -->
                <div class="button">
                    <a href="<?php echo $site_url; ?>produtos" class="btn">Ver todas as soluções</a>
                </div>
                <!--/ End Load More -->
            </div>
        </div>
    </div>
</section>


