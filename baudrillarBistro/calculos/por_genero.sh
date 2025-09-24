#!/bin/bash
CAM='/var/www/html/baudrillarBistro/dados/go.csv'

TOTAL_F=0
TOTAL_M=0

while IFS=',' read -r _ c2 c3 _ _ _ _
do
 if [[ "$c2" != "Gorjeta" ]]; then
  if [[ "$c3" == "F" ]]; then
    TOTAL_F=$(echo "$TOTAL_F + $c2" | bc)
  elif [[ "$c3" == "M" ]]; then
    TOTAL_M=$(echo "$TOTAL_M + $c2" | bc)
  fi
 fi
done < "$CAM"

echo "Total de gorjetas (Feminino): $TOTAL_F"
echo "Total de gorjetas (Masculino): $TOTAL_M"
