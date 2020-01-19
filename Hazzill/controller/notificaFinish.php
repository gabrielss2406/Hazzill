<?php
    require "./lib/autoload.php";
    session_start();

    $url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
    $rotas = explode( '/' , $url );
    $idNot = $rotas[1];

    $notificacoes =new Notificacoes();
    $notificacoes->setEstado2($idNot,'3');
?>