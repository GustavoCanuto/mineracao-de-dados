#!/bin/bash
CAM='/var/www/html/baudrillarBistro/dados/go.csv'

# Primeiro, calcular média
SOMA=0; CONT=0
while IFS=',' read -r _ c2 _ _ _ _ _
do
 if [[ "$c2" != "Gorjeta" ]]; then
  SOMA=$(echo "$SOMA + $c2" | bc)
  CONT=$((CONT + 1))
 fi
done < "$CAM"

MEDIA=$(echo "scale=4; $SOMA / $CONT" | bc)

# Calcular desvio padrão
SDQ=0
while IFS=',' read -r _ c2 _ _ _ _ _
do
 if [[ "$c2" != "Gorjeta" ]]; then
  DIF=$(echo "$c2 - $MEDIA" | bc)
  QUAD=$(echo "$DIF * $DIF" | bc)
  SDQ=$(echo "$SDQ + $QUAD" | bc)
 fi
done < "$CAM"

DESVPAD=$(echo "scale=2; sqrt($SDQ / $CONT)" | bc -l)

echo "Total das gorjetas: $SOMA"
echo "Desvio Padrão: $DESVPAD"
