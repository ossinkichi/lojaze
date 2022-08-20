<?php
  include('conexao.php');

  $consulta = "SELECT * FROM frutas";
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
    }

    </style>
</head>
<body>
<a href="login.php" class="btn btn-danger btn-sm" style="margin-left: 12px; margin-top: 7px;">
  <img src="https://img.icons8.com/ios-glyphs/30/000000/login-rounded.png"/>
</a>
<div class="tab">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fruta</th>
            <th scope="col">Preço</th>
          </tr>
        </thead>
        <?php
          while($dados = $con->fetch_array()){
        ?>
        <tbody>
          <tr>
            <th scope="row"><?=$dados['id']?></th>
            <td><?=$dados['Nome']?></td>
            <td>R$ <?=$dados['preco']?></td>
          </tr>
        </tbody>
        <?php
          }
        ?>
      </table>
    </div>
</body>
</html>