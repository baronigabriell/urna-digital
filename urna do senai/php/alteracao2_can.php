
<?php
    include "conecta_urna.php";

    $codigo = $_GET["codigo"];
    $nome = $_GET["nome"];
    $numero = $_GET["numero"];
    $partido = $_GET["partido"];

    $query = mysqli_query($conexao,"update candidato set can_nome = \"$nome\", can_numero = \"$numero\", can_partido = \"$partido\"
                                    where can_codigo = '$codigo'") or die ("Erro na Edição");

    echo "<h3>EDITADO COM SUCESSO!</h3>";
    

?>