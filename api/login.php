<?php
    #conectando a outro arquivo
    include('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <div class="card login">
            <div class="form-floating">
                <input type="text" class="form-control" name="nome" placeholder="user">
                <label for="">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" id="floatingInput" class="form-control" name="senha" placeholder="senha">
                <label for="floatingInput">Senha</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <?php
                #verificando se tem dados
                if(isset($_POST['nome']) && isset($_POST['senha'])){
                    #verificando se o input esta vazio
                    if(strlen($_POST['nome']) == 0){
            ?>
            <div class="alert alert-danger" role="alert">
                <p>Nome de usuario não informado</p>
            </div>

            <?php
                #verificando se o input esta vazio
                }else if(strlen($_POST['senha']) == 0){
            ?>
            <div class="alert alert-danger" role="alert">
                <p>Senha não informada</p>
            </div>
            <?php
                }else{
            ?>
        </div>
    </form>
<?php
        #salvando temporariamente os dados dos inputs em variaveis
        $user = $_POST['nome'];
        $senha = $_POST['senha'];
        
        #comando sql
        $sql = "SELECT * FROM login WHERE Nome = '$user' AND senha = '$senha'";
        #verificando
        $query = $conexao->query($sql) or die ("
        <div class=\"alert alert-danger\" role=\"alert\">
            <p>Falha ao entrar por favor tentar novamente mais tarde.</p>
        </div>".$conexao->error
        );
        
        #verificando quantos registros foi encontrado a pertir desses dados
        $quant = $query->num_rows;

            if($quant == 1){
                $usuario = $query->fetch_assoc();
                if(!isset($_SESSION)){
                    session_start();
                }
                #criando um seao a partir do id do usuario
                $_SESSION['id'] = $usuario['id'];

                header("location: painel.php");
            }else{
                echo "
                <div class=\"alert alert-danger\" role=\"alert\">
                    <p>Falha ao entrar por favor tentar novamente mais tarde.</p>
                </div>";
            }

        }
    }
?>
</body>
</html>
