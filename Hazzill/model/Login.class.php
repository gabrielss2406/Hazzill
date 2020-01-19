<?php
    class Login extends Conect{
            function __construct(){
                parent::__construct();
            }
            //get_categorias
            function getLogin($email,$senha){
                session_start();
                $query = "SELECT * FROM tb_usuario WHERE usu_email = '$email' AND usu_senha = '$senha'";
                $this->executeSQL($query);

                while($lista = $this->listData()):
                    $this->itens = array(
                        'usu_id'   => $lista['usu_id'],
                        'usu_tipo' => $lista['usu_tipo'],
                        'usu_area' => $lista['usu_area'],
                        'usu_nome' => $lista['usu_nome']
                    );
                endwhile;
                if($this->itens['usu_id']==null){
                    return 0;
                }else{
                    $return = array(
                        $this->itens['usu_id'],
                        $this->itens['usu_tipo']
                    );
                    return $return;
                }
            }
        }
    
?>