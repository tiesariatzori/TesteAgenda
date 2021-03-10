<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <form action="index.php?menuop=inserir" method="post">
        <h3 style="text-transform: uppercase;">Cadastro contato na agenda</h3>
        <div>
        <label for="nome">Nome do Cliente</label>
        <div>
            <input type="text" name="nome">
        </div>
        </div>

        <div>
            <label for="addTitulo">Titulo</label>
            <div>
                <input type="text" name="addTitulo">
            </div>
        </div>
    
    <div>
        <label for="addDescri">Descrição</label>
        <div>
            <input type="text" name="addDescri">
        </div>
    </div>
    <div>
        <label for="addInicial">Data Inicial</label>
        <div>
            <input type="date" name="addInicial">
        </div>
    </div>
    <div>
        <label for="addFinal">Data Final</label>
        <div>
            <input type="date" name="addFinal">
        </div>
        <div>
            <input type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </div>
    </form>
    </div>

</body>

</html>