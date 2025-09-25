<?php
$arquivo = fopen("../dados/go.csv", "r");
fgetcsv($arquivo); // cabeçalho

$gorjetas_fumante = [];
$contagem = [];

while (($linha = fgetcsv($arquivo, 1000, ",")) !== FALSE) {
    $gorjeta = (float)$linha[1];
    $fumante = $linha[3]; // 'S' ou 'N'

    if (!isset($gorjetas_fumante[$fumante])) {
        $gorjetas_fumante[$fumante] = 0;
        $contagem[$fumante] = 0;
    }

    $gorjetas_fumante[$fumante] += $gorjeta;
//    $contagem[$fumante]++;
}

//media

//foreach ($gorjetas_fumante as $k => $total) {
//    $gorjetas_fumante[$k] = $total / $contagem[$k]; // média
//}

fclose($arquivo);
?>
