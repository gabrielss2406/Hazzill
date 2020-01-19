<?php
    class Perfil extends Conect{
        function __construct(){
            parent::__construct();
        }
        //--------
        function getPerfil(){
            $id = $_SESSION['loginId'];
            $query = "SELECT U.usu_nome,U.usu_descricao,U.usu_email,U.usu_data_nascimento,U.usu_descricao,A.are_area,T.tip_tipo,I.img_url
                      FROM tb_usuario AS U, tb_area AS A, tb_tipo AS T, tb_imagem AS I
                      WHERE U.usu_area = A.are_id AND U.usu_tipo = T.tip_id AND U.usu_id = $id AND U.usu_img_url = I.img_id";
            $this->executeSQL($query);
            $this->get_ListaP();
        }
        private function get_ListaP(){
            $i=1;
            while($lista = $this->listData()):
                $this->itens[$i] = array(
                    'usu_nome' => $lista['usu_nome'],
                    'usu_descricao' => $lista['usu_descricao'],
                    'tip_tipo' => $lista['tip_tipo'],
                    'are_area' => $lista['are_area'],
                    'usu_email' => $lista['usu_email'],
                    'usu_data_nascimento' => $lista['usu_data_nascimento'],
                    'usu_descricao' => $lista['usu_descricao'],
                    'img_url' => $lista['img_url']
                );
            $i++;
            endwhile;
        }
        //----------
        function getPerfil2($e){
            $query = "SELECT U.usu_nome,U.usu_descricao,U.usu_email,U.usu_data_nascimento,U.usu_descricao,A.are_area,T.tip_tipo,I.img_url
                      FROM tb_usuario AS U, tb_area AS A, tb_tipo AS T, tb_imagem AS I
                      WHERE U.usu_area = A.are_id AND U.usu_tipo = T.tip_id AND U.usu_id = $e AND U.usu_img_url = I.img_id";
            $this->executeSQL($query);
            $this->get_ListaP2();
        }
        private function get_ListaP2(){
            $i=1;
            while($lista = $this->listData()):
                $this->itens[$i] = array(
                    'usu_nome' => $lista['usu_nome'],
                    'usu_descricao' => $lista['usu_descricao'],
                    'tip_tipo' => $lista['tip_tipo'],
                    'are_area' => $lista['are_area'],
                    'usu_email' => $lista['usu_email'],
                    'usu_data_nascimento' => $lista['usu_data_nascimento'],
                    'usu_descricao' => $lista['usu_descricao'],
                    'img_url' => $lista['img_url']
                );
            $i++;
            endwhile;
        }
        //----------
        function getArea(){
            $query = "SELECT * FROM tb_area";
            $this->executeSQL($query);
            $this->get_ListaA();
        }
        private function get_ListaA(){
            $i=1;
            while($lista = $this->listData()):
                $this->itens[$i] = array(
                    'are_id' => $lista['are_id'],
                    'are_area' => $lista['are_area']
                );
            $i++;
            endwhile;
        }
        //----------
        function setPerfil($nome,$area,$descricao,$imagem){
            session_start();
            $id = $_SESSION['loginId'];

            $query = "UPDATE tb_usuario SET";
            if($nome!=null){
                $query .= " usu_nome='$nome',";
            }if($area!=0){
                $query .= " usu_area=$area,";
            }if($descricao!=null){
                $query .= " usu_descricao='$descricao',";
            }if($imagem!=null){
                $query .= " usu_img_url=$imagem,";
            }
            $letrafinal = substr($query, -1);
            if($letrafinal=='T'){
            }else{
                $query = substr($query, 0, -1)." WHERE usu_id=$id";
                $this->executeSQL($query);
            }
        }
    }
?>