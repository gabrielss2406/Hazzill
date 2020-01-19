<?php
    require "../lib/autoload.php";
    session_start();
    
    $email = $_POST['email'];//text
    $senha = $_POST['pass'];//text pass
    $nome = $_POST['nome'];//text
    $tipo = $_POST['tipo'];//radio
    $area = $_POST['area'];//select
    $data = $_POST['data'];//date
    $imagem = $_POST['imagem'];//imagem
    
    $senhaC = hash('sha512', $senha);

    $cadastro = new Cadastro();
    $cadastro->setCadastro($email,$senhaC,$nome,$tipo,$data,$area,$imagem);

    header("Location: ../login");
?>