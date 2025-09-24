<?php
  session_start();
  if(!isset($_SESSION['logado'])){
        header("Location: index.html");
        exit();
  }
 echo "<h2>Total de Gorjetas e Média</h2>";
 $CAM = "/var/www/html/baudrillarBistro/calculos/levantamentos.sh";
//echo "Executando: $CAM <br>";
//$VAR = shell_exec("$CAM 2>&1");
//echo "<pre>$VAR</pre>";
 $VAR = shell_exec("$CAM");
 echo "<pre>$VAR</pre>";
 echo "<p> <a href=menu.php> <img src=figs/casa.svg width=30></a> </p>";
 echo "<p><a href=sair.php>Sair</a></p>";
?>

