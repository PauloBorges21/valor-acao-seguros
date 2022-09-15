<?php
require 'inc/variaveis.php';
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="section">
        <?php
        $imagem_banner = get_sub_field('banner');
        $imagem_banner_url = $imagem_banner['url'];
        $imagem_banner_title = $imagem_banner['title'];
        $imagem_banner_alt = $imagem_banner['alt'];
        ?>
        <picture class="cpict-banner">
            <source srcset="<?php echo $imagem_banner_url; ?>" type="image/jpg">
            <img src="<?php echo $imagem_banner_url; ?>" class="img-fluid" alt="<?php echo $imagem_banner_alt ?>"
                 title="<?php echo $imagem_banner_title; ?>">
        </picture>
    </section>

    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">

                    <!-- Heading -->
                    <h1 class="ctitle-ger text-center">
                        <?php the_title(); ?>
                    </h1>

                    <div class="row mt-5">
                        <?php if (have_rows('insere_bloco_conteudo')) : while (have_rows('insere_bloco_conteudo')) : the_row();
                            $titulo_lista = get_sub_field('titulo_lista');
                            if (get_sub_field('icone') == 'informacao') {
                                $icone = '<path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S224 177.7 224 160C224 142.3 238.3 128 256 128zM296 384h-80C202.8 384 192 373.3 192 360s10.75-24 24-24h16v-64H224c-13.25 0-24-10.75-24-24S210.8 224 224 224h32c13.25 0 24 10.75 24 24v88h16c13.25 0 24 10.75 24 24S309.3 384 296 384z" />';
                            } elseif (get_sub_field('icone') == 'aceitacao') {
                                $icone = '<path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM339.8 211.8C350.7 200.9 350.7 183.1 339.8 172.2C328.9 161.3 311.1 161.3 300.2 172.2L192 280.4L147.8 236.2C136.9 225.3 119.1 225.3 108.2 236.2C97.27 247.1 97.27 264.9 108.2 275.8L172.2 339.8C183.1 350.7 200.9 350.7 211.8 339.8L339.8 211.8z"/>';
                            } elseif (get_sub_field('icone') == 'pagamento1') {
                                $icone = '<path d="M168 336C181.3 336 192 346.7 192 360C192 373.3 181.3 384 168 384H120C106.7 384 96 373.3 96 360C96 346.7 106.7 336 120 336H168zM360 336C373.3 336 384 346.7 384 360C384 373.3 373.3 384 360 384H248C234.7 384 224 373.3 224 360C224 346.7 234.7 336 248 336H360zM512 32C547.3 32 576 60.65 576 96V416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H512zM512 80H64C55.16 80 48 87.16 48 96V128H528V96C528 87.16 520.8 80 512 80zM528 224H48V416C48 424.8 55.16 432 64 432H512C520.8 432 528 424.8 528 416V224z"/>';
                            } elseif (get_sub_field('icone') == 'pagamento2') {
                                $icone = '<path d="M512 64C547.3 64 576 92.65 576 128V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H512zM272 192C263.2 192 256 199.2 256 208C256 216.8 263.2 224 272 224H496C504.8 224 512 216.8 512 208C512 199.2 504.8 192 496 192H272zM272 320H496C504.8 320 512 312.8 512 304C512 295.2 504.8 288 496 288H272C263.2 288 256 295.2 256 304C256 312.8 263.2 320 272 320zM164.1 160C164.1 148.9 155.1 139.9 143.1 139.9C132.9 139.9 123.9 148.9 123.9 160V166C118.3 167.2 112.1 168.9 108 171.1C93.06 177.9 80.07 190.5 76.91 208.8C75.14 219 76.08 228.9 80.32 237.8C84.47 246.6 91 252.8 97.63 257.3C109.2 265.2 124.5 269.8 136.2 273.3L138.4 273.9C152.4 278.2 161.8 281.3 167.7 285.6C170.2 287.4 171.1 288.8 171.4 289.7C171.8 290.5 172.4 292.3 171.7 296.3C171.1 299.8 169.2 302.8 163.7 305.1C157.6 307.7 147.7 309 134.9 307C128.9 306 118.2 302.4 108.7 299.2C106.5 298.4 104.3 297.7 102.3 297C91.84 293.5 80.51 299.2 77.02 309.7C73.53 320.2 79.2 331.5 89.68 334.1C90.89 335.4 92.39 335.9 94.11 336.5C101.1 339.2 114.4 343.4 123.9 345.6V352C123.9 363.1 132.9 372.1 143.1 372.1C155.1 372.1 164.1 363.1 164.1 352V346.5C169.4 345.5 174.6 343.1 179.4 341.9C195.2 335.2 207.8 322.2 211.1 303.2C212.9 292.8 212.1 282.8 208.1 273.7C204.2 264.7 197.9 258.1 191.2 253.3C179.1 244.4 162.9 239.6 150.8 235.9L149.1 235.7C135.8 231.4 126.2 228.4 120.1 224.2C117.5 222.4 116.7 221.2 116.5 220.7C116.3 220.3 115.7 219.1 116.3 215.7C116.7 213.7 118.2 210.4 124.5 207.6C130.1 204.7 140.9 203.1 153.1 204.1C157.5 205.7 171 208.3 174.9 209.3C185.5 212.2 196.5 205.8 199.3 195.1C202.2 184.5 195.8 173.5 185.1 170.7C180.7 169.5 170.7 167.5 164.1 166.3L164.1 160z"/>';
                            } elseif (get_sub_field('icone') == 'aceitacao') {
                                $icone = '<path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM339.8 211.8C350.7 200.9 350.7 183.1 339.8 172.2C328.9 161.3 311.1 161.3 300.2 172.2L192 280.4L147.8 236.2C136.9 225.3 119.1 225.3 108.2 236.2C97.27 247.1 97.27 264.9 108.2 275.8L172.2 339.8C183.1 350.7 200.9 350.7 211.8 339.8L339.8 211.8z"/>';
                            } elseif (get_sub_field('icone') == 'vistoria') {
                                $icone = '<path d="M248 104C248 117.3 237.3 128 224 128C210.7 128 200 117.3 200 104V24C200 10.75 210.7 0 224 0C237.3 0 248 10.75 248 24V104zM153.8 160H294.2C327.1 160 358.1 181.3 369.5 213.1L397.8 292.4C417.9 300.9 432 320.8 432 344V480C432 497.7 417.7 512 400 512H384C366.3 512 352 497.7 352 480V448H96V480C96 497.7 81.67 512 64 512H48C30.33 512 16 497.7 16 480V344C16 320.8 30.08 300.9 50.16 292.4L78.49 213.1C89.86 181.3 120 160 153.8 160H153.8zM153.8 224C147.1 224 141 228.3 138.8 234.6L119.7 288H328.3L309.2 234.6C306.1 228.3 300.9 224 294.2 224H153.8zM96 392C109.3 392 120 381.3 120 368C120 354.7 109.3 344 96 344C82.75 344 72 354.7 72 368C72 381.3 82.75 392 96 392zM352 344C338.7 344 328 354.7 328 368C328 381.3 338.7 392 352 392C365.3 392 376 381.3 376 368C376 354.7 365.3 344 352 344zM7.029 39.03C16.4 29.66 31.6 29.66 40.97 39.03L88.97 87.03C98.34 96.4 98.34 111.6 88.97 120.1C79.6 130.3 64.4 130.3 55.03 120.1L7.029 72.97C-2.343 63.6-2.343 48.4 7.029 39.03V39.03zM407 39.03C416.4 29.66 431.6 29.66 440.1 39.03C450.3 48.4 450.3 63.6 440.1 72.97L392.1 120.1C383.6 130.3 368.4 130.3 359 120.1C349.7 111.6 349.7 96.4 359 87.03L407 39.03z" />';
                            }elseif (get_sub_field('icone') == 'telefone') {
                                $icone = '<path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96C448 60.65 419.3 32 384 32zM351.6 321.5l-11.62 50.39c-1.633 7.125-7.9 12.11-15.24 12.11c-126.1 0-228.7-102.6-228.7-228.8c0-7.328 4.984-13.59 12.11-15.22l50.38-11.63c7.344-1.703 14.88 2.109 17.93 9.062l23.27 54.28c2.719 6.391 .8828 13.83-4.492 18.22L168.3 232c16.99 34.61 45.14 62.75 79.77 79.75l22.02-26.91c4.344-5.391 11.85-7.25 18.24-4.484l54.24 23.25C349.5 306.6 353.3 314.2 351.6 321.5z"/>';
                            }
                            ?>
                            <div class="col-md-6">
                                <div class="icon-box d-flex flex-wrap justify-content-start">
                                    <div class="icon-box-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="38" fill="#418EF2"><?= $icone; ?></svg></div>
                                    <div class="icon-box-title d-block">
                                        <h6><?= $titulo_lista; ?></h6>
                                    </div>
                                    <?php if (have_rows('insere_bloco')) : while (have_rows('insere_bloco')): the_row(); ?>
                                        <ul class="icon-box-content">
                                            <?php if (have_rows('insere_lista')) : while (have_rows('insere_lista')): the_row(); ?>
                                                <?php if (get_sub_field('tem_lista_sem_link')) {
                                                    if (have_rows('insere_lista_sem_link')) : while (have_rows('insere_lista_sem_link')): the_row();
                                                        $lista = get_sub_field('item_lista');
                                                        echo '<li>' . $lista . '</li>';
                                                    endwhile;
                                                    else: endif;
                                                } else {
                                                    if (have_rows('insere_lista_com_link')) : while (have_rows('insere_lista_com_link')): the_row();
                                                        $link = get_sub_field('link');
                                                        if ($link):
                                                            $link_url = $link['url'];
                                                            $link_title = $link['title'];
                                                            $link_target = $link['target'] ? $link['target'] : '_self';

                                                            echo '<li><a href="' . esc_url($link_url) . '" target="' . esc_attr($link_target) . '">' . esc_html($link_title) . '</a>';
                                                        endif;
                                                    endwhile;
                                                    else: endif;
                                                } ?>
                                            <?php endwhile; else: endif; ?>
                                        </ul>
                                    <?php endwhile; else: endif; ?>
                                </div>
                            </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </div> <!-- / .row -->
            
        </div> <!-- / .container -->
    </section>

<?php endwhile; else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
