
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


$idCliente = mysqli_real_escape_string($conexao,$_GET["idContato"]);
$sql = "DELETE FROM cliente where Id = '{$idCliente}'";
mysqli_query($conexao,$sql) or die ("error ao excluir registro".mysqli_error($conexao));
echo "registro excluido com sucesso";

?>
    
</body>
</html>