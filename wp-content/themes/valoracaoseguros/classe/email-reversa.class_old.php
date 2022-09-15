<?php

class Email {

    private $pdo;

    public function __construct() {
        try {
            $db             = new stdClass;
            $db->driver     = 'mysql';
            $db->host       = 'localhost';
            $db->port       = 3306;
            $db->database   = 'db_berghotel';
            $db->username   = 'root';
            $db->password   = 'Suporte01';
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

    public function insert_form_reversa( $nome, $email, $tel, $datain, $dataout, $mensagem ) {

        try {


            $sql = "INSERT INTO tb_form_reserva(nome, email, tel, data_check_in, data_check_out, mensagem) VALUES (:nome, :email, :tel, :data_check_in, :data_check_out, :mensagem)";
            $sql = $this->pdo->prepare( $sql );

            $sql->bindValue( ':nome', $nome );
            $sql->bindValue( ':email', $email );
            $sql->bindValue( ':tel', $tel );
            $sql->bindValue( ':data_check_in', $datain );
            $sql->bindValue( ':data_check_out', $dataout );
            $sql->bindValue( ':mensagem', $mensagem );

            $sql->execute();


        } catch ( PDOException $e ) {
            echo "ERRO: " . $e->getMessage();
            echo 'Mesagem de erro: ' . $e->getMessage() .'<br>' ;
            echo 'Nome do Arquivo: ' . $e->getFile() .'<br>' ;
            echo 'Linha: ' . $e->getline() .'<br>' ;
        }
    }


    public function insert_form_eventos( $nome, $email, $tel, $datain, $dataout, $n_participantes ) {

        try {


            $sql = "INSERT INTO tb_form_eventos(nome, email, tel, data_check_in, data_check_out, numero_participantes) VALUES (:nome, :email, :tel, :data_check_in, :data_check_out, :numero_participantes)";
            $sql = $this->pdo->prepare( $sql );

            $sql->bindValue( ':nome', $nome );
            $sql->bindValue( ':email', $email );
            $sql->bindValue( ':tel', $tel );
            $sql->bindValue( ':data_check_in', $datain );
            $sql->bindValue( ':data_check_out', $dataout );
            $sql->bindValue( ':numero_participantes', $n_participantes );

            $sql->execute();


        } catch ( PDOException $e ) {
            echo "ERRO: " . $e->getMessage();
            echo 'Mesagem de erro: ' . $e->getMessage() .'<br>' ;
            echo 'Nome do Arquivo: ' . $e->getFile() .'<br>' ;
            echo 'Linha: ' . $e->getline() .'<br>' ;
        }
    }


}