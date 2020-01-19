<?php
   require "./lib/autoload.php";
   session_start();

   $url = ltrim( parse_url( $_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/' );
   $rotas = explode( '/' , $url );
   $idLike = $rotas[1];
   $procurar = new Procurar();
   $pro = $procurar->setLike($idLike);
?>