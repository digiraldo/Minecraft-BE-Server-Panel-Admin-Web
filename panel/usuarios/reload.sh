#!/bin/sh
#echo “Recargando Whitelist”
sudo chown -hR username:www-data dirname/minecraftbe
sudo chmod -R 775 dirname/minecraftbe
screen -Rd servername -X stuff "whitelist reload$(printf '\r')"
screen -Rd servername -X stuff "say Hola Bienvenido al nuevo Jugador :')$(printf '\r')"