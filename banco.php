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

echo "<html>";
echo "<head><title>Servidor SWeb02</title></head>";
echo "<body style='background-color: #bae6adff;'>";
echo "<center>";
echo "<h1>SWeb02 -  Renata e Vitoria - 1829-1711</h1>";
echo "<img src='/imagens/frajola-bebe.png'>";
if ($result->rowCount() > 0) {
	echo "<table border='1' align='center'>";
	echo "<tr><th>ID</th><th>Nome</th><th>Telefone</th></tr>";
	foreach ($result as $row) {
    	echo "<tr>";
    	echo "<td>" . $row['id_alunos'] . "</td>";
    	echo "<td>" . $row['nm_alunos'] . "</td>";
    	echo "<td>" . $row['nr_telefone'] . "</td>";
    	echo "</tr>";
	}
	echo "</table>";
} else {
	echo "<center>Nenhum registro encontrado.</center>";
}
$conn = null;
echo "<h1>Endereço IP do Servidor: $ipv4</h1>";
echo "<h2>Data e Hora de Acesso: $dataHoraAcesso</h2>";
echo  "</center>";
echo "</body>";
echo "</html>";
?>
