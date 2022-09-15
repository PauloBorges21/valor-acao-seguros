<?php

class Email {

    private $pdo;

    public function __construct() {
        try {
            $db             = new stdClass;
            $db->driver     = 'mysql';
            $db->host       = 'localhost';
            $db->port       = 3306;
            $db->database   = 'db_valor_acao';
            $db->username   = 'root';
            $db->password   = '';
            $db->unixSocket = '';
            $db->charset    = 'utf8';
            $db->options    = [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_PERSISTENT         => true
            ];
            $db->dns        = "mysql:dbname={$db->database};port={$db->port};host={$db->host}";

            $this->pdo = new PDO( $db->dns, $db->username, $db->password, $db->options );


        } catch ( PDOException $e ) {
            echo "ERRO: " . $e->getMessage();
            echo 'Mesagem de erro: ' . $e->getMessage() .'<br>' ;
            echo 'Nome do Arquivo: ' . $e->getFile() .'<br>' ;
            echo 'Linha: ' . $e->getline() .'<br>' ;
        }
    }

    public function insert_form( $nome, $email,$cep,$assunto, $mensagem ) {

        try {


            $sql = "INSERT INTO tb_form(nome, email,cep,assunto,mensagem) VALUES (:nome, :email, :cep, :assunto, :mensagem)";
            $sql = $this->pdo->prepare( $sql );

            $sql->bindValue( ':nome', $nome );
            $sql->bindValue( ':email', $email );
            $sql->bindValue( ':cep', $cep );
            $sql->bindValue( ':assunto', $assunto );
            $sql->bindValue( ':mensagem', $mensagem );

            $sql->execute();

        } catch ( PDOException $e ) {
            echo "ERRO: " . $e->getMessage();
            echo 'Mesagem de erro: ' . $e->getMessage() .'<br>' ;
            echo 'Nome do Arquivo: ' . $e->getFile() .'<br>' ;
            echo 'Linha: ' . $e->getline() .'<br>' ;
        }
    }




}