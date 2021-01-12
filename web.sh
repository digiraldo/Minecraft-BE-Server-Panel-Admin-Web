#!/bin/bash
# Autor: Di Giraldo
# Instale las dependencias necesarias RClone y fuse para montar la nube
echo "Configurando Panel de Administración"
sleep 4s

cd ~
cd minecraftbe
sudo rm -rf panel
sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web
sudo git clone https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web.git
cd Minecraft-BE-Server-Panel-Admin-Web

echo "======================================================================================="
Print_Style "Creando directorio panel..." "$CYAN"
sudo mv panel dirname/minecraftbe/
sudo mv index.php dirname/minecraftbe/
sudo mv location dirname/minecraftbe/
sudo mv misitio.conf dirname/minecraftbe/
sudo mv web.sh dirname/minecraftbe/
cd ~
cd minecraftbe
sleep 4s
sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web