<?php
 include("../db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/iconeagenda.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/index.css">
    <title>Agenda</title>
</head>
<body>
<header class="cabeca">
    <h1>Agenda</h1>
    <nav class = "menu">
    <a href="index.php?menuop=eventoPass">Evento pass.</a>
    <a href="index.php?menuop=contatos"> contatos </a>
    <a href="index.php?menuop=eventProx">eventos  prox.</a>
    </nav>
</header>
<main>
<?php
   $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"]:"contatos";
   switch ($menuop) {
    case 'cadastro':
        include("../php/cadastrar.php");
        break;
       case 'contatos':
        include("../php/contatos.php");
           break;
       case 'eventoPass':
        include("../php/eventPass.php");
        break;
        case 'eventProx':
            include("../php/eventProx.php");
            break;
            case 'inserir':
                include("../php/inserir.php");
                break;
                case 'editar':
                    include("../php/editar.php");
                    break;
                    case 'Atualizar':
                        include("../php/Atualizar.php");
                        break;
                        case 'excluir':
                            include("../php/excluir.php");
                            break;
                            case 'Confirmar':
                                include("../php/confirmarEx.php");
                                break;
       default:
           include("../php/contatos.php");
           break;
   }
  

?>

</main>
    
</body>
</html>