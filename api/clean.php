<?php
    #Conectando com outro arquivo
    include('conexao.php');

    #Comando sql para limpar os registros da tabela
    $limpar = "TRUNCATE  frutas" ;
    #Verificando a coneção sql e se o comando esta certo
    $query = mysqli_query($conexao, $limpar);

    #Se a verificação não der problema
    if($query){
        #Redirecione para o painel
        header("location: painel.php");
    }else{
        #Se não mate a conexão e me diga qual foi o erro
        die(mysqli_error($conexao));
    }
?>