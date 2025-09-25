<?php

session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: ../index.html");
    exit();
}

// Lê arquivo CSV
$arquivo = fopen("../dados/go.csv", "r");
$totais = [];
$gorjetas = [];

// Pular o cabeçalho se existir
$header = fgetcsv($arquivo);

while (($linha = fgetcsv($arquivo, 1000, ",")) !== FALSE) {
    // Ajuste os índices conforme o CSV
    $total = (float)$linha[0]; // supondo que a 1ª coluna seja total da conta
    $gorjeta = (float)$linha[1]; // supondo que a 2ª coluna seja gorjeta

    $totais[] = $total;
    $gorjetas[] = $gorjeta;
}

fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gráfico de Gorjetas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Relação entre Valor da Conta e Gorjeta</h2>
    <canvas id="grafico"></canvas>

    <script>
        const ctx = document.getElementById('grafico').getContext('2d');
        const grafico = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($totais); ?>,
                datasets: [{
                    label: 'Gorjeta (R$)',
                    data: <?php echo json_encode($gorjetas); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Valor Total da Conta (R$)'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Gorjeta (R$)'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
<br> <a href="../menu.php">Voltar ao Menu</a> |  <a href="../sair.php">Sair</a>

</body>
</html>

