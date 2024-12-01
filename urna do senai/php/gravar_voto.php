<?php
include "conecta_urna.php";

        $id   = $_GET['id'];
        $voto = $_GET['voto'];

        $query = mysqli_query($conexao, "INSERT INTO voto (vot_ele_cod,vot_vot) VALUES ('$id','$voto')");
?>
<html>
        <head>
                <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        </head>
<body>
        <div>
        <h1>Fim!</h1>
        <br>
        <p>Deseja ir à apuração?</p>
        <br>
        <a href="apuracao.php">
                <button>Apuração</button>
        </a>
        </div>
</body>
<style>
        body{
                display: flex;
                justify-content: center;
                align-items: center;
        }
        div{
                display: flex;
                flex-direction: column;
                align-items: center;
        }
        h1{
                font-size: 40px;
                font-family: poppins;
                color: #0EAD69;
                margin: 0;
        }
        p{
                font-size: 40px;
                font-family: poppins;
                color: #0EAD69;
                margin: 0;
        }
        button{
                background-color: #0EAD69;
                color: #FFFAFF;
                border: none;
                height: 60px;
                border-radius: 15px;
                font-size: 18px;
                font-family: poppins;
                padding: 0px 12px;
        }
        button:hover{
                background-color: #FFFAFF;
                color: #0EAD69;
                transition: 0.3s all ease-in; 
                box-shadow: #d1ccd1 0px 0px 25px 0px;
                cursor: pointer;
        }
        button:not(:hover){
                background-color: #0EAD69;
                color: #FFFAFF;
                transition: 0.3s all ease-in; 
        }
        button:active{
                transform: scale(0.9);
        }
</style>
</html>
