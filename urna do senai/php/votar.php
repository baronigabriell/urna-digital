<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Front-end da urna</title>
</head>
<style>
    body {
        background-color: rgb(220, 220, 220);
        margin: 0;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        height: 100vh;
    }
    .container {
        display: flex;
        align-items: center;
    }
    #display {
        background-color: white;
        border: solid 2px black;
        width: 1050px;
        height: 650px;
        margin: 40px;
        margin-right: 30px;
        font-family: poppins;
        font-size: 80px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        padding: 30px;
        box-sizing: border-box;
    }
    #display-input {
        width: 100%;
        border: none;
        outline: none;
        font-size: 80px;
    }
    h1 {
        font-size: 40px;
        font-weight: 300;
        margin: 0;
        text-align: left;
        margin-bottom: 50px;
    }
    h2 {
        font-size: 50px;
        margin: 0;
        text-align: center;
        width: 100%;
        margin-bottom: 50px;
    }
    h3{
        font-size: 30px;
        margin: 0;
        font-weight: 400;
    }
    #botoes{
        text-align: center;
        margin-top: 50px;
        margin-left: 20px;
    }
    .button {
        outline: none;
        margin: 17px;
        font-family: poppins;
        background-color: #000000;
        height: 60px;
        width: 60px;
        border: 0;
        color: #ffffff;
        border-radius: 20px;
        font-size: 24px;
        box-shadow: inset 0 0.0625em 0 0 #000000, 0 0.0625em 0 0 #1a1a1a, 0 0.125em 0 0 #333333,
                    0 0.25em 0 0 #4d4d4d, 0 0.3125em 0 0 #666666, 0 0.375em 0 0 #808080,
                    0 0.425em 0 0 #999999,0 0.425em 0.5em 0 #b3b3b3;
        transition: 0.15s ease;
        cursor: pointer;
    }
    .button:active {
        transform: translate(0, 0.225em);
        box-shadow: inset 0 0.03em 0 0 #000000, 0 0.03em 0 0 #1a1a1a, 0 0.0625em 0 0 #333333,      
                    0 0.125em 0 0 #4d4d4d, 0 0.125em 0 0 #666666, 0 0.2em 0 0 #808080,      
                    0 0.225em 0 0 #999999, 0 0.225em 0.375em 0 #b3b3b3; 
    }

    #button-white {
        color: #000000;
        background-color: #f4f4f4; 
        box-shadow: inset 0 0.0625em 0 0 #f4f4f4, 0 0.0625em 0 0 #efefef,
                    0 0.125em 0 0 #ececec, 0 0.25em 0 0 #e0e0e0, 0 0.3125em 0 0 #dedede,
                    0 0.375em 0 0 #dcdcdc, 0 0.425em 0 0 #cacaca, 0 0.425em 0.5em 0 #cecece;
        transition: 0.15s ease;
        cursor: pointer;
    }
    #button-white:active {
        transform: translate(0, 0.225em);
        box-shadow: inset 0 0.03em 0 0 #f4f4f4, 0 0.03em 0 0 #efefef,
                    0 0.0625em 0 0 #ececec, 0 0.125em 0 0 #e0e0e0, 0 0.125em 0 0 #dedede,
                    0 0.2em 0 0 #dcdcdc, 0 0.225em 0 0 #cacaca, 0 0.225em 0.375em 0 #cecece; 
    }

    #button-red {
        color: #000000;
        background-color: #F44336; 
        box-shadow: inset 0 0.0625em 0 0 #F44336, 0 0.0625em 0 0 #E53935, 0 0.125em 0 0 #E53935,
                    0 0.25em 0 0 #C62828, 0 0.3125em 0 0 #B71C1C, 0 0.375em 0 0 #A51C1C,
                    0 0.425em 0 0 #9A1919,0 0.425em 0.5em 0 #8B1515;
        transition: 0.15s ease;
        cursor: pointer;
    }
    #button-red:active {
        transform: translate(0, 0.225em);
        box-shadow: inset 0 0.03em 0 0 #F44336, 0 0.03em 0 0 #E53935 , 0 0.0625em 0 0 #E53935 ,      
                    0 0.125em 0 0 #C62828, 0 0.125em 0 0 #B71C1C, 0 0.2em 0 0 #A51C1C ,      
                    0 0.225em 0 0 #9A1919, 0 0.225em 0.375em 0 #8B1515; 
    }

    #button-green {
        color: #000000;
        background-color: #4CAF50; 
        box-shadow: inset 0 0.0625em 0 0 #4CAF50, 0 0.0625em 0 0 #43A047, 0 0.125em 0 0 #388E3C,
                    0 0.25em 0 0 #2E7D32 , 0 0.3125em 0 0 #27632A , 0 0.375em 0 0 #1B5E20 ,
                    0 0.425em 0 0 #155B21 ,0 0.425em 0.5em 0 #0D3B1B;
        transition: 0.15s ease;
        cursor: pointer;
    }
    #button-green:active {
        transform: translate(0, 0.225em);
        box-shadow: inset 0 0.03em 0 0 #4CAF50, 0 0.03em 0 0 #43A047, 0 0.0625em 0 0 #388E3C,      
                    0 0.125em 0 0 #2E7D32, 0 0.125em 0 0 #27632A, 0 0.2em 0 0 #1B5E20,      
                    0 0.225em 0 0 #155B21, 0 0.225em 0.375em 0 #0D3B1B; 
    }
</style>
<body>
    <form method="get" onsubmit="return confirma()" action="gravar_voto.php">
        <div class="container">
            <div id="display">
                <h1>SEU VOTO PARA</h1>
                <h2>Presidente</h2>
                <h3>Número:</h3>
                <input type="text" id="display-input" name="voto" readonly>
                    
            </div>
            <div id="botoes">
                <div id="numeros">
                    <button type="button" class="button" onclick="addNumber(1)">1</button>
                    <button type="button" class="button" onclick="addNumber(2)">2</button>
                    <button type="button" class="button" onclick="addNumber(3)">3</button>
                    <br>
                    <button type="button" class="button" onclick="addNumber(4)">4</button>
                    <button type="button" class="button" onclick="addNumber(5)">5</button>
                    <button type="button" class="button" onclick="addNumber(6)">6</button>
                    <br>
                    <button type="button" class="button" onclick="addNumber(7)">7</button>
                    <button type="button" class="button" onclick="addNumber(8)">8</button>
                    <button type="button" class="button" onclick="addNumber(9)">9</button>
                    <br>
                    <button type="button" class="button" onclick="addNumber(0)">0</button>
                </div>
                <br><br>
                <button id="button-white" class="button" onclick="" style="width: 155px">BRANCO</button>
                <button type="button" id="button-red" class="button" onclick="clearDisplay()" style="width: 155px">CORRIGE</button>
                <input type="hidden" id="id_ele" value="<?php echo $id; ?>" name="id">
                <input type="submit" id="button-green" class="button" value="CONFIRMA" onclick="return confirma()" style="width: 155px"></input>
            </div>
        </div>
    </form>


    <script>
        function addNumber(num){
            document.getElementById("display-input").value += num;
            var addNumber = new Audio('./digito.mp3'); addNumber.play();
        }
        function clearDisplay(){
            document.getElementById("display-input").value = "";
        }
        function confirma(){
            var confirma = new Audio('confirma.mp3'); confirma.play();
            setTimeout(() => {
                document.querySelector('form').submit();
            }, 1000);
            return false;
        }
    </script>
</body>
</html>