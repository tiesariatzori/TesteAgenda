<?php
 
 include("../db/config.php");

 $conexao = mysqli_connect(SERVIDOR,user,senha,banco) or die ("erro na conexão com servidor".mysqli_connect_error());

?>