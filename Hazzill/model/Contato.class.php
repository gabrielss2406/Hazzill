<?php
    class Contato extends Conect{
        function __construct(){
            parent::__construct();
        }
        function setContato($nome,$email,$assunto,$message){
            $query = "INSERT INTO tb_contato(con_nome,con_email,con_assunto,con_mensagem) VALUES ('$nome','$email','$assunto','$message')";
            $this->executeSQL($query);
        }
    }
?>