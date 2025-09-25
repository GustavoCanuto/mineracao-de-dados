<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: ../index.html");
    exit();
}
echo "<h2>Total de Gorjetas por Gênero</h2>";
$VAR = shell_exec("/var/www/html/baudrillarBistro/calculos/por_genero.sh");
echo "<pre>$VAR</pre>";
echo '<a href="../menu.php">Voltar ao Menu</a> | <a href="../sair.php">Sair</a>';
?>
