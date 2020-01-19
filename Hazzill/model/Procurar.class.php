<?php
    class Procurar extends Conect{
        function __construct(){
            parent::__construct();
        }
        //--------
        function getProcurar(){
            $id = $_SESSION['loginId'];
            $tipo = $_SESSION['loginTipo'];
            
            $query = "SELECT R.rel_id_usuario_1
                      FROM tb_relacionamento AS R
                      WHERE $id = R.rel_id_usuario_2
                      UNION ALL
                      SELECT R.rel_id_usuario_2
                      FROM tb_relacionamento AS R
                      WHERE $id = R.rel_id_usuario_1";
            $this->executeSQL($query);

            $i=0;
            while($lista = $this->listData()):
                $this->itens[$i] = $lista['rel_id_usuario_1'];
                $i++;
            endwhile;

            $people = $this->itens;
            
            if(isset($_SESSION['tipoEx'])){
                $tipoEx = $_SESSION['tipoEx'];
                $query2 = "SELECT U.usu_nome,U.usu_descricao,U.usu_id,I.img_url,T.tip_tipo,A.are_area
                            FROM tb_usuario AS U, tb_imagem AS I, tb_tipo AS T, tb_area AS A
                            WHERE U.usu_tipo = ".$tipoEx." AND U.usu_img_url = I.img_id AND U.usu_tipo=T.tip_id AND U.usu_area=are_id";
            }else{
                $query2 = "SELECT U.usu_nome,U.usu_descricao,U.usu_id,I.img_url,T.tip_tipo,A.are_area
                            FROM tb_usuario AS U, tb_imagem AS I, tb_tipo AS T, tb_area AS A
                            WHERE U.usu_tipo != $tipo AND U.usu_img_url = I.img_id AND U.usu_tipo=T.tip_id AND U.usu_area=are_id";
            }

            if(isset($people)){
                $e=0;
                while(isset($people[$e])):
                    $query2 .= " AND U.usu_id != ".$people[$e];
                $e++;
                endwhile;
            }
            $query2 .= ' ORDER BY RAND()';
            $this->executeSQL($query2);
            $this->get_ListaP();
        }
        function get_ListaP(){
            $i=1;
            while($lista = $this->listData()):
                $this->itens[$i] = array(
                    'usu_nome' => $lista['usu_nome'],
                    'usu_descricao' => $lista['usu_descricao'],
                    'usu_id' => $lista['usu_id'],
                    'img_url' => $lista['img_url'],
                    'tip_tipo' => $lista['tip_tipo'],
                    'are_area' => $lista['are_area']
                );
            $i++;
            endwhile;
        }
        //------
        function setLike($idLike){
            $id = $_SESSION['loginId'];
            $query = "INSERT INTO tb_relacionamento(rel_id_usu1_id_usu2,rel_id_usuario_1,rel_id_usuario_2)
                    VALUES ('".$id."_".$idLike."' ,$id, $idLike)";

            $this->executeSQL($query);
        }
        //-----//--------//----------//----------
        function getFiltro(){
            $tipo = $_SESSION['loginTipo'];
            $id = $_SESSION['loginId'];
            
            if($tipo == 1){
                $filtro = '<form method="POST"action="filtrar/2">
                            <input type="submit"value="Cliente"class="btn btn-outline-dark">
                            </input>
                            </form>
                            <form method="POST"action="filtrar/3">
                            <input type="submit"value="Empresa"class="btn btn-outline-dark">
                            </input>
                        </form>';
            }else if($tipo == 2){
                $filtro = '<form method="POST"action="filtrar/1">
                            <input type="submit"value="Funcionário"class="btn btn-outline-dark">
                            </input>
                            </form>
                            <form method="POST"action="filtrar/3">
                            <input type="submit"value="Empresa"class="btn btn-outline-dark">
                            </input>
                        </form>';
            }else if($tipo == 3){
                $filtro = '<form method="POST"action="filtrar/1">
                            <input type="submit"value="Funcionário"class="btn btn-outline-dark">
                            </input>
                            </form>
                            <form method="POST"action="filtrar/2">
                            <input type="submit"value="Cliente"class="btn btn-outline-dark">
                            </input>
                        </form>';
            }
            return $filtro;
        }
    }
?>