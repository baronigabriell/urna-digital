<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<header>
    <h1>ÁREA DO CANDIDATO</h1>
</header>
<body>
    <form action="gravar_can.php" method="post" id="form_cand" style="margin-top: 50px;">
        <h1 id="h1cx">Cadastro do(a) candidato(a)</h1>
        <label for="nome">Nome</label>
        <br>
        <input name="nome" placeholder="Digite o nome aqui" type="text">
        <br>
        <label for="numero">Número</label>
        <br>
        <input name="numero" placeholder="Digite o número aqui (5 digitos)" type="text">
        <br>
        <label for="partido">Partido</label>
        <br>
        <input name="partido" placeholder="Digite o partido aqui" type="text">
        <br>
        <a href="gravar_can.php">
            <input type="submit" value="Enviar" id="button">
        </a>

        <input type="submit" value="Consultar" id="button" formaction="consulta_can.php">
    </form>
</body>
</html>