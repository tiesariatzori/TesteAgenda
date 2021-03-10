<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3>Inserir contato</h3>
    <?php
    $NomeCliente= mysqli_real_escape_string($conexao,$_POST["nome"]);
    $AddTitulo= mysqli_real_escape_string($conexao,$_POST["addTitulo"]);
    $AddDescri= mysqli_real_escape_string($conexao,$_POST["addDescri"]);
    $AddInicial= mysqli_real_escape_string($conexao,$_POST["addInicial"]);
    $AddFinal= mysqli_real_escape_string($conexao,$_POST["addFinal"]);

    $sql = "INSERT INTO cliente (nome,Descri,Titulo,DataFinal,DataInicial) VALUES('{$NomeCliente}','{$AddDescri}','{$AddTitulo}','{$AddInicial}','{$AddFinal}')";


     mysqli_query($conexao,$sql) or die ("erro ao executar a consulta".mysqli_error($conexao));
      echo "o Contato foi inserido com sucesso na agenda";
    ?>
</body>
</html>