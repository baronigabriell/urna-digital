<?php
    include "conecta_urna.php";

    $codigo = $_GET["codigo"];
    $nome = $_GET["nome"];
    $cpf = $_GET["cpf"];

    $query = mysqli_query($conexao,"update eleitor set ele_nome = \"$nome\", ele_cpf = \"$cpf\"
                                    where ele_codigo = '$codigo'") or die ("Erro na Edição");

    echo "<h3>EDITADO COM SUCESSO!</h3>";
    

?>