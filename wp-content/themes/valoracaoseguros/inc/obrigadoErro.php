<?php
//TEMPLATE NAME:Erro
require 'inc/variaveis.php';
get_header();
?>
<section id="servicos" class="features section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="section-title">
                    <h2> Houve um erro no envio! </h2>
                    <p>Tente contato pelo nosso e-mail <?php echo $email_erro; ?> </p>
                </div>
            </div>
        </div>
    </div>
</section>

   <?php echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $siteHome . "'>"; ?>

    <?php get_footer(); ?>
