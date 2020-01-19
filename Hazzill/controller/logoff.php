<?php
    require "./lib/autoload.php";
    session_start();

    $_SESSION['logado']=0;
    $_SESSION['loginId']=null;
    
    if(isset($_SESSION['tipoEx'])){
        $_SESSION['tipoEx'] = null;
    }
    header("Location: ./");
?>