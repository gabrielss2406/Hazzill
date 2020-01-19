<?php
    class Conect extends Config{
        private $host, $user, $pass, $db;

        protected $obj, $itens = array(), $prefix;

            function __construct(){
                $this->host = self::DB_HOST;
                $this->user = self::DB_USER;
                $this->db = self::DB_DATABASE;
                $this->pass = self::DB_PASS;
                $this->prefix = self::DB_PREFIX;
                
                try{
                    if($this->to_Connect() == null){
                        $this->to_Connect();
                    }
                }catch(Exception $e){
                    exit($e->getMessage().'<h2>Erro de conexão</h2>');
                }
            }//fim do construtor (programação inicial)
            function to_Connect(){
                $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING //emitir alerta pra erros
                );
                //Varias Funções
                $link = new PDO(//PDO tem várias funções como essa, para trabalhar com Banco de Dados
                    "mysql:host={$this->host};
                    dbname={$this->db}",
                    $this->user,
                    $this->pass,
                    $options)
                    ;
                return $link;
            }

            //executa a query
            function executeSQL($query, array $param = null){
                $this->obj = $this->to_Connect()->prepare($query);
                return $this->obj->execute();
            }
            //traz os resultados da consulta
            function listData(){
                return $this->obj->fetch(PDO::FETCH_ASSOC);
            }
            //traz o numero de itens
            function totalData(){
                return $this->obj->rowCount();
            }
            //captura de itens
            function getItens(){
                return $this->itens;
            }
    }
?>