<div class="col-md-5 col-sm-6 col-xs-12 wow fadeInUp">
    <form class="form formphp" method="POST" action="<?php echo esc_url(get_template_directory_uri())?>/enviar.php">
        <div class="form-group mb-3">
            <input type="text" name="name" id="nome" placeholder="Nome" >
        </div>
        <div class="form-group my-3">
            <input type="email" id="email" name="email" placeholder="E-mail" required="required">
        </div>

        <div class="form-group my-3">
            <input type="text" id="cep_end" name="cep" placeholder="CEP" required="required">
        </div>
        <div class="form-group my-3">
            <input type="text" id="assunto" name="subject" placeholder="Assunto" required="required">
        </div>
        <div class="form-group my-3">
            <textarea name="message" id="message" rows="6" placeholder="Deixe sua mensagem" required="required"></textarea>
        </div>
        <div class="form-group my-3">
            <button type="submit" class="button primary" onClick="fcamposVazios();" >
                <i class="fa-solid fa-paper-plane"></i>Enviar
            </button>
        </div>
        <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
        <input type="text" class="nao-aparece" name="leaveblank">
        <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
        <input type="text" class="nao-aparece" name="dontchange" value="http://">
    </form>
</div>
