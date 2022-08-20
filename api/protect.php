<?php
    #verificando se existte um sessao
    if(!isset($_SESSION)){
        session_start();
    }

    header("location: painel.php");
    // #verificando se existe um usuario no banco a partir das informacoes ou melhor se ele tem um id no bando
    // if(!isset($_SESSION['id'])){
    //     die (header("location: login.php"));
    // }
?>

