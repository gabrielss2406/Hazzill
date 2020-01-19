<?php
    class Notificacoes extends Conect{
        function __construct(){
            parent::__construct();
        }
        //--------
        function getNotificacoes(){
            $id = $_SESSION['loginId'];
            $algumaNot = 0; //sim = 1, nao = 0

            $query = "SELECT DISTINCT R.rel_id_usuario_1
                    FROM tb_usuario AS U, tb_relacionamento AS R 
                    WHERE R.rel_estado = 1 AND R.rel_id_usuario_2 = $id";
            $this->executeSQL($query);

            $i=0;
            while($lista = $this->listData()):
                $this->itens[$i] = $lista['rel_id_usuario_1'];
                $i++;
            endwhile;

            $notifica = $this->itens;
            $query2 = "SELECT U.usu_nome,U.usu_descricao,A.are_area,T.tip_tipo,U.usu_id,I.img_url,U.usu_email,U.usu_descricao
                        FROM tb_usuario AS U, tb_area AS A,tb_tipo AS T, tb_imagem AS I
                        WHERE U.usu_area = A.are_id AND U.usu_tipo = T.tip_id AND U.usu_img_url = I.img_id";
                       
                if(isset($notifica[0])){
                    $query2 .=  " AND (U.usu_id = ".$notifica[0];
                    $algumaNot = 1;
                }
                $e=1;
                while(isset($notifica[$e])):
                    $query2 .= " OR U.usu_id = ".$notifica[$e];
                $e++;
                endwhile;

                if($algumaNot==1){
                    $query2 .= ")";
                }else{
                    $query2 .= " AND U.usu_id = 0";
                }
            $this->executeSQL($query2);
            $this->get_ListaN();
        }
        function get_ListaN(){
            $i=1;
            while($lista = $this->listData()):
                $this->itens[$i] = array(
                    'usu_nome' => $lista['usu_nome'],
                    'usu_descricao' => $lista['usu_descricao'],
                    'are_area' => $lista['are_area'],
                    'tip_tipo' => $lista['tip_tipo'],
                    'usu_id' => $lista['usu_id'],
                    'img_url' => $lista['img_url'],
                    'usu_email' => $lista['usu_email'],
                    'usu_descricao' => $lista['usu_descricao']
                );
            $i++;
            endwhile;
        }
        //---//----//-----//----//----//----//
        function getNotificacoes2(){
            $id = $_SESSION['loginId'];
            $algumaNot = 0; //sim = 1, nao = 0

            $query = "SELECT DISTINCT R.rel_id_usuario_2
                    FROM tb_usuario AS U, tb_relacionamento AS R 
                    WHERE R.rel_estado = 2 AND R.rel_id_usuario_1 = $id";
            $this->executeSQL($query);

            $i=0;
            while($lista = $this->listData()):
                $this->itens[$i] = $lista['rel_id_usuario_2'];
                $i++;
            endwhile;

            $notifica = $this->itens;
            $query2 = "SELECT U.usu_nome,A.are_area,T.tip_tipo,U.usu_id,I.img_url,U.usu_email
                        FROM tb_usuario AS U, tb_area AS A,tb_tipo AS T, tb_imagem AS I
                        WHERE U.usu_area = A.are_id AND U.usu_tipo = T.tip_id AND U.usu_img_url = I.img_id";
                       
                if(isset($notifica[0])){
                    $query2 .=  " AND (U.usu_id = ".$notifica[0];
                    $algumaNot = 1;
                }
                $e=1;
                while(isset($notifica[$e])):
                    $query2 .= " OR U.usu_id = ".$notifica[$e];
                $e++;
                endwhile;

                if($algumaNot==1){
                    $query2 .= ")";
                }else{
                    $query2 .= " AND U.usu_id = 0";
                }
            $this->executeSQL($query2);
            $this->get_ListaN2();
        }
        function get_ListaN2(){
            $i=1;
            while($lista = $this->listData()):
                $this->itens[$i] = array(
                    'usu_nome' => $lista['usu_nome'],
                    'are_area' => $lista['are_area'],
                    'tip_tipo' => $lista['tip_tipo'],
                    'usu_id' => $lista['usu_id'],
                    'img_url' => $lista['img_url'],
                    'usu_email' => $lista['usu_email']
                );
            $i++;
            endwhile;
        }
        //-----//-----//----//-----//
        function setEstado($idNot,$estad){
            $id = $_SESSION['loginId'];

            $query = "UPDATE tb_relacionamento
                    SET rel_estado=$estad
                    WHERE rel_id_usu1_id_usu2 = '".$idNot."_".$id."'";
            $this->executeSQL($query);
        }
        function setEstado2($idNot,$estad){
            $id = $_SESSION['loginId'];

            $query = "UPDATE tb_relacionamento
                    SET rel_estado=$estad
                    WHERE rel_id_usu1_id_usu2 = '".$id."_".$idNot."'";
            $this->executeSQL($query);
        }
    }
?>