<?php
    $smarty = new Template();;

    $procurar = new Procurar();
    $procurar->getProcurar();

    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
    //Configuração das rotas de pagina
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    $smarty->assign('GET_PERFIL', Rotas::get_SitePerfil());
    $smarty->assign('GET_NOTIFICACOES', Rotas::get_SiteNotificacoes());
    $smarty->assign('GET_LOGIN', Rotas::get_SiteLogin());
    $smarty->assign('GET_CONTATO', Rotas::get_SiteContato());
    $smarty->assign('GET_ACHAR', Rotas::get_SiteAchar());
    $smarty->assign('GET_OFERTAR', Rotas::get_SiteOfertar());
    $smarty->assign('GET_CONTROL', Rotas::get_SiteControl());

    $smarty->assign('GET_CABE', Cabecalho::getCabecalho());
    $smarty->assign('GET_FOOTER', Footer::getFooter());

    $smarty->assign('PRO',$procurar->getItens());
    $smarty->assign('FILTROS',$procurar->getFiltro());
    $smarty->assign('GET_CHATBOT', Functions::chatbot());

    if(isset($_SESSION['logado'])==false || $_SESSION['logado']==0){
        $smarty->display('erro.html');
    }if(isset($_SESSION['logado']) && $_SESSION['logado']!=0 ){
        $smarty->display('procurar.html');
    }
?>