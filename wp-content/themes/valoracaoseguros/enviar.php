<?php

//require_once("phpmailer/class.phpmailer.php");
//require_once("phpmailer/class.smtp.php");
//
require_once('classe/email-reversa.class.php');


$form = new Email();


$mensagem = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$assunto = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

$form->insert_form($nome, $email,$cep,$assunto, $mensagem);

if (!empty($email) && !empty($nome) && !empty($assunto) && !empty($mensagem)) {



    $email_envio = 'segurosvaloracao3@gmail.com'; // E-mail receptor
    $email_pass = 'R00ftop@r4i2022'; // Senha do e-mail
    $mailDestino = 'segurosvaloracao3@gmail.com';
    //$mailDestino2 =' eventos@orthotel.com.br';
    $site_name = 'Valor Ação Seguros/'; // Nome do Site
    $host_smtp = 'smtp.gmail.com'; // HOST SMTP Ex: smtp.domain.com.br
    $host_port = '465'; // Porta do Host

    $site_url = $siteHome;
//        if ($_SERVER['HTTP_HOST'] == 'https://www.orthotel.com.br/'){
//            $site_url  = 'https://www.orthotel.com.br/'; // URL do Site
//        }else{
//            //$site_url  = 'http://deploy.rai.com.br/berghotel/'; // URL do Site
//            $site_url  = 'https://www.orthotel.com.br/'; // URL do Site
//        }


    // Conteúdo do Formulário

    $body_content = "De: $nome  \n E-mail: $email  \n CEP: $cep  \n assunto: $assunto \n Mensagem: $mensagem";

    //  Não mudar a partir daqui

    if ($_POST['leaveblank'] != '' or $_POST['dontchange'] != 'http://') {

        echo "<h2
            style=\" font-size: 1em;
            margin-top: 20%;
            text-align: center;
            font-family: 'Helvetica', 'Arial', 'Sans-Serif';
            font-weight: normal;
            color: #1b1b1b;
            \"><center><span>Aconteceu algum erro !</span><p>Você pode tentar denovo ou enviar direto para " . $email_envio . " !</p></center><h2>";

        echo "<html style=\"background: #fff;\"></html>";
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $site_url . "'>";
    } else if (isset($email)) {

        // require ('./PHPMailer/PHPMailerAutoload.php');


        $mail = new PHPMailer();
        //$mail->SMTPDebug = 3; // Tire do comentário para debugar
        $mail->CharSet = 'UTF-8';

        $mail->isSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->Host = $host_smtp;
        $mail->SMTPAuth = true;
        $mail->Username = $email_envio;
        $mail->Password = $email_pass;
        $mail->Port = $host_port;

        $mail->From = $mailDestino;

        //$mail->addAddress($email);
        $mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
        $mail->AddBCC("paulosbzl@gmail.com", $nome);
        $mail->FromName = 'Valor Ação Seguro ';
        $mail->AddReplyTo($email, $nome);

        $mail->WordWrap = 70;

        $mail->Subject = 'E-mail - ' . $site_name . ' - ' . $nome;

        $mail->Body = $body_content;

        if (!$mail->send()) {
            include 'inc/Templates/obrigadoErro.php';
        } else {

            header("Location:" . $site_url . ""); /* Redirect browser */
            /* Make sure that code below does not get executed when we redirect. */
            exit;
            //include 'inc/Templates/obrigadoSucesso.php';
        }

    }
} else {
    echo 'campo invalido';

}

