<?php
  #Conectando a outros arquivos
  include('conexao.php');
  include('protect.php');

  #Selecionando a tabela onde se encontra os registros
  $consulta = "SELECT * FROM frutas";

  #Verificando se a conexão deu certo
  $con =  $conexao->query($consulta) or die($conexao->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Frutas</title>
    <style>
    *{
      margin: 0;
      padding: 0;
    }

    body{
      background-color: #f3e2f39f;
      position: absolute;
    }

    .tab{
      background-color: azure;
      width: 1150px;
      margin-left: 70px;
      margin-top: 100px;
      text-align: center;
    }

    </style>
</head>
<body>
    <a href="cadfruit.html" class="btn btn-danger" style="margin-left: 1110px;">
      <img src="https://img.icons8.com/ios/24/000000/add--v1.png"/>
    </a>
    <a href="logout.php" class="btn btn-danger" style="margin-left: 20px;">
      <img src="https://img.icons8.com/pastel-glyph/24/000000/login-rounded-right.png"/>
    </a>
    
    <div class="tab">
    <a href="clean.php" style="text-decoration-line:none ; color:blackm;">limpar tabela</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fruta</th>
            <th scope="col">Valor de venda</th>
            <th scope="col">Valor de entrada</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
          </tr>
        </thead>
        <?php
          #Pegando os dados da tabela os colocando em loop ate que todos os dados estejam a vista do usuario
          while($dados = $con->fetch_array()){
        ?>
        <tbody>
          <tr>
            <th scope="row"><?=$dados['id']?></th>
            <td><?=$dados['Nome']?></td>
            <td>R$ <?=$dados['preco']?></td>
            <td>R$ <?=$dados['v_entrada']?></td>
            <td>
              <a href="edit.php?editid=<?= $dados['id']?>"  class="btn btn-warning btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
              </a>
            </td>
            <td>
              <a class="btn btn-danger btn-sm" href="delet.php?deletid=<?= $dados['id']?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                </svg>
              </a>
            </td>
          </tr>
        </tbody>
        <?php
          }
        ?>
      </table>
    </div>
    <br><br><br>
</body>
</html>