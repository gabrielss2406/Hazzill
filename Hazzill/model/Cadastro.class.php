<?php
    class Cadastro extends Conect{
        function __construct(){
            parent::__construct();
        }
        function setCadastro($email,$senha,$nome,$tipo,$data,$area,$imagem){
            $query = "INSERT INTO tb_usuario(usu_tipo,usu_area,usu_nome,usu_email,usu_senha,usu_data_nascimento,usu_img_url) 
                      VALUES ($tipo,$area,'$nome','$email','$senha','$data',$imagem)";
            $this->executeSQL($query);
        }
    }
?>