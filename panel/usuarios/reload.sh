#!/bin/sh
#echo “Recargando Allowlist”
sudo chown -hR username:www-data dirname/minecraftbe
sudo chmod -R 775 dirname/minecraftbe
screen -Rd servername -X stuff "allowlist reload $(printf '\r')"
screen -Rd servername -X stuff "say Nuevo Jugador Agregado $(printf '\r')"