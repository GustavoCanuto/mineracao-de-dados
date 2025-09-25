<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: ../index.html");
    exit();
}
echo "<h2>Total e Média de Gorjetas</h2>";
$VAR = shell_exec("/var/www/html/baudrillarBistro/calculos/media.sh");
echo "<pre>$VAR</pre>";
echo '<a href="../menu.php">Voltar ao Menu</a> | <a href="../sair.php">Sair</a>';
?>
