<?php
    require "../lib/autoload.php";
    session_start();
    
    $nome = $_POST['nome'];//text
    $email = $_POST['email'];//email
    $assunto = $_POST['assunto'];//assunto
    $message = $_POST['message'];//message

    $contato = new Contato();
    $contato->setContato($nome,$email,$assunto,$message);

    header("Location: ../contato");
?>