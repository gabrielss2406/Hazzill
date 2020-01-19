<?php
    require "./lib/autoload.php";
    session_start();

    $url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
    $rotas = explode( '/' , $url );
    $idNot = $rotas[1];
    $estad = $rotas[2];
    
    $notificacoes =new Notificacoes();
    $notificacoes->setEstado($idNot,$estad);
?>