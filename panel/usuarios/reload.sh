#!/bin/sh
#echo “Recargando Whitelist”
screen -Rd servername -X stuff "whitelist reload$(printf '\r')"
screen -Rd parceros -X stuff "say Hola Bienvenido al nuevo Jugador :')$(printf '\r')"