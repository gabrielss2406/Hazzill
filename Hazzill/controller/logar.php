<?php
    require "../lib/autoload.php";
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['pass'];

    $senhaC = hash('sha512', $senha);

    $login = new Login();
    $log = $login->getLogin($email,$senhaC);
    
    if($log == null || $log == 0){
        $_SESSION['logado']=2;
        header("Location: ../");
    }else if($log != 0){
        $_SESSION['logado']=1;
        $_SESSION['loginId']=$log[0];
        $_SESSION['loginTipo']=$log[1];
        header("Location: ../");
    }
    
?>