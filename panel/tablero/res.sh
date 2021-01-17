#!/bin/bash
# Autor: Di Giraldo
screen -Rd servername -X stuff "say El Servidor se reinicia, GUARDA TU PARTIDA! $(printf '\r')"
sleep 10s
sudo systemctl restart amigos
