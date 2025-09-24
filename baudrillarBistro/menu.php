<?php
  session_start();
  if(!isset($_SESSION['logado'])){
        header("Location: acesso.html");
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
  <p>	<a href="levantamentos.php"> Levantamento Geral  </a> </p>
  <p>	<a href="media.php">Total e Média</a> </p> 
  <p>	<a href="desvio.php">Total e Desvio Padrão</a> </p>
  <p>	<a href="genero.php">Total por Gênero</a> </p>
  <p>	<a href="fumante.php">Total por Fumante</a> </p>
  <p>	<a href="dia.php">Total por Dia da Semana</a> </p>
  <p> <a href="sair.php">Sair</a> </p>
 </body>
</html>
