<?php
//TEMPLATE NAME:Page Home
require 'inc/variaveis.php';
get_header();
?>


    <!--/ End Header-->
    <section class="pt-4 pt-md-11 my-3 pb-5 secheader">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <?php
                    $banner_home = get_field('banner_home');
                    $banner_home_url = $banner_home['url'];
                    $banner_home_title = $banner_home['title'];
                    $banner_home_alt = $banner_home['alt'];
                    ?>
                    <img src="<?php echo $banner_home_url; ?>"
                         class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate"
                         alt="pitch meeting" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">
                    <h1 class="display-5 text-md-start banner-title">
                        <?php echo the_field('texto_banner'); ?>
                    </h1>
                    <p class="display-5 banner-p text-md-start"> <?php echo the_field('paragrafo_banner'); ?></p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- Start Features -->
    <section id="servicos" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                    <div class="section-title">
                        <h2>   <?php echo the_field('titulo_servicos'); ?></h2>
                        <p> <?php echo the_field('texto_paragrafo'); ?> </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php if (have_rows('icone_servicos')) : while (have_rows('icone_servicos')) : the_row();
                    $segundos = get_row_index() + 2;
                    $icone = get_sub_field('icones');
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.<?php echo $segundos; ?>s">
                        <!-- Single features -->
                        <div class="single-features">
                            <i class="<?php echo iconesServicos($icone);?>"></i>
<!--                            <i class="--><?//= $iconeN; ?><!--"></i>-->
                            <h4><?php echo the_sub_field('titulo') ?></h4>
                            <?php if (have_rows('insere_item')) : while (have_rows('insere_item')) : the_row(); ?>
                                <li>
                                    <?php echo the_sub_field('paragrafo'); ?>
                                </li>
                            <?php endwhile; endif; ?>

                            </ul>
                        </div>
                        <!--/ End features -->
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <!--/ End Features -->

    <!-- Start Count Down -->
    <section id="countdown" class="count-down section">
        <div class="container">
            <div class="row">
                <?php if (have_rows('icone_destaque')) : while (have_rows('icone_destaque')) : the_row();
                    $segundos = get_row_index() + 2;
                    $icone = get_sub_field('icones');
                    ?>
                    <div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp" data-wow-delay="0.<?php echo $segundos; ?>s">
                        <!-- Single Count -->
                        <div class="single-count">
                            <i class="<?php echo iconesServicos($icone) ?>"></i>
                            <p><?php echo the_sub_field('texto') ?></p>
                        </div>
                        <!--/ End Single Count -->
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <!--/ End Count Down -->

    <!-- Start Project -->
<?php get_template_part('partials/session-produtos', 'session-produtos'); ?>
    <!--/ End Project -->

    <!-- Start Banner -->
    <section id="bannermiddle" class="banner-middle section">
    </section>
    <!--/ End Banner -->

    <!-- Start Team -->
<?php //get_template_part('partials/session-equipe', 'session-equipe'); ?>
    <!--      -->
    <!--/ End Team -->
<?php get_template_part('partials/session-contato', 'session-contato'); ?>


<?php get_footer(); ?>


