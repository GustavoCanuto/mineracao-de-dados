#!/bin/bash
CAM='/var/www/html/baudrillarBistro/dados/go.csv'

declare -A DIAS

while IFS=',' read -r _ c2 _ _ c5 _ _
do
 if [[ "$c2" != "Gorjeta" ]]; then
  DIAS[$c5]=$(echo "${DIAS[$c5]:-0} + $c2" | bc)
 fi
done < "$CAM"

for DIA in "${!DIAS[@]}"
do
  echo "Total de gorjetas em $DIA: ${DIAS[$DIA]}"
done
