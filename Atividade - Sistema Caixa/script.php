<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Transação</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: "Inter", sans-serif;
        background: rgb(173,255,180);
        background: linear-gradient(90deg, rgba(173,255,180,1) 0%, rgba(250,250,250,1) 100%);
    }

    h1 {color: green;}
    .container {
        width: 39%;
        height: 60%;
        margin: 50px auto;
        margin-top: 16%;
        padding: 20px;
        background-color: #fff;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.3);;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(11.2px);
        -webkit-backdrop-filter: blur(11.2px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        font-size: 30px;
    }
    </style>
</head>
<body>

<div class="container">
    <h1>Resultado da Transação</h1>
    <?php
    $nome =  $_POST['nome']; 
    $valor1 =  $_POST['vl1'];
    $valor2 =  $_POST['vl2'];
    $valorcliente =  $_POST['vlpagocliente'];
    $soma = $valor1 + $valor2;
    $troco = $valorcliente - $soma;

    echo "Nome: $nome <br>";
    echo "Quantia gasta: R$$soma <br>";
    echo "Quantia inserida: R$$valorcliente <br>";
    echo "O troco é: R$<span class='troco'>$troco</span> <br>";
    ?>
</div>

</body>
</html>
