<?php
    include "conecta_urna.php";

    $id = $_GET["id"];

    $query = mysqli_query ($conexao, "select can_codigo, can_nome, can_numero, can_partido from candidato where can_codigo = '$id'") 
                           or die ("Erro ao Editar");
    
    $saida = mysqli_fetch_array ($query);

    $codigo = $saida[0];
    $nome = $saida[1];
    $numero = $saida[2];
    $partido = $saida[3];

?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>Alterar</title></title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <header>
        <h1>ÁREA DO CANDIDATO</h1>
    </header>
    <body>
        <form method = "get" action = "alteracao2_can.php">
            <table>
                <tr>
                  <td>Código:<input type = "text" name="codigo_v" value =<?php echo $codigo; ?> disabled></td>
                  <input type= hidden name= "codigo" value = <?php echo $codigo; ?>>
                   <td>Nome: <input type = "text" name="nome" value =<?php echo $nome; ?>></td>
                   <td>Número: <input type = "text" name="numero" value =<?php echo $numero; ?>></td>
                    <td>Partido: <input type = "text" name="partido" value =<?php echo $partido; ?>></td>
                 </tr>

                </table>
                <input id="button" type=submit value= "Confirmar">
        </form>
    </body>
</html>