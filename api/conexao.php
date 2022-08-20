<?php
    
    $usuario = 'root';
    $senha = '';
    $host = 'localhost';
    $dbnaame = 'frutas_do_ze';

    $conexao = mysqli_connect($host,$usuario, $senha, $dbnaame);

    if(!isset($conexao)){
       echo "Erro";
    }

?>