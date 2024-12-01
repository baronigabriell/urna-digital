<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css"> 
    <title>Votar</title>
</head>
<header>
    <h1>ÁREA DE VOTAÇÃO</h1>
</header>
<body> 
    <table border="0" class="custom-table" style="border-radius: 20px;"> 
        <?php
            include "conecta_urna.php";

            $busca = $_POST["buscar"];

            $query = mysqli_query($conexao, "SELECT ele_codigo, ele_nome, ele_cpf FROM eleitor WHERE ele_cpf LIKE '%$busca%' GROUP BY 1");

            while ($saida = mysqli_fetch_array($query)) {
                $codigo  = $saida[0];
                $cpf     = $saida[1];
                $nome    = $saida[2];


                echo "<tr>";
                echo "<td class='titulo'>" . $codigo . "</td>";
                echo "<td class='titulo'>" . $nome . "</td>";
                echo "<td class='titulo'>" . $cpf . "</td>";
                echo "<td id='votar'><a href=votar.php?id=" . $codigo . ">Votar</a></td>";
                echo "</tr>";
            }
            mysqli_close($conexao);
        ?>
    </table>
</body>
<style>
    .custom-table {
        border-collapse: collapse;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: rgb(120, 120, 120) 0px 0px 30px 0.01px;
    }
    table td {
        border: 1px solid black;
        padding: 9px;
    }
    .titulo {
        background-color: #0EAD69;
        color: white;
    }
    #votar {
        background-color: #313B72;
        color: white;
        position: relative;
        padding: 10px;
        text-align: center;
    }
    a {
        color: inherit;
        text-decoration: none;
        display: inline-block;
    }
    #votar::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 1px;
        width: 100%;
        height: 2px;
        background-color: white;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    #votar:hover::after {
        transform: scaleX(1);
    }
    header{
        background-color: #313B72;
        height: 100px;
        display: flex;
    }
</style>
</html>