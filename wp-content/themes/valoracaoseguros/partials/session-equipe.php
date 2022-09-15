<?php
require get_template_directory() . '/inc/variaveis.php';
$home = get_page_by_title('page-home');
?>

<?php
$args = new WP_Query(array(
    //'post_type' => array('seguradoras_av'),
    // 'numberposts' => 11,
    'posts_per_page' => 1,
    'post_type' => 'equipe_av',
    'orderby' => 'data',
    'order' => 'ASC',
    'include' => array(),
    'suppress_filters' => true,
    //'offset' => 1
));

if ($args->have_posts()) {
    while ($args->have_posts()) {
        $args->the_post();
        ?>
        <section id="equipe" class="team-area">
            <div class="container">
                <div class="row my-5">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="section-title">
                            <h2><?php the_title()?></h2>
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
                <div class="row">
        <?php if (have_rows('insere_equipe')) : while (have_rows('insere_equipe')) : the_row();
            $imagem_equipe = get_sub_field('imagem_equipe');
            $imagem_equipe_url = $imagem_equipe['url'];
            $imagem_equipe_title = $imagem_equipe['title'];
            $imagem_equipe_alt = $imagem_equipe['alt'];

            $nome = get_sub_field('nome');
            $funcao = get_sub_field('funcao');
            $estabelecimento = get_sub_field('estabelecimento');
            $telefone_para_contato = get_sub_field('telefone_para_contato');


            ?>
                    <div class="col-md-4 col-sm-6 single-team">
            <?php if (!empty($telefone_para_contato)) {
                echo '<a href="https://api.whatsapp.com/send?phone=55"'. $telefone_para_contato.'" target="_blank">';
            }
                ?>
                        <div class="inner">
                            <div class="team-img">
                                <img src="<?php echo $imagem_equipe_url;?>" alt="<?php echo $imagem_equipe_alt;?>" title="<?php echo $imagem_equipe_title;?>">
                            </div>
                            <div class="team-content">
                                <h4><?php echo $nome;?></h4>
                                <span class="desg"><?php echo $funcao?></span>
                                <span class="desg"><?php echo $estabelecimento?></span>
                            </div>
                        </div>
                <?php if (!empty($telefone_para_contato)) {
                    echo '</a>';
                }
                    ?>
                    </div>
        <?php endwhile; else : endif; ?>

                </div>
            </div>
        </section>
        <?php
    }
}