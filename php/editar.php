<?php
$idCliente = $_GET["idContato"];
$sql = "SELECT * FROM cliente where Id = '{$idCliente}'";
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
    <div>
        <form action="index.php?menuop=Atualizar" method="post">
        <h3 style="text-transform: uppercase;">EDITAR</h3>
        <div>
        <label for="IdCliente">id</label>
        <div>
            <input type="text" name="IdCliente" value="<?=$dados["Id"]?>">
        </div>
        </div>
        <div>
        <label for="nome">Nome do Cliente</label>
        <div>
            <input type="text" name="nome" value="<?=$dados["Nome"]?>">
        </div>
        </div>

        <div>
            <label for="addTitulo">Titulo</label>
            <div>
                <input type="text" name="addTitulo" value="<?=$dados["Titulo"]?>">
            </div>
        </div>
    
    <div>
        <label for="addDescri">Descrição</label>
        <div>
            <input type="text" name="addDescri" value="<?=$dados["Descri"]?>">
        </div>
    </div>
    <div>
        <label for="addInicial">Data Inicial</label>
        <div>
            <input type="date" name="addInicial" value="<?=$dados["DataInicial"]?>">
        </div>
    </div>
    <div>
        <label for="addFinal">Data Final</label>
        <div>
            <input type="date" name="addFinal" value="<?=$dados["DataFinal"]?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </div>
    </form>
    </div>
    
</body>
</html>