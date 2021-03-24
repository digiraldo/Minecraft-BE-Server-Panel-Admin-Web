#!/bin/sh
echo “Reiniciando Servidor servername”
screen -Rd servername -X stuff "say Reiniciando el Servidor, GUARDA TU PARTIDA! $(printf '\r')"
sleep 4s
sudo systemctl restart servername
echo “Servidor Reiniciado”
