#!/bin/sh
echo “Reiniciando Servidor servername<br>”;
screen -Rd servername -X stuff "say Reiniciando el Servidor, GUARDA TU PARTIDA! $(printf '\r')"
sleep 6s
echo “Reiniciando:<br>”;
sudo systemctl restart servername