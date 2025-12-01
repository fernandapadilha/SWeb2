<?php
$ipv4 = $_SERVER["REMOTE_ADDR"];
$dataHoraAcesso = date('d/m/Y H:i:s'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Servidor SWeb02</title>
<style>
    body {
        background: linear-gradient(135deg, #f7f9fc, #e8f0ff);
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        color: #2d2d2d;
        text-align: center;
    }

    img {
        width: 160px;
        margin-top: 30px;
        filter: drop-shadow(0 4px 10px rgba(0,0,0,0.15));
    }

    h1, h2 {
        margin: 12px 0;
        font-weight: 500;
    }

    h1 {
        font-size: 28px;
        color: #3a5ba0;
        text-shadow: 0 0 6px rgba(58, 91, 160, 0.2);
    }

    h2 {
        font-size: 20px;
        color: #505050;
    }

    .container {
        background: #ffffffee;
        backdrop-filter: blur(4px);
        width: 75%;
        margin: 30px auto;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.12);
        border: 1px solid #d6dff3;
    }

    .phpinfo-box {
        background: #ffffffdd;
        backdrop-filter: blur(3px);
        margin: 40px auto;
        width: 85%;
        padding: 20px;
        border-radius: 10px;
        color: #333;
        box-shadow: 0 4px 15px rgba(0,0,0,0.10);
        border: 1px solid #cfd8ea;
    }

    a { color: #3a5ba0; }

    table { color: #333; }
</style>
</head>
<body>

    <div class="container">
        <img src="/imagens/frajola-bebe.png" alt="Frajola Bebê">

        <h1>Página de teste PHP no Servidor SWeb02</h1>
        <h1>Renata-1711 - Vitória-1829</h1>
        <h1>Servidor SWeb02</h1>
        <h1>Endereço IP do Servidor: <?= $ipv4 ?></h1>
        <h2>Data e Hora de Acesso: <?= $dataHoraAcesso ?></h2>
    </div>

    <div class="phpinfo-box">
        <?php phpinfo(); ?>
    </div>

</body>
</html>
