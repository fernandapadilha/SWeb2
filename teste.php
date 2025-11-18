<?php
$ipv4 = $_SERVER["REMOTE_ADDR"];
$dataHoraAcesso = date('d/m/Y H:i:s'); 
echo "<html>";
echo "<head><title>Servidor SWeb02</title></head>";
echo "<body style='background-color: #ffdd7fff;'>";
echo "<center>";
echo "<img src='/imagens/frajola-bebe.png'>";
echo "<h1>Página de teste PHP no Servidor SWeb02</h1>";
echo "<h1> Renata-1711 - Vitória-1829</h1>";
echo "<h1>Servidor SWeb02</h1>";
echo "<h1>Endereço IP do Servidor: $ipv4</h1>";
echo "<h2>Data e Hora de Acesso: $dataHoraAcesso</h2>";
echo "</center>";
phpinfo();
echo "</body>";
echo "</html>";
