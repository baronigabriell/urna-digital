<?php
    include "conecta_urna.php";

    $id = $_GET["id"];

    $query = mysqli_query($conexao, "delete from candidato where can_codigo = '$id'") or die ("erro ao excluir");

    echo ("<h3>DELETADO COM SUCESSO! <3</h3>");
?>
<html>
<head>
    <title>Exclusão</title>
</head>
<style>
    
</style>
<body>
    <form action="inclusao_can.php">
        <input type="submit" value="Voltar">
    </form>
</body>
</html>