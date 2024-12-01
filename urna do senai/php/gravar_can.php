<?php
    include "conecta_urna.php";

    $nome = $_POST["nome"];
    $numero = $_POST ["numero"];
    $partido = $_POST ["partido"]; 



    echo "<br>";
    echo $nome;
    
    echo "<br>";
    echo $numero;
    
    echo "<br>";
    echo $partido;


    $query = mysqli_query($conexao, "insert into candidato (can_nome, can_numero, can_partido) values ('$nome','$numero','$partido');");

    echo("<br>Gravado! Deseja ir a consulta?");
    mysqli_close ($conexao);
?>