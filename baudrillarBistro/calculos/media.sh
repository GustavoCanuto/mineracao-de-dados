#!/bin/bash
CAM='/var/www/html/baudrillarBistro/dados/go.csv'
SOMA=0; CONT=0
while IFS=',' read -r c1 c2 c3 c4 c5 c6 c7
do
 if [[ "$c2" != "Gorjeta" ]]; then
  SOMA=$(echo "$SOMA + $c2" | bc)
  CONT=$((CONT + 1))
 fi
done < "$CAM"

MED=$(echo "scale=2; $SOMA / $CONT" | bc)
echo "Total das gorjetas: $SOMA"
echo "Média: $MED"
