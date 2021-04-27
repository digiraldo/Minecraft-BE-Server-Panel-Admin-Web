#!/bin/sh
sudo chown -hR username:www-data dirname/minecraftbe
sleep 2s
sudo chmod -R 775 dirname/minecraftbe
sleep 2s
sudo systemctl start servername
echo “Servidor servername Iniciado”