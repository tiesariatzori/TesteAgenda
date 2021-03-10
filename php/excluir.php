<?php
$idCliente = $_GET["idContato"];
$sql = "SELECT * FROM cliente where Id = '{$idCliente}' ";
$rs = mysqli_query($conexao, $sql) or die ("error ao recuperar os dados do registro.".mysqli_error($conexao));
$dados= mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3>Excluir Cliente</h3>
    <form>
     <div><p>Deseja realmente excluir?</p></div>
     <a href="index.php?menuop=Confirmar&idContato=<?=$dados["Id"]?>"><input type="button" value="Sim" ></a>
     <a href="index.php?menuop=contatos"><input type="button" value="Não" ></a>
    </form>

    
</body>
</html>