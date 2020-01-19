<?php
    require "./lib/autoload.php";//chama a lib de autoload para achar as classes
    $smarty = new Template(); //instanciando objeto Smarty

    //Configuração do tema do site(css)
    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
    //Função ponteiro (->) a grosso modo um atalho, aponta pra ela sem definir o que tem

    //Configuração das rotas de pagina
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    $smarty->assign('GET_PERFIL', Rotas::get_SitePerfil());
    $smarty->assign('GET_NOTIFICACOES', Rotas::get_SiteNotificacoes());
    $smarty->assign('GET_LOGIN', Rotas::get_SiteLogin());
    $smarty->assign('GET_CONTATO', Rotas::get_SiteContato());
    $smarty->assign('GET_ACHAR', Rotas::get_SiteAchar());
    $smarty->assign('GET_OFERTAR', Rotas::get_SiteOfertar());

    $smarty->assign('GET_CABE', Cabecalho::getCabecalho());
    $smarty->assign('GET_FOOTER', Footer::getFooter());
    $smarty->assign('GET_CHATBOT', Functions::chatbot());

    $conn = new Conect();

    if(isset($_SESSION['logado'])){
        if($_SESSION['logado']==2){
            $_SESSION['logado']=0;
        }
    }

    if(isset($_GET['pag'])){
        Rotas::get_Pagina();
    }else{
        $smarty->display('index.html');
    }
?>