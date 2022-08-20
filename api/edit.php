<?php
    include('conexao.php');
    include('protect.php');
    
    $id = $_GET['editid'];

    if(isset($_POST['nome']) && isset($_POST['saida']) && isset($_POST['entrada']) ){

        $fruta = $_POST['nome'];
        $saida = $_POST['saida'];
        $entrada = $_POST['entrada'];

        $sql = "UPDATE frutas SET Nome = '$fruta', preco = '$saida', v_entrada = '$entrada' where id = $id";
        $query = mysqli_query($conexao,$sql);

        if($query){ 
            echo "tudo certo";
            // header('location: painel.php');

        }else{
            
            die ("
            <div class=\"alert alert-danger\" role=\"alert\">
            <p>Falha ao cadastrar, por favor tentar novamente mais tarde.</p>
            </div>"
            .mysqli_error($conexao));

        }
    }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Atualizar frutas</title>
</head>
<body>
    <a href="painel.php"  class="btn btn-warning btn-sm">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/long-arrow-left.png"/>
    </a>
    <form method="post" action="">
        <div class="card cadf">
            <div class="form-floating">
                <input type="text" class="form-control" name="nome" placeholder="fruit">
                <label for="">Nome da fruta</label>
            </div>
            <div class="form-floating">
                <input type="text" id="floatingInput" class="form-control" name="saida" placeholder="valor de venda">
                <label for="floatingInput">valor de venda</label>
            </div>
            <div class="form-floating">
                <input type="text" id="floatingInput" class="form-control" name="entrada" placeholder="valor de entrada">
                <label for="floatingInput">valor de entrada</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Atualizar</button>
            <br><br>
        </div>
    </form>
</body>