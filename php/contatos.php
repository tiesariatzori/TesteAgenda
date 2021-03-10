<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h3>Contatos</h3>
    <div class="cadastro">
    <a href="index.php?menuop=cadastro">Cadastrar contato</a>
    </div>
    <div>
        <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="Procurar">
        <input type="submit" value="Pesquisar">

        </form>
    </div>
    <table>
        <thead>
        <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>DataInic</th>
        <th>DataFinal</th>
        <th>Editar</th>
        <th>excluir</th>
        </tr>
       
        </thead>
   <tbody>
       <?php
       $quantidade = 10;
       $pagina = (isset($_GET['pagina']))?(int)$_GET["pagina"]:1;
       $inicio = ($quantidade * $pagina)- $quantidade;

       $Pesquisar = (isset($_POST["Procurar"]))?$_POST["Procurar"]:"";
       $sql = "SELECT * FROM cliente WHERE Id = '{$Pesquisar}'
       or Nome LIKE '%{$Pesquisar}%'
       ORDER BY Nome ASC
       LIMIT $inicio , $quantidade";
       $rs = mysqli_query($conexao,$sql) or die ("erro ao executar a consulta".mysqli_error($conexao));
       while($dados= mysqli_fetch_assoc($rs)){ 
       ?>

        <tr>
        <td><?=$dados["Id"]?></td>
        <td><?=$dados["Nome"]?></td>
        <td><?=$dados["Titulo"]?></td>
        <td><?=$dados["Descri"]?></td>
        <td><?=$dados["DataFinal"]?></td>
        <td><?=$dados["DataInicial"]?></td>
        <td><a href="index.php?menuop=editar&idContato=<?=$dados["Id"]?>"> editar</a></td>
        <td><a href="index.php?menuop=excluir&idContato=<?=$dados["Id"]?>">excluir</a></td>


        </tr>
<?php


       }
       ?>

 
</tbody>
</table>
<?php
$sqltotal = "SELECT Id FROM cliente";
$qrtotal = mysqli_query($conexao,$sqltotal)  or die ("erro".mysqli_error($conexao));
$numtotal = mysqli_num_rows($qrtotal);
$totalpagina = ceil($numtotal/$quantidade);
echo '<a href="?menuop=contatos&pagina=1"> primeira pagina </a>';
if($pagina>6){
 ?>
  <a href="?menuop=contatos$pagina=<?php echo $pagina-1?>"> << </a>;
 <?php
    
    
}
for ($i=1;$i<=$totalpagina;$i++){
    if($i>=($pagina-5) && $i <=($pagina+5)){
        if($i==$pagina){
            echo $i;
        }else{
           echo "<a href=\"?menuop=contatos&pagina=$i\">$i</a>";
        }

    }
  
}
if($pagina<($totalpagina-5)){
    ?>
     <a href="?menuop=contatos$pagina=<?php echo $pagina+1?>"> >> </a>;
    <?php
       
       
   }
echo "<a href=\"?menuop=contatos&pagina=$totalpagina\">ultima pagina</a>";

?>
    
</body>
</html>