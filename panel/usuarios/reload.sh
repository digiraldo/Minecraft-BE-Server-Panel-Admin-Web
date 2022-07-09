#!/bin/sh
#echo “Recargando Allowlist”
sudo chown -hR username:www-data dirname/minecraftbe
sudo chmod -R 775 dirname/minecraftbe
sudo -u username screen -Rd servername -X stuff "allowlist reload $(printf '\r')"
sudo -u username screen -Rd servername -X stuff "say Nuevo Jugador Agregado $(printf '\r')"