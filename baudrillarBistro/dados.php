<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: index.html");
    exit();
}

$csvFile = 'dados/go.csv';
$dados = [];

// Lê o CSV e armazena os dados
if (file_exists($csvFile)) {
    if (($handle = fopen($csvFile, "r")) !== FALSE) {
        while (($linha = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $dados[] = $linha;
        }
        fclose($handle);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bistrô - Semana</title>
</head>
<body>


    <table border="1">
        <?php if (!empty($dados)): ?>
            <tr>
                <?php foreach ($dados[0] as $coluna): ?>
                    <th><?php echo htmlspecialchars($coluna); ?></th>
                <?php endforeach; ?>
            </tr>
            <?php for ($i = 1; $i < count($dados); $i++): ?>
                <tr>
                    <?php foreach ($dados[$i] as $valor): ?>
                        <td><?php echo htmlspecialchars($valor); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor; ?>
        <?php else: ?>
            <tr><td colspan="7">Arquivo CSV vazio ou não encontrado.</td></tr>
        <?php endif; ?>
    </table>

    <p><a href="menu.php"> <img src=figs/casa.svg width=30></a> </p>

    <p><a href="sair.php">Sair</a></p>

</body>
</html>
