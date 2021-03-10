<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3>Atualizar</h3>
    <?php
    $Idcliente = mysqli_real_escape_string($conexao,$_POST["IdCliente"]);
    $NomeCliente= mysqli_real_escape_string($conexao,$_POST["nome"]);
    $AddTitulo= mysqli_real_escape_string($conexao,$_POST["addTitulo"]);
    $AddDescri= mysqli_real_escape_string($conexao,$_POST["addDescri"]);
    $AddInicial= mysqli_real_escape_string($conexao,$_POST["addInicial"]);
    $AddFinal= mysqli_real_escape_string($conexao,$_POST["addFinal"]);
    $sql = " UPDATE cliente SET
    Nome = '{$NomeCliente}',
    Descri = '{$AddDescri}',
    Titulo = '{$AddTitulo}',
    DataFinal = '{$AddFinal}',
    DataInicial = '{$AddInicial}'
    WHERE Id='{$Idcliente}'";

     mysqli_query($conexao,$sql) or die ("erro ao executar a consulta".mysqli_error($conexao));
      echo "o Registro foi atualizado";
    ?>
</body>
</html>