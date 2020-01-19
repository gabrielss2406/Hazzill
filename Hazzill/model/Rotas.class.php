<?php

    class Rotas{
        public static $pag;
        private static $pasta_views = 'views';
        private static $pasta_ofertar = 'ofertar';
        private static $pasta_procurar = 'procurar';
        private static $pasta_contato = 'contato';
        private static $pasta_login = 'login';
        private static $pasta_notificacoes = 'notificacoes';
        private static $pasta_perfil = 'perfil';
        private static $pasta_cadastro = 'cadastro';
        private static $pasta_logoff = 'logoff';
        private static $pasta_perfilvisitante = 'perfilvisitante';

        //Configuração da rota pagina home
        static function get_SiteHome(){
            return Config::SITE_URL.'/'.Config::SITE_PASTA; //retorna a url
        }
        //Configuração para a raiz do site
        static function get_SiteRaiz(){
            return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
        }
        //Configuração da rota do tema do site
        static function get_SiteTema(){
            return self::get_SiteHome().'/'.self::$pasta_views; //retorna a url
        }
        //Configuração da rota do controll do site
        static function get_SiteControl(){
            return self::get_SiteHome().'/controller'; //retorna a url
        }

        //Configuração da página ofertar
        static function get_SiteOfertar(){
            return self::get_SiteHome().'/'.self::$pasta_ofertar;
        }
        //Configuração da página perfil
        static function get_SitePerfilEdit(){
            return self::get_SiteHome().'/'.self::$pasta_perfil;
        }
        //Configuração da página procurar
        static function get_SiteAchar(){
            return self::get_SiteHome().'/'.self::$pasta_procurar;
        }
        //Configuração da página contato
        static function get_SiteContato(){
            return self::get_SiteHome().'/'.self::$pasta_contato;
        }
        //Configuração da página notificacoes
        static function get_SiteNotificacoes(){
            return self::get_SiteHome().'/'.self::$pasta_notificacoes;
        }
        //Configuração da página perfilvisitante
        static function get_SitePerfilVisitante(){
            return self::get_SiteHome().'/'.self::$pasta_perfilvisitante;
        }
        //Configuração da página perfil
        static function get_SitePerfil(){
            return self::get_SiteHome().'/'.self::$pasta_perfil;
        }
        //Configuração da página login
        static function get_SiteLogin(){
            return self::get_SiteHome().'/'.self::$pasta_login;
        }
        //Configuração da página cadastro
        static function get_SiteCadastro(){
            return self::get_SiteHome().'/'.self::$pasta_cadastro;
        }
        //Configuração da página logoff
        static function get_SiteLogoff(){
            return self::get_SiteHome().'/'.self::$pasta_logoff;
        }
        //endereço da pasta
        static function get_ImageFolder(){
            return 'views/images/';
        }
        // link da imgem
        static function get_ImageUrl(){
            return self::get_SiteHome().'/'.self::get_ImageFolder();
        }
        // redimensionar imagem e url
        static function imageLinks($img, $larg, $alt){
            $imagem = self::get_ImageUrl()."thumb.php?src={$img}&w={$larg}&h={$alt}&zc=1";
            return $imagem;
        }

        static function get_Pagina(){ //funcao de capturar o valor
            if (isset($_GET['pag'])) {//verifica se ta passando o valor
                $pagina = $_GET['pag'];//passa esse valor pra $pagina
                //self:: referencia a variavel
                self::$pag = explode('/',$pagina);//$pag recebe o $pagina sem as barra, virando uma forma de array
                    $pagina = 'controller/'.self::$pag[0].".php";//passa o endereço agora completo para $pagina
                    //echo $pagina;
                    if (file_exists($pagina)) {//verifica se existe esse controller
                        include_once $pagina; //abre ele
                    }else{
                        include_once 'controller/erro.php'; //abre o erro se der merda
                    }
            }
        }
    }
?>