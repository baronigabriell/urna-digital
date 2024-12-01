<?php
    include "conecta_urna.php";

    $id = $_GET["id"];

    $query = mysqli_query($conexao, "delete from eleitor where ele_codigo = '$id'") or die ("erro ao excluir");

    echo ("<h3>DELETADO COM SUCESSO! <3</h3>");
?>
<html>
<head>
    <title>Exclusão</title>
</head>
<body>
    <form action="inclusao_ele.php">
        <input type="submit" value="Voltar">
    </form>
</body>
</html>