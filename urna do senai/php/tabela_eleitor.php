<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css"> 
        <title>Consultar eleitor</title>
    </head>
    <header>
        <h1>ÁREA DO ELEITOR</h1>
    </header>
    <body> 
        <div class="container">
            <table border="0" class="custom-table"> 
                <tr> 
                    <td class="nome">Nome</td>
                    <td class="nome">CPF</td>
                    <td class="nome">Excluir</td>
                    <td class="nome">Alterar</td>
                </tr>

                <?php
                    include "conecta_urna.php";

                echo $busca = $_POST["buscarx"];

                    $query = mysqli_query($conexao, "select ele_codigo, ele_nome, ele_cpf from eleitor where ele_nome like \"%$busca%\" group by 1");

                    while ($saida = mysqli_fetch_array($query))
                    {
                        $codigo = $saida[0];
                        $nome = $saida[1];
                        $cpf = $saida[2];

                    
                        echo  "<td class='titulo'>" .$nome . "</td>";
                        echo  "<td class='titulo'>" .$cpf. "</td>";
                        echo  "<td id='excluir'><a href=exclusao_ele.php?id=".$codigo.">OK</a></td>";
                        echo  "<td id='alterar'><a href=alteracao_ele.php?id=".$codigo.">OK</a></td>";
                        echo  "</tr>";
                    }
                    mysqli_close($conexao);
                ?>
            </table>
        </div>
    </body>
    <style>
    body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        header {
            background-color: #313B72;
            height: 100px;
            color: white;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-grow: 1;
            overflow-y: auto;
        }

        .custom-table {
            border-collapse: collapse;
            box-shadow: rgb(120, 120, 120) 0px 0px 30px 0.01px;
            width: 80%;
            max-width: 900px;
            margin-top: 70px;
        }

        table td {
            border: 1px solid black;
            padding: 9px;
        }

        .titulo {
            background-color: #0EAD69;
            color: white;
        }

        .nome {
            background-color: #313B72;
            color: white;
        }

        a {
            color: inherit;
            text-decoration: none;
            display: block;
            height: 100%; 
        }

        #alterar, #excluir {
            background-color: #0EAD69;
            color: white;
            position: relative;
            text-align: center;
            padding: 10px;
        }

        #alterar::after, #excluir::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 2px;
            background-color: white;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        #alterar:hover::after, #excluir:hover::after {
            transform: scaleX(1);
        }
    </style>
</html>