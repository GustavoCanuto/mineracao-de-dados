<?php
$arquivo = fopen("../dados/go.csv", "r");
fgetcsv($arquivo); // pula o cabeçalho

$gorjetas_por_dia = [];

while (($linha = fgetcsv($arquivo, 1000, ",")) !== FALSE) {
    $gorjeta = (float)$linha[1];
    $dia = $linha[4]; // coluna 'Dia' (ex: Dom, Sab, Sex)

    if (!isset($gorjetas_por_dia[$dia])) {
        $gorjetas_por_dia[$dia] = 0;
    }

    $gorjetas_por_dia[$dia] += $gorjeta;
}

fclose($arquivo);
?>
