<?php
    $smarty = new Template();
    $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
    $smarty->assign('GET_HOME', Rotas::get_SiteHome());
    
    $smarty->display('erro.html');
?>
