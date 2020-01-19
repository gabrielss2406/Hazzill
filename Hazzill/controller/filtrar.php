<?php
    require "./lib/autoload.php";
    session_start();

    $url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
    $rotas = explode( '/' , $url );
    $_SESSION['tipoEx'] = $rotas[1];
    
    if($_SESSION['tipoEx']==0){
        $_SESSION['tipoEx']=null;
    }

    $procurar =new Procurar();
    $procurar->getProcurar();
    
    header("Location: ../procurar");
?>