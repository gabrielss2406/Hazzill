<?php
    $smarty = new Template();

    $notificacoes = new Notificacoes();
    $notificacoes->getNotificacoes();

    $notificacoes2 = new Notificacoes();
    $notificacoes2->getNotificacoes2();

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
    $smarty->assign('GET_PERFIL_VISTANTE', Rotas::get_SitePerfilVisitante());

    $smarty->assign('GET_CABE', Cabecalho::getCabecalho());
    $smarty->assign('GET_FOOTER', Footer::getFooter());
    $smarty->assign('GET_CHATBOT', Functions::chatbot());

    $smarty->assign('NOT',$notificacoes->getItens());
    $smarty->assign('ACE',$notificacoes2->getItens());

    if( isset($_SESSION['logado'])==false || $_SESSION['logado']==0){
        $smarty->display('erro.html');
    }
    if(isset($_SESSION['logado']) && $_SESSION['logado']!=0 ){
        $smarty->display('notificacoes.html');
    }
?>