<?php
  session_start();
  if(!isset($_SESSION['logado'])){
        header("Location: index.html");
        exit();
  }
?>

<html>
 <head>
  <meta charset="UTF-8">
  <title>Baud Bistrô</title> 
 </head>
 <body>
  <h2>Baudrillard Bistrô</h2>
  <p>	<a href="dados.php"> Ver dados </a> </p> 
  <p>	<a href="exibir_calculo/levantamentos.php"> Levantamento Geral  </a> </p>
  <p>	<a href="exibir_calculo/media.php">Total e Média</a> </p> 
  <p>	<a href="exibir_calculo/desvio.php">Total e Desvio Padrão</a> </p>
  <p>	<a href="exibir_calculo/genero.php">Total por Gênero</a> </p>
  <p>	<a href="exibir_calculo/fumante.php">Total por Fumante</a> </p>
  <p>	<a href="exibir_calculo/dia.php">Total por Dia da Semana</a> </p>
  <p>	<a href="desenho_grafico/graf_total_gorjeta.php">Grafico Gojerta X Total</a> </p>
  <p>	<a href="desenho_grafico/graf_media_fumante_gorjeta.php">Grafico Gojerta X Fumante</a> </p>
  <p>	<a href="desenho_grafico/graf_dia_gorjeta.php">Grafico Gojerta X Dia Semana</a> </p>
  <p> <a href="sair.php">Sair</a> </p>
 </body>
</html>
