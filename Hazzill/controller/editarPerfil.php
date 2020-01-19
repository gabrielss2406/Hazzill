<?php
    require "../lib/autoload.php";
    session_start();
    
    $nome = $_POST['nome'];//text
    $area = $_POST['area'];//area
    $descricao = $_POST['descricao'];//descricao
    $imagem = $_POST['imagem'];//imagem

    $perfil = new Perfil();
    $perfil->setPerfil($nome,$area,$descricao,$imagem);
    
    header("Location: ../perfil");
?>