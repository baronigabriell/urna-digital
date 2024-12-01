<?php
    include "conecta_urna.php";

    $nome = $_POST["nome"];
    $cpf = $_POST ["cpf"];



    echo "<br>";
    echo $nome;
    
    echo "<br>";
    echo $cpf;


    $query = mysqli_query($conexao, "insert into eleitor (ele_nome, ele_cpf) values ('$nome','$cpf');");

    echo("<br><tr>Gravado!</tr>");
    mysqli_close ($conexao);
?>
<html>
    <style>

    </style>
</html>