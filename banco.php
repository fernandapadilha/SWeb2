<?php
$ipv4 = $_SERVER["REMOTE_ADDR"];
$dataHoraAcesso = date('d/m/Y H:i:s'); 
$servidor = "10.200.200.5";
$base = "dbSIC0217";
$usuario = "SIC0217user";
$senha = "alunos";
try {
    $conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
$sql = "SELECT * FROM tb_alunos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Servidor SWeb02</title>
<style>
    body {
        background: linear-gradient(135deg, #b6e6a8, #d4f7c3);
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: #2b2b2b;
    }

    h1, h2 {
        text-align: center;
        color: #2e4e1f;
    }

    .container {
        width: 85%;
        margin: auto;
        padding-top: 40px;
    }

    img {
        display: block;
        margin: 20px auto;
        width: 180px;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
    }

    table {
        width: 70%;
        margin: 20px auto;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        border-radius: 10px;
        overflow: hidden;
        animation: fadeIn 0.6s ease-out;
    }

    table th {
        background: #6cb55a;
        color: white;
        padding: 12px;
        font-size: 18px;
    }

    table td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    table tr:nth-child(even) {
        background: #f3ffe8;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .info-box {
        margin-top: 30px;
        padding: 15px;
        background: #ffffffcc;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        text-align: center;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>SWeb02 - Renata e Vitoria - 1829-1711</h1>
        <img src="/imagens/frajola-bebe.png" alt="Frajola Bebê">

        <?php if ($result->rowCount() > 0) { ?>
            <table>
                <tr><th>ID</th><th>Nome</th><th>Telefone</th></tr>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <td><?= $row['id_alunos'] ?></td>
                        <td><?= $row['nm_alunos'] ?></td>
                        <td><?= $row['nr_telefone'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <h2>Nenhum registro encontrado.</h2>
        <?php }
        $conn = null;
        ?>

        <div class="info-box">
            <h2>Endereço IP do Servidor: <?= $ipv4 ?></h2>
            <h2>Data e Hora de Acesso: <?= $dataHoraAcesso ?></h2>
        </div>
    </div>
</body>
</html>
