<?php
    #conectando a outro arquivo
    include('conexao.php');

    #se o id foi pego na url
    if(isset($_GET['deletid'])){

        #
        $id = $_GET['deletid'];

        #comando sql para deletar o registro a partir do seu id
        $sql = "DELETE FROM frutas WHERE id = $id";
        #verificando a conexão e se o comando esta certo
        $result = mysqli_query($conexao, $sql);

        #redirecionando para o painel
        header("location: painel.php");

        #caso a verificação não tenha dado certo mate e me diga o erro
        if(!isset($result)){
            die(mysqli_error($conexao));
        }

    }
?>