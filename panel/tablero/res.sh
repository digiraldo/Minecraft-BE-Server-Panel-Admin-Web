#!/bin/sh
#echo “Reiniciando Servidor servername”
screen -Rd servername -X stuff "say Reiniciando el Servidor, GUARDA TU PARTIDA$(printf '\r')"
sleep 2s
sudo chown -hR username:www-data dirname/minecraftbe
sleep 2s
sudo chmod -R 775 dirname/minecraftbe
sleep 2s
sudo systemctl restart servername
echo “Servidor Reiniciado”
