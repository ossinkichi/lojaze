<?php
#conectando a outro arquivo
include('conexao.php');

#pegando os dados dos inputs e os salvando em variaveis
$fruta = $_POST['nome'];
$saida = $_POST['preco'];
$entrada = $_POST['entrada'];

#comando sql para inserir dados na tabela
$inject = "INSERT INTO frutas(Nome, preco, v_entrada) VALUES('$fruta', '$saida', '$entrada')";

#se o comando e a conexao estiver correto
if(mysqli_query($conexao, $inject)){ 
    echo
    "<div class=\"alert alert-danger\" role=\"alert\">
        <p>Cadastro feito com sucesso.</p>
    </div>";
}else{
    #se nao mate e me diga o erro
    die ("
    <div class=\"alert alert-danger\" role=\"alert\">
        <p>Falha ao cadastrar, por favor tentar novamente mais tarde.</p>
    </div>"
    .mysqli_error($conexao));
}

#desconectando com o banco de dados
mysqli_close($conexao);

#redirecionando para o painel
header('location: painel.php');

?>