#!/bin/bash
CAM='/var/www/html/baudrillarBistro/dados/go.csv'

TOTAL_N=0
TOTAL_S=0

while IFS=',' read -r _ c2 _ c4 _ _ _
do
 if [[ "$c2" != "Gorjeta" ]]; then
  if [[ "$c4" == "N" ]]; then
    TOTAL_N=$(echo "$TOTAL_N + $c2" | bc)
  elif [[ "$c4" == "S" ]]; then
    TOTAL_S=$(echo "$TOTAL_S + $c2" | bc)
  fi
 fi
done < "$CAM"

echo "Total de gorjetas (Não fumantes): $TOTAL_N"
echo "Total de gorjetas (Fumantes): $TOTAL_S"
