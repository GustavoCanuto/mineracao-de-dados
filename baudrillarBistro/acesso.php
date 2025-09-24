<?php
  session_start();
  $NOME = $_POST['login'];
  $SENHA = $_POST['senha'];
  if($NOME == 'joca' && $SENHA == '123'){
	$_SESSION['logado'] = true;
	header("Location: menu.php");
	exit();
  }else{
    echo "<script>
            alert('Senha incorreta');
            window.location.href = 'index.html';
          </script>";
    exit();
  }
?>
