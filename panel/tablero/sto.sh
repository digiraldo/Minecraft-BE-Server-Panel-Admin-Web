#!/bin/sh
#echo “Deteniendo Servidor servername”
screen -Rd servername -X stuff "say Deteniendo el Servidor, GUARDA TU PARTIDA! $(printf '\r')"
sleep 3s
sudo systemctl stop servername
echo “Servidor Detenido”