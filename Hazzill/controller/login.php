<?php
    $smarty = new Template();
    
    $perfil2 = new Perfil();
    $perfil2->getArea();

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
    $smarty->assign('GET_CADASTRO', Rotas::get_SiteCadastro());

    $smarty->assign('GET_CABE', Cabecalho::getCabecalho());
    $smarty->assign('GET_FOOTER', Footer::getFooter());
    $smarty->assign('GET_CHATBOT', Functions::chatbot());

    $smarty->assign('PERF',$perfil2->getItens());

    $smarty->display('login.html');
?>