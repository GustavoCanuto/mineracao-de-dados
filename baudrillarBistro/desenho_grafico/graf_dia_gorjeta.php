<?php

 session_start();
 if (!isset($_SESSION['logado'])) {
     header("Location: ../index.html");
     exit();
 }


include '../calculo_grafico/calc_graf_dia.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gorjeta por Dia da Semana</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Total de Gorjetas por Dia da Semana</h2>
    <canvas id="grafico"></canvas>

    <script>
        const ctx = document.getElementById('grafico').getContext('2d');
        const grafico = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_keys($gorjetas_por_dia)); ?>,
                datasets: [{
                    label: 'Gorjeta Total (R$)',
                    data: <?php echo json_encode(array_values($gorjetas_por_dia)); ?>,
                    backgroundColor: 'rgba(255, 159, 64, 0.6)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Dia da Semana'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Gorjeta Total (R$)'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <br>
    <a href="../menu.php">Voltar ao Menu</a> |  
    <a href="../sair.php">Sair</a>
</body>
</html>
