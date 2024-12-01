<?php
    include "conecta_urna.php";

    $id = $_GET["id"];

    $query = mysqli_query ($conexao, "select ele_codigo, ele_nome, ele_cpf from eleitor where ele_codigo = '$id'") 
                           or die ("Erro ao Editar");
    
    $saida = mysqli_fetch_array ($query);

    $codigo = $saida[0];
    $nome = $saida[1];
    $cpf = $saida[2];

?>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>Alterar</title></title>
        <link rel="stylesheet" href="../css/style.css"> 
    </head>
    <header>
        <h1>ÁREA DO ELEITOR</h1>
    </header>
    <body>
        <form method = "get" action = "alteracao2_ele.php">
            <table>
                <tr>
                  <td>Código:<input type = "text" name="codigo_v" value =<?php echo $codigo; ?> disabled></td>
                  <input type= hidden name= "codigo" value = <?php echo $codigo; ?>>
                   <td>Nome: <input type = "text" name="nome" value =<?php echo $nome; ?>></td>
                   <td>CPF: <input type = "text" name="cpf" value =<?php echo $cpf; ?>></td>
                 </tr>

                </table>
                <input id="button" type=submit value= "Confirmar">
        </form>
    </body>
</html>